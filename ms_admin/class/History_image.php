<?php 
class History_image{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from history_image a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from history_image where history_image_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $title,  $image,  $orders){
if($id == ""){
$query = "insert into history_image set `title` = '$title' , `image` = '$image' , `orders` = '$orders'  "; 
}else{
$query = "update history_image set `title` = '$title' , `image` = '$image' , `orders` = '$orders'  where history_image_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from history_image where history_image_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update history_image set $condition where history_image_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from history_image a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>