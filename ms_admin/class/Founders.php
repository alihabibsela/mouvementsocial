<?php 
class Founders{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from founders a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from founders where founders_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $name_ar,  $name_en,  $name_fr,  $image,  $position_ar,  $position_en,  $position_fr,  $orders,  $bio_ar,  $bio_en,  $bio_fr){
if($id == ""){
$query = "insert into founders set `name_ar` = '$name_ar' , `name_en` = '$name_en' , `name_fr` = '$name_fr' , `image` = '$image' , `position_ar` = '$position_ar' , `position_en` = '$position_en' , `position_fr` = '$position_fr' , `orders` = '$orders' , `bio_ar` = '$bio_ar' , `bio_en` = '$bio_en' , `bio_fr` = '$bio_fr'  "; 
}else{
$query = "update founders set `name_ar` = '$name_ar' , `name_en` = '$name_en' , `name_fr` = '$name_fr' , `image` = '$image' , `position_ar` = '$position_ar' , `position_en` = '$position_en' , `position_fr` = '$position_fr' , `orders` = '$orders' , `bio_ar` = '$bio_ar' , `bio_en` = '$bio_en' , `bio_fr` = '$bio_fr'  where founders_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from founders where founders_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update founders set $condition where founders_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from founders a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>