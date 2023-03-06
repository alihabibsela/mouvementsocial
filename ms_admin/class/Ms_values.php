<?php 
class Ms_values{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from ms_values a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from ms_values where ms_values_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $value_ar,  $value_en,  $value_fr, $title_ar, $title_en, $title_fr,  $orders){
if($id == ""){
$query = "insert into ms_values set `value_ar` = '$value_ar' , `value_en` = '$value_en' , `value_fr` = '$value_fr' , `orders` = '$orders', `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' "; 
}else{
$query = "update ms_values set `value_ar` = '$value_ar' , `value_en` = '$value_en' , `value_fr` = '$value_fr' , `orders` = '$orders', `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr'  where ms_values_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from ms_values where ms_values_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update ms_values set $condition where ms_values_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from ms_values a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>