<?php
class Programs_category{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from programs_category a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from programs_category where programs_category_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $cat_name_ar,  $cat_name_en,  $cat_name_fr,  $icon,  $orders,$description_ar,$description_en,$description_fr,$active){
if($id == ""){
$query = "insert into programs_category set `cat_name_ar` = '$cat_name_ar' , `cat_name_en` = '$cat_name_en' , `cat_name_fr` = '$cat_name_fr' , `icon` = '$icon' , `orders` = '$orders', `description_ar` = '$description_ar', `description_en` = '$description_en', `description_fr` = '$description_fr' , `active` = '$active'  ";
}else{
$query = "update programs_category set `cat_name_ar` = '$cat_name_ar' , `cat_name_en` = '$cat_name_en' , `cat_name_fr` = '$cat_name_fr' , `icon` = '$icon' , `orders` = '$orders', `description_ar` = '$description_ar', `description_en` = '$description_en', `description_fr` = '$description_fr', `active` = '$active'  where programs_category_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}public static function delete($id){
$query = "delete from programs_category where programs_category_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update programs_category set $condition where programs_category_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from programs_category a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
