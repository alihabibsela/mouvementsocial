<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/News.php";
include "change_format.php";


extract($_POST);



//$title_en=change_timeformat($title_en);
$dates=change_format($dates);


$query = "title_ar='".addslashes(stripslashes($title_ar))."' ,title_en='".addslashes(stripslashes($title_en))."' ,title_fr='".addslashes(stripslashes($title_fr))."' ,details_ar='".addslashes(stripslashes($details_ar))."' ,details_en='".addslashes(stripslashes($details_en))."' ,details_fr='".addslashes(stripslashes($details_fr))."' ,dates='".addslashes(stripslashes($dates))."' ";
$query .=",sub_title_ar='".addslashes(stripslashes($sub_title_ar))."' ,sub_title_en='".addslashes(stripslashes($sub_title_en))."' ,sub_title_fr='".addslashes(stripslashes($sub_title_fr))."' ,sub_details_ar='".addslashes(stripslashes($sub_details_ar))."' ,sub_details_en='".addslashes(stripslashes($sub_details_en))."' ,sub_details_fr='".addslashes(stripslashes($sub_details_fr))."'";

$return=News::updateCondition($news_id, $query);

if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_news.php?act=".$act);
exit();
?>
