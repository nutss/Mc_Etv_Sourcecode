<?php
$dalTableteacher = array();
$dalTableteacher["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
$dalTableteacher["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableteacher["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableteacher["teacherAddress"] = array("type"=>200,"varname"=>"teacherAddress", "name" => "teacherAddress");
$dalTableteacher["teacherName"] = array("type"=>200,"varname"=>"teacherName", "name" => "teacherName");
$dalTableteacher["teacherTelephone"] = array("type"=>200,"varname"=>"teacherTelephone", "name" => "teacherTelephone");
	$dalTableteacher["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__teacher"] = &$dalTableteacher;
?>