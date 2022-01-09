<?php
$dalTablestaffUsers = array();
$dalTablestaffUsers["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
$dalTablestaffUsers["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTablestaffUsers["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablestaffUsers["staffEmail"] = array("type"=>200,"varname"=>"staffEmail", "name" => "staffEmail");
$dalTablestaffUsers["staffEmailNotify"] = array("type"=>200,"varname"=>"staffEmailNotify", "name" => "staffEmailNotify");
$dalTablestaffUsers["staffFullName"] = array("type"=>200,"varname"=>"staffFullName", "name" => "staffFullName");
$dalTablestaffUsers["staffPassword"] = array("type"=>200,"varname"=>"staffPassword", "name" => "staffPassword");
$dalTablestaffUsers["staffStatus"] = array("type"=>200,"varname"=>"staffStatus", "name" => "staffStatus");
$dalTablestaffUsers["staffUsername"] = array("type"=>200,"varname"=>"staffUsername", "name" => "staffUsername");
	$dalTablestaffUsers["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__staffUsers"] = &$dalTablestaffUsers;
?>