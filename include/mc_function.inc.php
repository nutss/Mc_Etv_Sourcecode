<?php

$hostname_mc = "192.168.200.1";
$path_www_mc = "/website/mc/";

$wget_command = "/usr/bin/wget";

$host_db = "192.168.200.1";  
$user_db = "mc.classicscan.co.th";
$pass_db = "qapmoc";
$database_db = "mc";

function GetPathYDM($CensorStatus) {
	
	if ($CensorStatus == "PASS") {
		
		$upload_path = "files/share";
	}
	elseif (($CensorStatus == "UNCENSOR") OR ($CensorStatus == "REJECT")) {
		
		$upload_path = "files/ingest";
	}
	elseif (($CensorStatus == "PLAYLIST")) {
		
		$upload_path = "files/onair";
	}
	
		$current_year = date("Y");
		$current_month = date("m");
		$current_day = date("d");
		
		$year_path = $upload_path."/".$current_year."/";
		$month_path = $upload_path."/".$current_year."/".$current_month."/";
		$day_path = $upload_path."/".$current_year."/".$current_month."/".$current_day."/";


	return ($day_path);

}


function GetPathDatePlaylistYDM($DatePlaylist,$CensorStatus) {
	

	if ($CensorStatus == "PASS") {
		
		$upload_path = "files/share";
	}
	elseif (($CensorStatus == "UNCENSOR") OR ($CensorStatus == "REJECT")) {
		
		$upload_path = "files/ingest";
	}
	elseif (($CensorStatus == "PLAYLIST")) {
		
		$upload_path = "files/onair";
	}
		$DateCurrent=date_create($DatePlaylist);
		
	
		$current_year = date_format($DateCurrent,"Y");
		$current_month = date_format($DateCurrent,"m");
		$current_day = date_format($DateCurrent,"d");
		
		$year_path = $upload_path."/".$current_year."/";
		$month_path = $upload_path."/".$current_year."/".$current_month."/";
		$day_path = $upload_path."/".$current_year."/".$current_month."/".$current_day."/";

	return ($day_path);

}

function GetPathFileNoYDM($FileNo,$CensorStatus) {
	

	if ($CensorStatus == "PASS") {
		
		$upload_path = "files/share";
	}
	elseif (($CensorStatus == "UNCENSOR") OR ($CensorStatus == "REJECT")) {
		
		$upload_path = "files/ingest";
	}
	elseif (($CensorStatus == "PLAYLIST")) {
		
		$upload_path = "files/onair";
	}
	
	
		$current_year = ("25".substr($FileNo,2,2))-543;
		$current_month = substr($FileNo,5,2);
		$current_day = substr($FileNo,8,2);
		
		$year_path = $upload_path."/".$current_year."/";
		$month_path = $upload_path."/".$current_year."/".$current_month."/";
		$day_path = $upload_path."/".$current_year."/".$current_month."/".$current_day."/";

	return ($day_path);

}

function CreatePathFileNoYDM($FileNo,$CensorStatus) {
	
	global $path_www_mc;

	if ($CensorStatus == "PASS") {
		
		$upload_path ="files/share";
	}
	elseif (($CensorStatus == "UNCENSOR") OR ($CensorStatus == "REJECT")) {
		
		$upload_path = "files/ingest";
	}
	elseif (($CensorStatus == "PLAYLIST")) {
		
		$upload_path = "files/onair";
	}
	
		
	
	
		$current_year = ("25".substr($FileNo,2,2))-543;
		$current_month = substr($FileNo,5,2);
		$current_day = substr($FileNo,8,2);
		
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

	$current_year = substr(date("Y")+543,2);
	$current_month = date("m");
	$current_day = date("d");
	
	//$SQLCommand = "SELECT fileNo FROM mediaInfo where (fileNo LIKE 'F-".$current_year."-".$current_month."-".$current_day."-%') ORDER BY fileNo DESC LIMIT 1";
	$SQLCommand = "SELECT fileNo FROM mediaInfo ORDER BY fileNo DESC LIMIT 1";
	
	$RS = CustomQuery($SQLCommand);
	if ($data = db_fetch_array($RS)) {
	
		$fileNo =  "F-".$current_year."-".$current_month."-".$current_day."-".sprintf("%06d",substr($data["fileNo"],-6)+1);
	}
	else {
	
		$fileNo =  "F-".$current_year."-".$current_month."-".$current_day."-000001";
	}
	
	return ($fileNo);

}


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

	
	
function FileMoveFolder($mediaInfoID,$playlistSubID) {
/*	
	
	$curl_cmd = curl_init();
	
	
	$Url = "http://".$hostname_mc."/file2MoveFloder.php?";
	
	$Url.= "id=".$mediaInfoID."";
	
	curl_setopt($curl_cmd, CURLOPT_URL, $Url);
	curl_setopt($curl_cmd, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curl_cmd, CURLOPT_SSL_VERIFYPEER, true);
	
	$output = curl_exec($curl_cmd);
	curl_close($curl_cmd);
*/

	global $hostname_mc,$wget_command;

	$Url = "http://".$hostname_mc."/scripts/file2MoveFolder.php";
	$UrlOption.= "id=".$mediaInfoID."&";
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

		//echo $SQLCommand;

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
