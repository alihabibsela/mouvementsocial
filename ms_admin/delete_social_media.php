<?php 
include "class/Social_media.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Social_media::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Social_media::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_social_media.php?act=".$act);
exit;
?>