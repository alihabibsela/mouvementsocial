<?php require "session_start.php";

include "config.php";include "class/State.php";

include "connect.php";
include "change_format.php";

extract($_POST);


$return = State::save( addslashes($state_id),  addslashes($name_ar),  addslashes($name_en),  addslashes($name_fr));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_state.php?act=".$act);
exit;
?>