<?php require "session_start.php";

include "config.php";include "class/Calls.php";

include "connect.php";
include "change_format.php";

extract($_POST);

$dates=change_timeformat($dates);

$is_active=radio_button($is_active);


$return = Calls::save( addslashes($calls_id),  addslashes($title_ar),  addslashes($title_en),  addslashes($title_fr),  addslashes($description_ar),  addslashes($description_en),  addslashes($description_fr),  addslashes($dates),  addslashes($orders),  addslashes($is_active));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_calls.php?act=".$act);
exit;
?>