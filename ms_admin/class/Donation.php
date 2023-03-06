<?php 
class Donation{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " , b.currency_en ";
$query.= " , c.name_en ";
$query.= " from donation a    ";
$query.= " LEFT OUTER JOIN currency b ";
$query.= " ON a.currency_id = b.currency_id ";
$query.= " LEFT OUTER JOIN state c ";
$query.= " ON a.state_id = c.state_id ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from donation where donation_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $date_time,  $amount,  $currency_id,  $email_address,  $name,  $city,  $state_id,  $zipcode,  $payment_type,  $status){
if($id == ""){
$query = "insert into donation set `date_time` = '$date_time' , `amount` = '$amount' , `currency_id` = '$currency_id' , `email_address` = '$email_address' , `name` = '$name' , `city` = '$city' , `state_id` = '$state_id' , `zipcode` = '$zipcode' , `payment_type` = '$payment_type' , `status` = '$status'  "; 
}else{
$query = "update donation set `date_time` = '$date_time' , `amount` = '$amount' , `currency_id` = '$currency_id' , `email_address` = '$email_address' , `name` = '$name' , `city` = '$city' , `state_id` = '$state_id' , `zipcode` = '$zipcode' , `payment_type` = '$payment_type' , `status` = '$status'  where donation_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from donation where donation_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update donation set $condition where donation_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from donation a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>