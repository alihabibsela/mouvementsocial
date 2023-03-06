<?php
class Publication{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from publication a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from publication where publication_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $title_ar,  $title_en,  $title_fr,  $details_ar,  $details_en,  $details_fr,  $file_ar,  $file_en,  $file_fr,  $image){
if($id == ""){
$query = "insert into publication set `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `details_ar` = '$details_ar' , `details_en` = '$details_en' , `details_fr` = '$details_fr' , `file_ar` = '$file_ar' , `file_en` = '$file_en' , `file_fr` = '$file_fr', `image` = '$image'  ";
}else{
$query = "update publication set `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `details_ar` = '$details_ar' , `details_en` = '$details_en' , `details_fr` = '$details_fr' , `file_ar` = '$file_ar' , `file_en` = '$file_en' , `file_fr` = '$file_fr', `image` = '$image'  where publication_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}public static function delete($id){
$query = "delete from publication where publication_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update publication set $condition where publication_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from publication a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
