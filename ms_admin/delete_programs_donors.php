<?php 
include "class/Programs_donors.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Programs_donors::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Programs_donors::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_programs_donors.php?act=".$act);
exit;
?>