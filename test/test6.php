<?php 
	session_start();
	ob_start();
	require 'connect.php';
	error_reporting(0);
	ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		
		<title>Questionnair</title>
		
		
		<!--=====================================================
			CSS Stylesheets
		=====================================================-->
		<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='css/linea.css' >
		<link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='css/style.css' >
		
</head>
	<body>
<?php
$userid = $_SESSION['userid'];
$userid = "1";
echo "userid = ".$userid;
echo "<br>";

$sql = "SELECT * FROM answer WHERE userid LIKE '%$userid%'";
					$query = mysqli_query($conn,$sql);
					while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
						//print_r($result);
						//echo "<br>";
						$qa[$result[questionnumber]]=$result[answer];
					}
					
$sql = "SELECT * FROM skill";
					$query = mysqli_query($conn,$sql);
					while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
						//print_r($skill);
						//echo "<br>";
						$skill[$result[questionnumber]]=$result[skill];
					}
//print_r($qa);
//print_r($skill);
//echo $skill["1"];
echo "<br>";
$skillresult=array();		
$skillresult[1]=0;		
$skillresult[2]=0;		
$skillresult[3]=0;		
$skillresult[4]=0;		
$skillresult[5]=0;		
$skillresult[6]=0;		
$skillresult[7]=0;		
$skillresult[8]=0;		

for ($q=1;$q<=80;$q++){
	if($qa[$q] == "Yes"){
		$skillresult[$skill[$q]]++;
	}
}
echo "skillresult 1 = ".$skillresult[1];
echo "<br>";
echo "skillresult 2 = ".$skillresult[2];
echo "<br>";
echo "skillresult 3 = ".$skillresult[3];
echo "<br>";
echo "skillresult 4 = ".$skillresult[4];
echo "<br>";
echo "skillresult 5 = ".$skillresult[5];
echo "<br>";
echo "skillresult 6 = ".$skillresult[6];
echo "<br>";
echo "skillresult 7 = ".$skillresult[7];
echo "<br>";
echo "skillresult 8 = ".$skillresult[8];
echo "<br>";

//-------------------------------------------------------
// Graph
//-------------------------------------------------------
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_radar.php');
 
// Create the basic rtadar graph
//$graph = new RadarGraph(300,200);
$graph = new RadarGraph(600,400);
 
// Set background color and shadow
$graph->SetColor("white");
$graph->SetShadow();
 
// Position the graph
$graph->SetCenter(0.4,0.55);
 
// Setup the axis formatting     
$graph->axis->SetFont(FF_Sarabun,FS_NORMAL);
$graph->axis->SetWeight(2);
 
// Setup the grid lines
$graph->grid->SetLineStyle("longdashed");
$graph->grid->SetColor("navy");
$graph->grid->Show();
$graph->HideTickMarks();
        
// Setup graph titles
//$graph->title->Set("ผลทักษะ");
$graph->title->Set("Skill");
//$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->title->SetFont(FF_Sarabun,FS_NORMAL);
//$graph->SetTitles(array("ด้านภาษา","คณิตศาสตร์","ด้านมิติสัมพันธ์","ด้านร่างกายและการเคลื่อนไหว","ด้านดนตรี","ด้านความสัมพันธ์กับผู้อื่น","ด้านการเข้าใจตนเอง","ด้านการเข้าใจธรรมชาติ"));
$graph->SetTitles(array("Language","Match","Relation","Body","Music","Relationship","Self-understanding","The nature"));
// Create the first radar plot        
$plot = new RadarPlot(array(30,80,60,40,71,81,47));
$plot->SetLegend("Goal");
$plot->SetColor("red","lightred");
$plot->SetFill(false);
$plot->SetLineWeight(2);
 
// Create the second radar plot
$plot2 = new RadarPlot(array($skillresult[1],$skillresult[2],$skillresult[3],$skillresult[4],$skillresult[5],$skillresult[6],$skillresult[7],$skillresult[8]));
//$plot2->SetLegend("ทักษะ");
//$plot2->SetLegend("Skill");
$plot2->SetColor("blue","lightred");
 
// Add the plots to the graph
$graph->Add($plot2);
//$graph->Add($plot);
 
// And output the graph
//$graph->Stroke();
//$graph->StrokeCSIM();
$fileName = "./graphoutput/myimage.png";
unlink($fileName);
$graph->Stroke($fileName);
//<img src="showgraph.php?a=1&b=2">
?>
<img src="./graphoutput/myimage.png">

	</body>
</html>