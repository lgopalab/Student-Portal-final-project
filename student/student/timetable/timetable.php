<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" type="css" href="css/style.css">
<body>
<script src="js/d3.min.js"></script>
<script src="js/d3tip.js"></script>
<script>
 
var margin = {top: 50, right: 50, bottom: 50, left: 50},
    width = 800 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;
	
var format = d3.time.format("%I:%M");	
var start = "09:10";
var end = "16:10";

var x = d3.time.scale()
    .domain([format.parse(start),format.parse(end)])
    .range([0, width]);
	
var y = d3.scale.ordinal()
	.domain(["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"])
	.rangeRoundBands([0, height], .1);
	
var tip = d3.tip()
      .attr('class', 'd3-tip')
      .style({border: '1px solid #fff', 'box-shadow': '1px 1px 4px rgba(0,0,0,0.5)', 'border-radius': 'none'})
      .html(function(d) { return d.subject+'<br>'+'<span>' + d.from + '</span>' +' to '+'<span>'+d.to+'</span>'  })
      .offset([-10, 0]);
	
var svg = d3.select("body")
	.append("svg")
	.attr("class","chart")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
 
svg.append("g")
    .attr("class", "x axis")
    .call(d3.svg.axis().scale(x).orient("top"));
	
svg.append("g")
    .attr("class", "y axis")
    .call(d3.svg.axis().scale(y).orient("left"));
	
svg.call(tip);	

d3.json("data.json", function(error, data) {

svg.selectAll(".chart")
      .data(data)
      .enter().append("rect")
      .attr("class", function(d){if(d.subject=="break"||d.subject=="BREAK"||d.subject=="Break"||d.subject=="Lunch"||d.subject=="LUNCH"||d.subject=="lunch"){return "bar-break";}else return "bar";})
      .attr("x", function(d) { return x(format.parse(d.from)); })
      .attr("width", function(d){return x(format.parse(d.to))-x(format.parse(d.from))-2})
      .attr("y", function(d) { return y(d.day); })
      .attr("height", function(d) { return y.rangeBand(); })
	  .on("mouseover",tip.show)
	  .on("mouseout",tip.hide);
	  
	  
svg.selectAll(".chart")
      .data(data)
      .enter()
	  .append("text")
	  .attr("fill", "white")
	  .attr("font-size","10px")
	  .attr("font-family","Arial, sans-serif")
      .attr("x", function(d) { return x(format.parse(d.from))+(x(format.parse(d.to))-x(format.parse(d.from)))/3; })
      .attr("y", function(d) { return y(d.day)+y.rangeBand()/2; })
      .text(function(d){if(d.subject=="break"||d.subject=="BREAK"||d.subject=="Break"||d.subject=="Lunch"||d.subject=="LUNCH"||d.subject=="lunch"){return "";}else return d.subject;});
	  

});	
 
</script>