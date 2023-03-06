<?php 
include "class/Team_type.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Team_type::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Team_type::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_team_type.php?act=".$act);
exit;
?>