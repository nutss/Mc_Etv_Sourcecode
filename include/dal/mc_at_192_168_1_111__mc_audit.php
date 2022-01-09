<?php
$dalTablemc_audit = array();
$dalTablemc_audit["action"] = array("type"=>200,"varname"=>"action", "name" => "action");
$dalTablemc_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime");
$dalTablemc_audit["description"] = array("type"=>201,"varname"=>"description", "name" => "description");
$dalTablemc_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablemc_audit["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip");
$dalTablemc_audit["table"] = array("type"=>200,"varname"=>"table", "name" => "table");
$dalTablemc_audit["user"] = array("type"=>200,"varname"=>"user", "name" => "user");
	$dalTablemc_audit["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__mc_audit"] = &$dalTablemc_audit;
?>