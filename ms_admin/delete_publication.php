<?php 
include "class/Publication.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Publication::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Publication::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_publication.php?act=".$act);
exit;
?>