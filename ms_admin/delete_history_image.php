<?php 
include "class/History_image.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=History_image::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=History_image::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_history_image.php?act=".$act);
exit;
?>