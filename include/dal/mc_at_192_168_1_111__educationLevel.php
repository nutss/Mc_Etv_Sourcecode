<?php
$dalTableeducationLevel = array();
$dalTableeducationLevel["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableeducationLevel["levelName"] = array("type"=>200,"varname"=>"levelName", "name" => "levelName");
$dalTableeducationLevel["levelDesc"] = array("type"=>200,"varname"=>"levelDesc", "name" => "levelDesc");
$dalTableeducationLevel["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableeducationLevel["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableeducationLevel["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__educationLevel"] = &$dalTableeducationLevel;
?>