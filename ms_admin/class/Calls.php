<?php 
class Calls{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from calls a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from calls where calls_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $title_ar,  $title_en,  $title_fr,  $description_ar,  $description_en,  $description_fr,  $dates,  $orders,  $is_active){
if($id == ""){
$query = "insert into calls set `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `description_ar` = '$description_ar' , `description_en` = '$description_en' , `description_fr` = '$description_fr' , `dates` = '$dates' , `orders` = '$orders' , `is_active` = '$is_active'  "; 
}else{
$query = "update calls set `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `description_ar` = '$description_ar' , `description_en` = '$description_en' , `description_fr` = '$description_fr' , `dates` = '$dates' , `orders` = '$orders' , `is_active` = '$is_active'  where calls_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from calls where calls_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update calls set $condition where calls_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from calls a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>