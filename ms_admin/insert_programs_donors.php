<?php require "session_start.php";

include "config.php";include "class/Programs_donors.php";

include "connect.php";
include "change_format.php";

extract($_POST);

$return = Programs_donors::save( addslashes($programs_donors_id),  addslashes($donor_id),  addslashes($program_id));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_programs_donors.php?act=".$act);
exit;
?>
