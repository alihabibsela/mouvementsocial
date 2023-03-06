<?php 
class Centers_type{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from centers_type a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from centers_type where centers_type_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $centers_type_ar,  $centers_type_en,  $centers_type_fr){
if($id == ""){
$query = "insert into centers_type set `centers_type_ar` = '$centers_type_ar' , `centers_type_en` = '$centers_type_en' , `centers_type_fr` = '$centers_type_fr'  "; 
}else{
$query = "update centers_type set `centers_type_ar` = '$centers_type_ar' , `centers_type_en` = '$centers_type_en' , `centers_type_fr` = '$centers_type_fr'  where centers_type_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from centers_type where centers_type_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update centers_type set $condition where centers_type_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from centers_type a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>