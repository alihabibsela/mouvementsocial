<?php 
include "class/Publication_category.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Publication_category::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Publication_category::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_publication_category.php?act=".$act);
exit;
?>