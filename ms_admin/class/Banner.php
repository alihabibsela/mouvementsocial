<?php 
class Banner{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " , b.name_en ";
$query.= " from banner a    ";
$query.= " LEFT OUTER JOIN page b ";
$query.= " ON a.page_id = b.page_id ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from banner where banner_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $page_id,  $image,  $title_ar,  $title_en,  $title_fr,  $btn_title_ar,  $btn_title_en,  $btn_title_fr,  $btn_URL,  $orders){
if($id == ""){
$query = "insert into banner set `page_id` = '$page_id' , `image` = '$image' , `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `btn_title_ar` = '$btn_title_ar' , `btn_title_en` = '$btn_title_en' , `btn_title_fr` = '$btn_title_fr' , `btn_URL` = '$btn_URL' , `orders` = '$orders'  "; 
}else{
$query = "update banner set `page_id` = '$page_id' , `image` = '$image' , `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `btn_title_ar` = '$btn_title_ar' , `btn_title_en` = '$btn_title_en' , `btn_title_fr` = '$btn_title_fr' , `btn_URL` = '$btn_URL' , `orders` = '$orders'  where banner_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from banner where banner_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update banner set $condition where banner_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from banner a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>