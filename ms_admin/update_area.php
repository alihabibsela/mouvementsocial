<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Area.php";
include "change_format.php";

include "resize.php";

extract($_POST);




$query = "name_en='".addslashes(stripslashes($name_en))."' ,name_ar='".addslashes(stripslashes($name_ar))."' ,name_fr='".addslashes(stripslashes($name_fr))."' ";

$return=Area::updateCondition($area_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_area.php?act=".$act);
exit();
?>
