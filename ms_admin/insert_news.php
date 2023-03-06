<?php require "session_start.php";

include "config.php";include "class/News.php";

include "connect.php";
include "change_format.php";

extract($_POST);

//$title_en=change_timeformat($title_en);

$dates=change_format($dates);


$return = News::save( addslashes($news_id),  addslashes($title_ar),  addslashes($title_en),  addslashes($title_fr),  addslashes($details_ar),  addslashes($details_en),  addslashes($details_fr),  addslashes($dates)
,  addslashes($sub_title_ar),  addslashes($sub_title_en),  addslashes($sub_title_fr),  addslashes($sub_details_ar),  addslashes($sub_details_en),  addslashes($sub_details_fr));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_news.php?act=".$act);
exit;
?>
