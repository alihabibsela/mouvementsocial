<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Ms_values.php";
include "change_format.php";


extract($_POST);




$query = "value_ar='".addslashes(stripslashes($value_ar))."' ,value_en='".addslashes(stripslashes($value_en))."' ,value_fr='".addslashes(stripslashes($value_fr))."' ,orders='".addslashes(stripslashes($orders))."', title_ar='".addslashes(stripslashes($title_ar))."' ,title_en='".addslashes(stripslashes($title_en))."' ,title_fr='".addslashes(stripslashes($title_fr))."' ";

$return=Ms_values::updateCondition($ms_values_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_ms_values.php?act=".$act);
exit();
?>