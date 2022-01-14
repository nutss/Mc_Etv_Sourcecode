<?php
/*****************************************************************
File:                   mc_function.inc.php
Description:			Function and Library
Created:                13-01-2022
Author:                 CHANAPHON LAMUNSUP
E-mail :                CHANAPHON.L@GMAIL.COM
Website :               nutss.wordpress.com
*****************************************************************/

$hostname_mc = "192.168.200.1";
$path_www_mc = "/website/mc/";

$wget_command = "/usr/bin/wget";

$host_db = "192.168.200.1";  
$user_db = "mc.classicscan.co.th";
$pass_db = "qapmoc";
$database_db = "mc";



function GetDateFromID($mediaInfoID,$playlistID,$playlistSubID,$CensorStatus) {
	global $host_db, $user_db, $pass_db, $database_db;
	

	$DB = mysqli_connect($host_db, $user_db, $pass_db, $database_db) or die("Could not connect to host."); 


	if (($CensorStatus == "UNCENSOR") OR ($CensorStatus == "REJECT") OR ($CensorStatus == "PASS")) {

		$SQLCommand = "SELECT * FROM mediaInfo WHERE (id=".$mediaInfoID.")";
			$RS1 = mysqli_query($DB,$SQLCommand) or die("");
	
		if ($RS1->num_rows > 0) {
			if ($RS1_ROW = mysqli_fetch_array($RS1)){
					
				$FileDate = $RS1_ROW["filedate"];
			}
		}

	}
	elseif ($CensorStatus == "PLAYLIST") {
		
		if ($playlistID !=  ""){
			
			$SQLCommand = "SELECT * FROM playlistMain WHERE (id=".$playlistID.")";
			$RS1 = mysqli_query($DB,$SQLCommand) or die("");
	
					if ($RS1->num_rows > 0) {
						if ($RS1_ROW = mysqli_fetch_array($RS1)){
							
							$FileDate = $RS1_ROW["playlistOnairDate"];
						}
					}
		}
	

		elseif ($playlistSubID != ""){

			$SQLCommand = "SELECT * FROM playlistSub WHERE ((mediaInfoID=".$mediaInfoID.") AND (id =".$playlistSubID."))";
				$RS1 = mysqli_query($DB,$SQLCommand) or die("");
					
					if ($RS1->num_rows > 0) {
						if ($RS1_ROW = mysqli_fetch_array($RS1)){

							$SQLCommand = "SELECT * FROM playlistMain WHERE (id=".$RS1_ROW["playlistID"].")";
							
								$RS2 = mysqli_query($DB,$SQLCommand) or die("");
								if ($RS2->num_rows > 0) {
									if ($RS2_ROW = mysqli_fetch_array($RS2)){
											$FileDate = $RS2_ROW["playlistOnairDate"];
											
									}

								}
						}
					}
		}			

	}
	return ($FileDate);
}


function CreatePathDateFromID($mediaInfoID,$playlistID,$playlistSubID,$CensorStatus) {

	global $path_www_mc;

	if ($CensorStatus == "PASS") {
		
		$upload_path = "files/share";
	}
	elseif (($CensorStatus == "UNCENSOR") OR ($CensorStatus == "REJECT")) {
		
		$upload_path = "files/ingest";
	}
	elseif (($CensorStatus == "PLAYLIST")) {
		
		$upload_path = "files/onair";
	}
		$DateCurrent=date_create(GetDateFromID($mediaInfoID,$playlistID,$playlistSubID,$CensorStatus));
		
	
		$current_year = date_format($DateCurrent,"Y");
		$current_month = date_format($DateCurrent,"m");
		$current_day = date_format($DateCurrent,"d");
		
		$year_path = $upload_path."/".$current_year."/";
		$month_path = $upload_path."/".$current_year."/".$current_month."/";
		$day_path = $upload_path."/".$current_year."/".$current_month."/".$current_day."/";


		if (!file_exists($year_path)) {
			mkdir($path_www_mc."".$year_path, 0777, true);
		}
		
		
		if (!file_exists($month_path)) {
			mkdir($path_www_mc."".$month_path, 0777, true);
		}
		
		if (!file_exists($day_path)) {
			mkdir($path_www_mc."".$day_path, 0777, true);
		}


	return ($day_path);

}


function GenFileNo() {


	$SQLCommand = "SELECT fileNo FROM mediaInfo ORDER BY fileNo DESC LIMIT 1";
	
	$RS = CustomQuery($SQLCommand);
	if ($data = db_fetch_array($RS)) {

		$fileNo = $data["fileNo"] + 1;
		
	}
	else {
	
		$fileNo =  "1";
	}
	
	return ($fileNo);

}

/*
function GetDateFromFileNo($FileNo) {

	global $host_db, $user_db, $pass_db, $database_db;
	
	$DB = mysqli_connect($host_db, $user_db, $pass_db, $database_db) or die("Could not connect to host."); 
	

		$SQLCommand = "SELECT * FROM mediaInfo WHERE (FileNo = '".$FileNo."')";

		$RS1 = mysqli_query($DB,$SQLCommand) or die("");
		

			if ($RS1->num_rows >= 0) {
				
				$filedate = $RS1_ROW["filedate"];
			}


	return ($filedate);
}
*/

function GetDurationClip($file_info) {
	
	include('getID3/getid3/getid3.php');
	

	global $path_www_mc;

	$fileArray = json_decode($file_info,true);
	
	$getID3 = new getID3;
	$ThisFileInfo = $getID3->analyze($path_www_mc."".$fileArray[0]["name"]);
	
	$getID3->CopyTagsToComments($ThisFileInfo);
	
	
	$fileDuration = gmdate("H:i:s", $ThisFileInfo['playtime_seconds']);
	return ($fileDuration);
}


function FileCreate_MD5($id,$fileName) {
		
	global $path_www_mc;
		

	$filename_path = $path_www_mc."".$fileName;
	$valuesMD5 = hash_file("md5",$filename_path);
	
	if (!file_exists($filename_path.".md5")) {
		$fileMD5 = fopen($filename_path .".md5", "w") or die("Unable to open file!");
		fwrite($fileMD5, $valuesMD5);
		fclose($fileMD5);
	}

	return ($valuesMD5);

}

	
	
function FileMoveFolder($mediaInfoID,$playlistID,$playlistSubID) {

	global $hostname_mc,$wget_command;

	$Url = "http://".$hostname_mc."/scripts/file2MoveFolder.php";
	$UrlOption.= "id=".$mediaInfoID."&";
	$UrlOption.= "playlistID=".$playlistID."&";
	$UrlOption.= "playlistSubID=".$playlistSubID;


	
	$command_sh = $wget_command." ".$Url." --post-data \"".$UrlOption."\"";
	
	executeBackgroundProces($command_sh);


}		
	
function FileDeleteMD5($mediaInfoID) {
	
	global $hostname_mc;

	$curl_cmd = curl_init();
	
	
	$Url = "http://".$hostname_mc."/scripts/file2DeleteMD5.php?";
	
	$Url.= "id=".$mediaInfoID."";
	
	
	curl_setopt($curl_cmd, CURLOPT_URL, $Url);
	curl_setopt($curl_cmd, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curl_cmd, CURLOPT_SSL_VERIFYPEER, true);
		
	$output = curl_exec($curl_cmd);
	curl_close($curl_cmd);
}	

	
function AlertEmailCensorStatus($mediaInfoID) {
	

	$curl_cmd = curl_init();
	
	
	$Url = "http://".$hostname_mc."/mail2AlertCensor.php?";
	
	$Url.= "id=".$mediaInfoID."";
	
	
	curl_setopt($curl_cmd, CURLOPT_URL, $Url);
	curl_setopt($curl_cmd, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curl_cmd, CURLOPT_SSL_VERIFYPEER, true);
	
	$output = curl_exec($curl_cmd);
	curl_close($curl_cmd);
}		
		
function PlaylistStatusProcess($mediaInfoID,$censorStatus) {

	global $host_db, $user_db, $pass_db, $database_db;
	
	$DB = mysqli_connect($host_db, $user_db, $pass_db, $database_db) or die("Could not connect to host."); 
	

		$SQLCommand = "SELECT * FROM playlistSub WHERE (mediaInfoID=".$mediaInfoID.")";

		$RS1 = mysqli_query($DB,$SQLCommand) or die("");
		
		
		if ($censorStatus == "PASS") {

			if ($RS1->num_rows <= 0) {
				
				$SQLCommand = "UPDATE mediaInfo SET censorStatus='".$censorStatus."' WHERE (id=".$mediaInfoID.")";
				$Query = mysqli_query($DB,$SQLCommand);
			}

		} 
		
		elseif ($censorStatus == "PLAYLIST") {
		
				$SQLCommand = "UPDATE mediaInfo SET censorStatus='".$censorStatus."' WHERE (id=".$mediaInfoID.")";
				$Query = mysqli_query($DB,$SQLCommand);		
		
		}


}	

function executeBackgroundProces($command) {

    $command = $command . ' > /dev/null 2>&1 & echo $!';
    exec ( $command, $op );
    $pid = ( int ) $op [0];
    if ($pid != "")
        return $pid;

    return false;
}

function executeProces($command) {


    exec ( $command, $op );
    $pid = ( int ) $op [0];
    if ($pid != "")
        return $pid;

    return false;
}

?>
