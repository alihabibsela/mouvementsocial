<?php 
include "class/Page.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Page::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Page::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_page.php?act=".$act);
exit;
?>