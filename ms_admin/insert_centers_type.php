<?php require "session_start.php";

include "config.php";include "class/Centers_type.php";

include "connect.php";
include "change_format.php";

extract($_POST);


$return = Centers_type::save( addslashes($centers_type_id),  addslashes($centers_type_ar),  addslashes($centers_type_en),  addslashes($centers_type_fr));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_centers_type.php?act=".$act);
exit;
?>