<?php
$dalTablesubject = array();
$dalTablesubject["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
$dalTablesubject["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTablesubject["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablesubject["subjectCode"] = array("type"=>200,"varname"=>"subjectCode", "name" => "subjectCode");
$dalTablesubject["subjectDesc"] = array("type"=>200,"varname"=>"subjectDesc", "name" => "subjectDesc");
$dalTablesubject["subjectName"] = array("type"=>200,"varname"=>"subjectName", "name" => "subjectName");
	$dalTablesubject["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__subject"] = &$dalTablesubject;
?>