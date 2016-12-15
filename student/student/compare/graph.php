<html>
<?php
session_start();
$name=$_SESSION['name'];
$rollno=$_SESSION['rollno'];
$branch=$_SESSION['branch'];
$year=$_SESSION['year'];
$semester=$_SESSION['semester'];

?>
<head>
<title>Compare Career Path</title>
<script type="text/javascript" src="../js/min.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/d3tip.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body id="body">
	<div id='test'>
<script>

example();
function example() {
	var dots = [];
	var levelarr = [];
	var legend = [];
   
    d3.json("data/<?php echo $rollno;?>.json", function(error, json) 
	{	for ( var i = 0; i < json.length; i++) 
		{	var name = json[i].name;
			legend.push({
				"name":name,
				"id":i	
			});
			
			for ( var j = 0; j < json[i].children.length; j++) 
				{
					var level = json[i].children[j].level;
					levelarr.push(level);
					var percent = json[i].children[j].percent;
					var position = json[i].children[j].position;
					dots.push({
						"level":level,
						"color": i,
						"percent": percent,
						"position": position
					});
				}
	}
	draw(dots,levelarr,legend);
    });
}

function draw(dots,levelarr,legend)
{		

	var tooltip = d3.select("body")
	.append("div")
	.style("position", "absolute")
	.style("z-index", "10")
	.style("visibility", "hidden")
	.style("background", "rgba(200,200,200,.8)")
	.style("-moz-border-radius","10px")
	.style("-webkit-border-radius","10px")
	.style("display", "block")
	.style("padding", ".5em")
	.style("min-width", "120px")	
	.style("width", "auto")	
	.style("height", "auto")	
	.style("color", "#000")	
	.style("font-size",".86em")	
	.style("-webkit-transition", "0.1s ease")	
	.style("-moz-transition", "0.1s ease")	
	.style("transition", "0.1s ease")	
	.style("-moz-box-shadow", "0 0 5px 5px #888")	
	.style("-webkit-box-shadow", "0 0 5px 5px#888")	
	.style("box-shadow", "0 0 5px 5px #888")	
	.style();
	
		var lines = [];
		var ticks = 25;
		
		var margin = {
		top : 30,
		right : 30,
		bottom : 15,
		left : 30
		};
		
		var height = 500 - margin.top - margin.bottom;
		var width = 700 - margin.right - margin.left;
		var levels = levelarr.sort();
		
		var yscale = d3.scale.linear().domain([100,0]).range([0,height-margin.bottom-margin.top]);
		var xscale = d3.scale.ordinal().domain(levels).rangeRoundBands([ 0, width - margin.left - margin.right], .1);
		var xaxis = d3.svg.axis().scale(xscale);
		var yaxis = d3.svg.axis().scale(yscale).orient("left").tickSize(5).ticks(ticks);
		
		var svg = d3.select("body")
		.append("svg")
		.attr("class", "chart")
		.attr("width", width + margin.left + margin.right)
		.attr("height", height + margin.top + margin.bottom)
		.append("g")
		.attr("id","compare")
		.attr("class", "compare")
		.attr("width", width + margin.left + margin.right)
		.attr("height", height + margin.top + margin.bottom)
		.attr("transform", "translate(" + margin.left + ", " + margin.top + ")");
		
		
		var legend_rectangle = svg.append("rect")
                            .attr("x", function(){return width-200;})
                            .attr("y", function(){return height-200;})
							.attr("rx",10)
							.attr("ry",10)
                            .attr("width", 200)
                            .attr("height", 130)
							.attr("opacity","0.7");
		
			
							
		svg.selectAll(".chart")
		.data(legend).enter()
		.append("rect")
		.attr("class",function(d){switch(d.id){case 0: return "zero"; break; case 1: return "one"; break; case 2: return "two"; break; case 3: return "three"; break; case 4: return "four"; break;}})
		.attr("x", function(){return width-190;})
		.attr("y", function(d){return height-195+(d.id)*25;})
		.attr("width", 20)
		.attr("height", 20)
		.attr("stroke-width","5px")
		.on("mouseover",function(d){mouse(d.id);})
		.on("mouseout",function(d){mouseout(d.id);});
		
		svg.selectAll(".chart")
		.data(legend).enter()
		.append("text")
		.attr("class",function(d){switch(d.id){case 0: return "zero"; break; case 1: return "one"; break; case 2: return "two"; break; case 3: return "three"; break; case 4: return "four"; break;}})
		.attr("id",function(d){switch(d.id){case 0: return "zero"; break; case 1: return "one"; break; case 2: return "two"; break; case 3: return "three"; break; case 4: return "four"; break;}})
		.attr("x", function(){return width-160;})
		.attr("y", function(d){return height-180+(d.id)*25;})
		.text(function(d){return d.name;})
		.on("mouseover",function(d){mouse(d.id);})
		.on("mouseout",function(d){mouseout(d.id);});
		
		for(i=0;i<dots.length-1;i++)
		{
			if(dots[i].color==dots[i+1].color)
			{	
				var line = svg.append("line")
				.attr("class", function(){switch(dots[i].color){case 0: return "zero"; break; case 1: return "one"; break; case 2: return "two"; break; case 3: return "three"; break; case 4: return "four"; break;}})
				.attr("x1", xscale(dots[i].level)+xscale.rangeBand()/2)
				.attr("y1", yscale(dots[i].percent))
				.attr("x2", xscale(dots[i+1].level)+xscale.rangeBand()/2)
				.attr("y2", yscale(dots[i+1].percent))
				.attr("stroke-width", "5px")
				.attr("stroke", function(){switch(dots[i].color){case 0: return "#d68984"; break; case 1: return "#bfe8ba"; break; case 2: return "#b2dfe5"; break; case 3: return "#d19376"; break; case 4: return "#e3abd1"; break;}});		
			}
		}
		
		svg.selectAll(".chart")
		.data(dots).enter()
		.append("circle")	 
		.attr("r", 10)
		.attr("fill",function(d){switch(d.color){case 0:if(d.company==0){return "#d68984";}else {return "#913630";} break; case 1:if(d.company==0){return "#bfe8ba";}else {return "#55c248";} break; case 2:if(d.company==0){return "#b2dfe5";}else {return "#40afbf";} break; case 3:if(d.company==0){return "#d19376";}else {return "#83482c";} break;case 4:if(d.company==0){return "#e3abd1";}else {return "#b83d91";} break;}})
		.attr("cx",function(d){return xscale(d.level)+xscale.rangeBand()/2;})
		.attr("cy",function(d){return yscale(d.percent);})
		.on("mouseover", function(d){if(d.taskName =='Location') return Null; else return tooltip.style("visibility", "visible").html(function(){return "Semester:"+d.level+"<br>"+"Percentage:"+d.percent+"<br>"+"Position:"+d.position})})
		.on("mousemove", function(){return tooltip.style("top", (d3.event.pageY-10)+"px").style("left",(d3.event.pageX+10)+"px");})
		.on("mouseout", function(){return tooltip.style("visibility", "hidden");});
		
		
		
		
		
		svg.append("g")
		.attr("class", "axis")
		.attr("transform", "translate(0, " + (height - margin.top - margin.bottom) + ")")
		.transition()
		.call(xaxis);
		
		svg.append("g")
		.attr("class", "axis")
		.transition()
		.call(yaxis);
		
		svg.append("button")
		.attr("id","backpage")
		.attr("x", 400)
		.attr("y",400);
		
		
		

}

function mouse(id)
{	
	var referclass = "";	
	var referid = "";	
	if(id=="0")
	{referclass = ".zero";
	referid = "#zero";
	d3.selectAll(referclass).attr("stroke","#d68984").attr("stroke-width","15px");
	d3.selectAll(referid).attr("stroke","none");}
	else if(id=="1")
	{referclass = ".one";
	referid = "#one";
	d3.selectAll(referclass).attr("stroke","#bfe8ba").attr("stroke-width","15px");
	d3.selectAll(referid).attr("stroke","none");}
	else if(id=="2")
	{referclass = ".two";
	referid = "#two";
	d3.selectAll(referclass).attr("stroke","#b2dfe5").attr("stroke-width","15px");
	d3.selectAll(referid).attr("stroke","none");}
	else if(id=="3")
	{referclass = ".three";
	referid = "#three";
	d3.selectAll(referclass).attr("stroke","#d19376").attr("stroke-width","15px");
	d3.selectAll(referid).attr("stroke","none");}
	else if(id=="4")
	{referclass = ".four";
	referid = "#four";
	d3.selectAll(referclass).attr("stroke","#e3abd1").attr("stroke-width","15px");
	d3.selectAll(referid).attr("stroke","none");}
}
function mouseout(id)
{	var refer = "";

	if(id=="0")
	{referclass = ".zero";
	referid = "#zero";
	 d3.selectAll(referclass).attr("stroke","#d68984").attr("stroke-width","5px");
	 d3.selectAll(referid).attr("stroke","none");}
	else if(id=="1")
	{referclass = ".one";
	referid = "#one";
	d3.selectAll(referclass).attr("stroke","#bfe8ba").attr("stroke-width","5px");
	d3.selectAll(referid).attr("stroke","none");}
	else if(id=="2")
	{referclass = ".two";
	referid = "#two";
	d3.selectAll(referclass).attr("stroke","#b2dfe5").attr("stroke-width","5px");
	d3.selectAll(referid).attr("stroke","none");}
	else if(id=="3")
	{referclass = ".three";
	referid = "#three";
	 d3.selectAll(referclass).attr("stroke","#d19376").attr("stroke-width","5px");
	 d3.selectAll(referid).attr("stroke","none");}
	else if(id=="4")
	{referclass = ".four";
	referid = "#four";
	d3.selectAll(referclass).attr("stroke","#e3abd1").attr("stroke-width","5px");
	d3.selectAll(referid).attr("stroke","none");}
}

</script>
</body>
</html>