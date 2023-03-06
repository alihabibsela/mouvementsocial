<?php 
include "class/News_images.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=News_images::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=News_images::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_news_images.php?act=".$act);
exit;
?>