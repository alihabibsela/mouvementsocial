<?php 
class Publication_category{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from publication_category a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from publication_category where publication_category_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $name_ar,  $name_en,  $name_fr,  $icon,  $display_order,  $desc_ar,  $desc_en,  $desc_fr,  $active){
if($id == ""){
$query = "insert into publication_category set `name_ar` = '$name_ar' , `name_en` = '$name_en' , `name_fr` = '$name_fr' , `icon` = '$icon' , `display_order` = '$display_order' , `desc_ar` = '$desc_ar' , `desc_en` = '$desc_en' , `desc_fr` = '$desc_fr' , `active` = '$active'  "; 
}else{
$query = "update publication_category set `name_ar` = '$name_ar' , `name_en` = '$name_en' , `name_fr` = '$name_fr' , `icon` = '$icon' , `display_order` = '$display_order' , `desc_ar` = '$desc_ar' , `desc_en` = '$desc_en' , `desc_fr` = '$desc_fr' , `active` = '$active'  where publication_category_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from publication_category where publication_category_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update publication_category set $condition where publication_category_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from publication_category a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>