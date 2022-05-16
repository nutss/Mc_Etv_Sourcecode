<?php
$dalTableteacher = array();
$dalTableteacher["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableteacher["teacherName"] = array("type"=>200,"varname"=>"teacherName", "name" => "teacherName");
$dalTableteacher["teacherAddress"] = array("type"=>200,"varname"=>"teacherAddress", "name" => "teacherAddress");
$dalTableteacher["teacherTelephone"] = array("type"=>200,"varname"=>"teacherTelephone", "name" => "teacherTelephone");
$dalTableteacher["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableteacher["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableteacher["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__teacher"] = &$dalTableteacher;
?>