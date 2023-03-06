<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Centers_type.php";
include "change_format.php";


extract($_POST);




$query = "centers_type_ar='".addslashes(stripslashes($centers_type_ar))."' ,centers_type_en='".addslashes(stripslashes($centers_type_en))."' ,centers_type_fr='".addslashes(stripslashes($centers_type_fr))."' ";

$return=Centers_type::updateCondition($centers_type_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_centers_type.php?act=".$act);
exit();
?>