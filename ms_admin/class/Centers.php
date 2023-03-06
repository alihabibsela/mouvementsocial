<?php
class Centers{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " , b.centers_type_en, c.name_en AS area_en, c.name_ar AS area_ar, c.name_fr AS area_fr ";
$query.= " from centers a    ";
$query.= " LEFT OUTER JOIN centers_type b ";
$query.= " ON a.type = b.centers_type_id ";
$query.= " LEFT OUTER JOIN area c ";
$query.= " ON a.area_id = c.area_id ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from centers where centers_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $name_ar,  $name_en,  $name_fr,  $address_ar,  $address_en,  $address_fr,  $phone,  $fax,  $email,  $orders,  $type,$area_id,$text_ar,$text_en,$text_fr){
if($id == ""){
$query = "insert into centers set `name_ar` = '$name_ar' , `name_en` = '$name_en' , `name_fr` = '$name_fr' , `address_ar` = '$address_ar' , `address_en` = '$address_en' , `address_fr` = '$address_fr' , `phone` = '$phone' , `fax` = '$fax' , `email` = '$email' , `orders` = '$orders' , `type` = '$type' , `area_id` = '$area_id', `text_ar` = '$text_ar', `text_en` = '$text_en', `text_fr` = '$text_fr'  ";
}else{
$query = "update centers set `name_ar` = '$name_ar' , `name_en` = '$name_en' , `name_fr` = '$name_fr' , `address_ar` = '$address_ar' , `address_en` = '$address_en' , `address_fr` = '$address_fr' , `phone` = '$phone' , `fax` = '$fax' , `email` = '$email' , `orders` = '$orders' , `type` = '$type', `area_id` = '$area_id', `text_ar` = '$text_ar', `text_en` = '$text_en', `text_fr` = '$text_fr'  where centers_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}public static function delete($id){
$query = "delete from centers where centers_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update centers set $condition where centers_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from centers a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
