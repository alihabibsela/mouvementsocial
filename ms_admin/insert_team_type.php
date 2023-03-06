<?php require "session_start.php";

include "config.php";include "class/Team_type.php";

include "connect.php";
include "change_format.php";

extract($_POST);


$return = Team_type::save( addslashes($team_type_id),  addslashes($team_type_ar),  addslashes($team_type_en),  addslashes($team_type_fr));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_team_type.php?act=".$act);
exit;
?>