		<!--=====================================================
			สรุปผลการทดสอบ
		=====================================================-->
<!--								<div class='intro-text' >
									<center><font color="white"><h2>สรุปผลการทดสอบ</h2></font></center>
								</div>
-->
		<center><font color="blue"><h2>สรุปผลการทดสอบ</h2></font></center>
<?php
if($questiongroup==1){
$sql = "SELECT * FROM answer WHERE (userid = $userid) AND (questiongroup = $questiongroup)";
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
for ($q=1;$q<=$_SESSION['numberofquestion'];$q++){
	if($qa[$q] == "Yes"){
		$skillresult[$skill[$q]]++;
	}
}
//-------------------------------------------------------
// Graph
//-------------------------------------------------------
require_once ('./jpgraph/jpgraph.php');
require_once ('./jpgraph/jpgraph_radar.php');

// Create the basic rtadar graph
//$graph = new RadarGraph(300,200);
$graph = new RadarGraph(450,300);

// Set background color and shadow
$graph->SetColor("white");
$graph->SetShadow();

// Position the graph
//$graph->SetCenter(0.4,0.55);

// Setup the axis formatting
//$graph->axis->SetFont(FF_Sarabun,FS_NORMAL);
$graph->axis->SetFont(FF_FONT1,FS_BOLD);
$graph->axis->SetWeight(2);

// Setup the grid lines
$graph->grid->SetLineStyle("longdashed");
$graph->grid->SetColor("navy");
$graph->grid->Show();
$graph->HideTickMarks();

// Setup graph titles
//$graph->title->Set("ผลทักษะ");
$graph->title->Set("Skill");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->title->SetFont(FF_Sarabun,FS_NORMAL);
//$graph->SetTitles(array("ด้านภาษา","คณิตศาสตร์","ด้านมิติสัมพันธ์","ด้านร่างกายและการเคลื่อนไหว","ด้านดนตรี","ด้านความสัมพันธ์กับผู้อื่น","ด้านการเข้าใจตนเอง","ด้านการเข้าใจธรรมชาติ"));
$graph->SetTitles(array("Language","Match","Relation","Body","Music","Relationship","confidence","The nature"));
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
$fileName ="./graphoutput/".$userid.".png";
if (file_exists($fileName)) {unlink($fileName);}
$graph->Stroke($fileName);
//<img src="showgraph.php?a=1&b=2">
?>

<center><img src="<?php echo $fileName; ?>"></center>

		<!--=====================================================
			จบสรุปผลการทดสอบ
		=====================================================-->