<?php
class Contact_us{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from contact_us a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from contact_us where contact_us_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $email,  $address_ar,  $address_en,  $address_fr,  $phone,  $fax){
if($id == ""){
$query = "insert into contact_us set `email` = '$email' , `address_ar` = '$address_ar' , `address_en` = '$address_en' , `address_fr` = '$address_fr' , `phone` = '$phone' , `fax` = '$fax'  ";
}else{
$query = "update contact_us set `email` = '$email' , `address_ar` = '$address_ar' , `address_en` = '$address_en' , `address_fr` = '$address_fr' , `phone` = '$phone' , `fax` = '$fax'  where contact_us_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}public static function delete($id){
$query = "delete from contact_us where contact_us_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update contact_us set $condition where contact_us_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from contact_us a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
