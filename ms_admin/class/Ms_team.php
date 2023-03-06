<?php
class Ms_team{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " , b.team_type_en ";
$query.= " from ms_team a    ";
$query.= " LEFT OUTER JOIN team_type b ";
$query.= " ON a.team_type_id = b.team_type_id ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from ms_team where ms_team_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $name_ar,  $name_en,  $name_fr,  $image,  $position_ar,  $position_en,  $position_fr,  $orders,  $bio_ar,  $bio_en,  $bio_fr,  $team_type_id){
if($id == ""){
$query = "insert into ms_team set `name_ar` = '$name_ar' , `name_en` = '$name_en' , `name_fr` = '$name_fr' , `image` = '$image' , `position_ar` = '$position_ar' , `position_en` = '$position_en' , `position_fr` = '$position_fr' , `orders` = '$orders' , `bio_ar` = '$bio_ar' , `bio_en` = '$bio_en' , `bio_fr` = '$bio_fr' , `team_type_id` = '$team_type_id'  ";
}else{
$query = "update ms_team set `name_ar` = '$name_ar' , `name_en` = '$name_en' , `name_fr` = '$name_fr' , `image` = '$image' , `position_ar` = '$position_ar' , `position_en` = '$position_en' , `position_fr` = '$position_fr' , `orders` = '$orders' , `bio_ar` = '$bio_ar' , `bio_en` = '$bio_en' , `bio_fr` = '$bio_fr' , `team_type_id` = '$team_type_id'  where ms_team_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}public static function delete($id){
$query = "delete from ms_team where ms_team_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update ms_team set $condition where ms_team_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from ms_team a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
