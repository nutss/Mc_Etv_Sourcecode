<?php
/*****************************************************************
File:                   DB2MAIL.php
Description:    SEND DB TO MAIL
Created:                02-04-2010
Author:                 CHANAPHON LAMUNSUP
E-mail :                CHANAPHON.L@GMAIL.COM
Website :               nutss.wordpress.com
*****************************************************************/
/*date_default_timezone_set('Asia/Bangkok');

require("../include/mc_function.inc.php");


		$DB = mysqli_connect($host_db, $user_db, $pass_db, $database_db) or die("Could not connect to host."); 

		$filename_path = $path_www_mc.$_POST["filename"];
		$valuesMD5 = hash_file("md5",$filename_path);
		
		if (!file_exists($filename_path.".md5")) {
			$fileMD5 = fopen($filename_path .".md5", "w") or die("Unable to open file!");
			fwrite($fileMD5, $valuesMD5);
			fclose($fileMD5);
		}

		$SQLCommand = "UPDATE mediaInfo SET fileMD5='".$valuesMD5."' WHERE (fileNo=".$_POST["fileNo"].")";
		$Query = mysqli_query($DB,$SQLCommand);

*/
?>

