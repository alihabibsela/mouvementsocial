<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Calls.php";
include "change_format.php";


extract($_POST);



$dates=change_timeformat($dates);

$is_active=radio_button($is_active);


$query = "title_ar='".addslashes(stripslashes($title_ar))."' ,title_en='".addslashes(stripslashes($title_en))."' ,title_fr='".addslashes(stripslashes($title_fr))."' ,description_ar='".addslashes(stripslashes($description_ar))."' ,description_en='".addslashes(stripslashes($description_en))."' ,description_fr='".addslashes(stripslashes($description_fr))."' ,dates='".addslashes(stripslashes($dates))."' ,orders='".addslashes(stripslashes($orders))."' ,is_active='".addslashes(stripslashes($is_active))."' ";

$return=Calls::updateCondition($calls_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_calls.php?act=".$act);
exit();
?>