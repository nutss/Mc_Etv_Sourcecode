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

require("phpmailer/PHPMailerAutoload.php");
require("phpmailer/class.phpmailer.php");


$host = "192.168.200.1";  
$user = "mc.classicscan.co.th";
$pass = "qapmoc";
$database = "mc"; 

$DB = mysqli_connect($host, $user, $pass, $database) or die("Could not connect to host."); 



	$SQLCommand = "SELECT * FROM staffUsers WHERE (staffEmailNotify='1')";
	$RS1 = mysqli_query($DB,$SQLCommand) or die("Data not found.");
	
	if ($RS1->num_rows > 0) {
		
		$mail             = new PHPMailer();
		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		//$mail->Host       = "192.168.1.225";      // sets GMAIL as the SMTP server
		$mail->Host       = "mail.classicscan.co.th";      // sets GMAIL as the SMTP server
		$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
		$mail->Username   = "etv@mac.in.th";  // GMAIL username
		$mail->Password   = "Cl@ss1c#321";            // GMAIL password
		$mail->CharSet = "UTF-8";
		$mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);
		
		//$mail->SMTPDebug = 1;
		$mail->SetFrom('etv@mac.in.th','Media Center File Status');
		
		$mail->Subject    = "ระบบ Media Center File Status วันที่ ".date("Y-m-d H:i:s");
		
		$mail->AltBody    = "ระบบ Media Center File Status"; // optional, comment out and test
		
		
				
					$SQLCommand = "SELECT * FROM mediaInfo WHERE (id=".$_GET["id"].")";
					$RS2 = mysqli_query($DB,$SQLCommand) or die("Data not found.");
		
					while($RS2_ROW = mysqli_fetch_array($RS2)){
		
						$mail_body_html = "หมายเลขไฟล์  : ".$RS2_ROW['fileNo']."<BR>";
						$mail_body_html .= "ชื่อไพล์      : ".$RS2_ROW['fileName']."<BR>";
						$mail_body_html .= "ชื่อวิชา 	   : ".$RS2_ROW['fileSubject']."<BR>";
						$mail_body_html .= "สถานะเซ็นเซอร์	   : ".$RS2_ROW['censorStatus']."<BR>";
						$mail_body_html .= "<div><iframe height=\"100%\" width=\"100%\" src=\"https://mc.classicscan.co.th/censorall_edit.php?editid1=".$_GET["id"]."\" frameBorder=\"0\"></iframe></div>";
						
						$mail_body_html .= "ไฟล์ 	: <a href=\"https://mc.classicscan.co.th/censorall_edit.php?editid1=".$RS2_ROW["id"]."\" target=\"_blank\">Download File</a></td>";
				
					}
		
			
		$mail->MsgHTML("ระบบ Media Cernter File Status <BR> ". $mail_body_html);

		while($RS1_ROW = mysqli_fetch_array($RS1)){

			$mail->addBCC($RS1_ROW['staffEmail']);
			
		}
		
		
		if(!$mail->Send()) {
		  //echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		  //echo "Message sent! ";
		}


	}
	

	$DB -> close();
?>

