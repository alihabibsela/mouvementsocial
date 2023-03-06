<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Job_vacancy.php";
include "change_format.php";


extract($_POST);


$dates=change_format($dates);

$is_active=radio_button($is_active);


$query = "title_ar='".addslashes(stripslashes($title_ar))."' ,title_en='".addslashes(stripslashes($title_en))."' ,title_fr='".addslashes(stripslashes($title_fr))."' ,description_ar='".addslashes(stripslashes($description_ar))."' ,description_en='".addslashes(stripslashes($description_en))."' ,description_fr='".addslashes(stripslashes($description_fr))."' ,requirements_ar='".addslashes(stripslashes($requirements_ar))."' ,requirements_en='".addslashes(stripslashes($requirements_en))."' ,requirements_fr='".addslashes(stripslashes($requirements_fr))."' ,dates='".addslashes(stripslashes($dates))."' ,orders='".addslashes(stripslashes($orders))."' ,is_active='".addslashes(stripslashes($is_active))."' ";

$return=Job_vacancy::updateCondition($job_vacancy_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_job_vacancy.php?act=".$act);
exit();
?>