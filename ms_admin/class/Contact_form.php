<?php 
class Contact_form{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from contact_form a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from contact_form where contact_form_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $submitted_date_time,  $ip,  $name,  $email_address,  $phone,  $subject,  $message){
if($id == ""){
$query = "insert into contact_form set `submitted_date_time` = '$submitted_date_time' , `ip` = '$ip' , `name` = '$name' , `email_address` = '$email_address' , `phone` = '$phone' , `subject` = '$subject' , `message` = '$message'  "; 
}else{
$query = "update contact_form set `submitted_date_time` = '$submitted_date_time' , `ip` = '$ip' , `name` = '$name' , `email_address` = '$email_address' , `phone` = '$phone' , `subject` = '$subject' , `message` = '$message'  where contact_form_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from contact_form where contact_form_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update contact_form set $condition where contact_form_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from contact_form a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>