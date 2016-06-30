<?php 
require_once ('jpgraph-4.0.0/src/jpgraph.php');
require_once ('jpgraph-4.0.0/src/jpgraph_line.php');
require_once ('jpgraph-4.0.0/src/jpgraph_bar.php');
 
$ydata = array_map('intval', explode(',', $_GET['data']));
//echo $_GET['data'];
$xaxis = array(1,2,3,4,5,6);
// if(! $_GET['data']){
// 	$ydata = array(1,5,3,6,2,4);
// }
// else{
// 	$ydata = array_map('intval', explode(",", $_GET['data']));
// }


 
 // Width and height of the graph
$width = 600; $height = 200;
 
// Create a graph instance
$graph = new Graph($width,$height);
 
// Specify what scale we want to use,
// int = integer scale for the X-axis
// int = integer scale for the Y-axis
$graph->SetScale('intint');
 
// Setup a title for the graph
$graph->title->Set('example');
 
// Setup titles and X-axis labels
$graph->xaxis->title->Set('x axis');
 
// Setup Y-axis title
$graph->yaxis->title->Set('Y axis');
 
// Create the linear plot
$lineplot=new LinePlot($ydata);
$lineplot->SetFillColor('orange@0.5');

// Add the plot to the graph
$graph->Add($lineplot);

 
// Display the graph
$graph->Stroke();
 
?>
