<?php
/*****************************************************************
File:                   file2MoveFolder.php
Description:			Move File Folder
Created:                13-01-2022
Author:                 CHANAPHON LAMUNSUP
E-mail :                CHANAPHON.L@GMAIL.COM
Website :               nutss.wordpress.com
*****************************************************************/

date_default_timezone_set('Asia/Bangkok');

require("../include/mc_function.inc.php");



$DB = mysqli_connect($host_db, $user_db, $pass_db, $database_db) or die("Could not connect to host."); 



	$SQLCommand = "SELECT * FROM mediaInfo WHERE (id=".$_POST["id"].")";
	$RS1 = mysqli_query($DB,$SQLCommand) or die("");
	
	if ($RS1->num_rows > 0) {

		while($RS1_ROW = mysqli_fetch_array($RS1)){
		
			$fileArray = json_decode($RS1_ROW["fileRaw"],true);
			$fileName = $fileArray[0]["name"];
								
							
				if ($RS1_ROW["fileDuration"] == "") {

					$fileDuration = GetDurationClip($RS1_ROW["fileRaw"]);
				}
				else {
					
					$fileDuration = $RS1_ROW["fileDuration"];
				}



				if (!file_exists($path_www_mc."".$fileName.".md5")) {

					$valuesMD5 = FileCreate_MD5($_POST["id"],$fileName);
				}
				else {
					
					$valuesMD5 =$RS1_ROW["fileMD5"];
				}

					
					
					if (file_exists($path_www_mc.$fileName)) {
						
						$dataArray = explode('.',$fileName);
						$newExtension = $dataArray[count($dataArray)-1];
						$newName = $RS1_ROW["fileNo"].".".$newExtension;	

						$newFileName = CreatePathDateFromID($RS1_ROW["id"],"",$_POST["playlistSubID"],$RS1_ROW["censorStatus"])."".$newName;
						$dateCur = GetDateFromID($RS1_ROW["id"],"",$_POST["playlistSubID"],$RS1_ROW["censorStatus"]);
						if ($fileName <> $newFileName) {
							
								$SQLCommand = "UPDATE mediaInfo SET fileStatus='PROCESS' WHERE (id=".$_POST["id"].");";
								$Query = mysqli_query($DB,$SQLCommand);

							
								if (($RS1_ROW["censorStatus"] == "PASS") OR ($RS1_ROW["censorStatus"] == "REJECT") OR ($RS1_ROW["censorStatus"] == "UNCENSOR")) {
																										
									rename($path_www_mc."".$fileName,$path_www_mc."".$newFileName);
									rename($path_www_mc."".$fileName.".md5",$path_www_mc."".$newFileName.".md5");

									$fileArray[0]["name"] = str_replace("/","\/",$newFileName);
									$fileArray[0]["usrName"] = $newName;
									$fileArray[0]["searchStr"] = $newName;

									$SQLCommand = "UPDATE mediaInfo SET fileRaw='".json_encode($fileArray,JSON_UNESCAPED_UNICODE)."',filePath='".$newFileName."' WHERE (id=".$_POST["id"].");";
									$Query = mysqli_query($DB,$SQLCommand);
									
	
								}
								elseif ($RS1_ROW["censorStatus"] == "PLAYLIST"){
										
									copy($path_www_mc."".$fileName,$path_www_mc."".$newFileName);
									copy($path_www_mc."".$fileName.".md5",$path_www_mc."".$newFileName.".md5");
									
								}



								$SQLCommand = "UPDATE mediaInfo SET fileStatus='READY',fileMD5='".$valuesMD5."',fileDuration='".$fileDuration."' WHERE (id=".$_POST["id"].");";
								$Query = mysqli_query($DB,$SQLCommand);
								
						}


						
					}
			


	
		}

	}
	

	$DB->close();

?>

