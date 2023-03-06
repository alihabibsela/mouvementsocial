<?php
include "class/Area.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Area::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Area::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_area.php?act=".$act);
exit;
?>
