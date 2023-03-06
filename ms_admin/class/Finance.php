<?php 
class Finance{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from finance a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from finance where finance_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $image,  $title_ar,  $title_en,  $title_fr,  $orders){
if($id == ""){
$query = "insert into finance set `image` = '$image' , `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `orders` = '$orders'  "; 
}else{
$query = "update finance set `image` = '$image' , `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `orders` = '$orders'  where finance_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from finance where finance_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update finance set $condition where finance_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from finance a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>