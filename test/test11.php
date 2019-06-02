<?php
//echo substr("questiongroup", 0, 13)."<br>";
//get number of question
				$file="../admin/admin.txt";
					$fp = fopen($file, "r+");
					if (!$fp) {echo "File Title error";}
					while (!feof($fp)) {
        				$file = fgets($fp);
						if (substr($file, 0, 13)=="questiongroup"){
							$num=explode("=",$file);
							$_SESSION['questiongroup'] = $num[1]; 
						}
						if (substr($file, 0, 16)=="numberofquestion"){
							$num=explode("=",$file);
							$_SESSION['numberofquestion'] = $num[1]; 
						}
						if (substr($file, 0, 14)=="numberofanswer"){
							$num=explode("=",$file);
							$_SESSION['numberofanswer'] = $num[1]; 
						}
        			}
				echo "questiongroup=".$_SESSION['questiongroup'];
				echo "<br>";
				echo "numberofquestion=".$_SESSION['numberofquestion'];
				echo "<br>";
				echo "numberofanswer=".$_SESSION['numberofanswer'];
				echo "<br>";
					
?>