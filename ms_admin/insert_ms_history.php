<?php require "session_start.php";

include "config.php";include "class/Ms_history.php";

include "connect.php";
include "change_format.php";

extract($_POST);


$return = Ms_history::save( addslashes($ms_history_id),  addslashes($year),  addslashes($details_ar),  addslashes($details_en),  addslashes($details_fr));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_ms_history.php?act=".$act);
exit;
?>