<?php
$dalTablemc_ugrights = array();
$dalTablemc_ugrights["AccessMask"] = array("type"=>200,"varname"=>"AccessMask", "name" => "AccessMask");
$dalTablemc_ugrights["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID");
$dalTablemc_ugrights["Page"] = array("type"=>201,"varname"=>"Page", "name" => "Page");
$dalTablemc_ugrights["TableName"] = array("type"=>200,"varname"=>"TableName", "name" => "TableName");
	$dalTablemc_ugrights["GroupID"]["key"]=true;
	$dalTablemc_ugrights["TableName"]["key"]=true;

$dal_info["mc_at_192_168_1_111__mc_ugrights"] = &$dalTablemc_ugrights;
?>