<?php 
include "class/Gallery_item.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Gallery_item::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Gallery_item::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_gallery_item.php?act=".$act);
exit;
?>