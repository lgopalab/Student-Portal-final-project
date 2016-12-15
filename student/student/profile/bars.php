<!DOCTYPE html>
<?php
session_start();
$name=$_SESSION['name'];
$rollno=$_SESSION['rollno'];
$branch=$_SESSION['branch'];
$year=$_SESSION['year'];
$semester=$_SESSION['semester'];
?>
<meta charset="utf-8">
<style>

body {
  font: 10px sans-serif;
}

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.bar {
  fill: #00CCFF;
}

.bar:hover {
  fill: orangered ;
}

.x.axis path {
  display: none;
}

.d3-tip {
  line-height: 1;
  font-weight: bold;
  padding: 12px;
  background: rgba(0, 0, 0, 0.8);
  color: #fff;
  border-radius: 2px;
}

/* Creates a small triangle extender for the tooltip */
.d3-tip:after {
  box-sizing: border-box;
  display: inline;
  font-size: 10px;
  width: 100%;
  line-height: 1;
  color: rgba(0, 0, 0, 0.8);
  content: "\25BC";
  position: absolute;
  text-align: center;
}

/* Style northward tooltips differently */
.d3-tip.n:after {
  margin: -1px 0 0 0;
  top: 100%;
  left: 0;
}
</style>
<body>
<script type="text/javascript" src="../js/d3.min.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/d3tip.js"></script>
<script>

var margin = {top: 200, right: 30, bottom: 10, left: 30},
    width = 800 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

var formatPercent = d3.format("0");

var x = d3.scale.ordinal()
    .rangeRoundBands([0, width], .1);

var y = d3.scale.linear()
    .range([height, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .tickFormat(formatPercent);
var tip = d3.tip()
  .attr('class', 'd3-tip')
  .offset([-10, 0])
  .html(function(d) {
	var split = d.marks.split(',');
	var str = '<table><th align="left"><u>SUBJECT</u></th><th><u>INTERNAL</u></th><th><u>EXTERNAL</u></th>';
	for(i=0;i<split.length;i++)
	{	var split1 = split[i].split(':')
		str += '<tr>';
		for(j=0;j<split1.length;j++)
		{
			str += '<td>'+split1[j]+'</td>';
		}
		str += '</tr>'
	}
	str += '</table>';
	return str;
  })

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

svg.call(tip);

d3.json("data/<?php echo $rollno;?>.json", function(error, data) {
  x.domain(data.map(function(d) { return d.semester; }));
  y.domain([0, 100]);

  

  svg.selectAll(".bar")
      .data(data)
      .enter().append("rect")
      .attr("class", "bar")
      .attr("x", function(d) { return x(d.semester); })
      .attr("width", x.rangeBand())
      .attr("y", function(d) { return y(d.percent); })
      .attr("height", function(d) { return height - y(d.percent); })
      .on('mouseover', tip.show)
      .on('mouseout', tip.hide)
	  
  	svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis)
	.selectAll("text")  
            .style("text-anchor", "end")
            .attr("dx", "15em")
            .attr("dy", "-0.5em")
            .attr("transform", function(d) {
                return "rotate(-90)" 
                });	
				
  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Aggregate");  

});

function type(d) {
  d.frequency = +d.frequency;
  return d;
}

</script>
