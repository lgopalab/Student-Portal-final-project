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
<link rel="stylesheet" type="text/css" href="position.css">
<body>
<script type="text/javascript" src="../js/d3.min.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/d3tip.js"></script>
<script>

var margin = {top: 30, right: 30, bottom: 15, left: 30},
    width = 700 - margin.left - margin.right,
    height = 400 - margin.top - margin.bottom;

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
    return "<strong>Aggregate:</strong> <span style='color:skyblue'>" + d.aggregate + "</span>";
  })

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");



d3.json("data.json", function(error, data) {
  x.domain(data.map(function(d) { return d.rollno; }));
  y.domain([0, 100]);



  svg.selectAll(".bar")
      .data(data)
      .enter().append("rect")
      .attr("class", function(d){if(d.rollno=="10211a0521"){return "bar-select";} else {return "bar";} })
      .attr("x", function(d) { return x(d.rollno); })
      .attr("width", x.rangeBand())
      .attr("y", function(d) { return y(d.aggregate); })
      .attr("height", function(d) { return height - y(d.aggregate); })
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
	  
	svg.call(tip);  

});

function type(d) {
  d.frequency = +d.frequency;
  return d;
}

</script>