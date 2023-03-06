<?php require "session_start.php";

include "config.php";
include "class/Area.php";

include "connect.php";
include "change_format.php";
include "resize.php";

extract($_POST);



$return = Area::save( addslashes($area_id),  addslashes($name_en),  addslashes($name_ar),  addslashes($name_fr));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_area.php?act=".$act);
exit;
?>
