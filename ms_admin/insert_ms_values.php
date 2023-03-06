<?php require "session_start.php";

include "config.php";include "class/Ms_values.php";

include "connect.php";
include "change_format.php";

extract($_POST);


$return = Ms_values::save( addslashes($ms_values_id),  addslashes($value_ar),  addslashes($value_en),  addslashes($value_fr), addslashes($title_ar),  addslashes($title_en),  addslashes($title_fr),  addslashes($orders));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_ms_values.php?act=".$act);
exit;
?>