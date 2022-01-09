<?php
/*****************************************************************
File:                   DB2MAIL.php
Description:    SEND DB TO MAIL
Created:                02-04-2010
Author:                 CHANAPHON LAMUNSUP
E-mail :                CHANAPHON.L@GMAIL.COM
Website :               nutss.wordpress.com
*****************************************************************/

date_default_timezone_set('Asia/Bangkok');

require("../include/mc_function.inc.php");



$DB = mysqli_connect($host_db, $user_db, $pass_db, $database_db) or die("Could not connect to host.");  



	$SQLCommand = "SELECT * FROM mediaInfo WHERE (id=".$_GET["id"].")";
	$RS1 = mysqli_query($DB,$SQLCommand) or die("");
	
	if ($RS1->num_rows > 0) {
		
		while($RS1_ROW = mysqli_fetch_array($RS1)){
		
			$fileArray = json_decode($RS1_ROW["fileRaw"],true);
	
			$fileName = $fileArray[0]["name"].".md5";
					
					if (file_exists($path_www_mc."".$fileName)) {

						unlink($path_www_mc."".$fileName);
					}
		}

	}
	

	$DB->close();
?>

