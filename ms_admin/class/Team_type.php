<?php 
class Team_type{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from team_type a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from team_type where team_type_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $team_type_ar,  $team_type_en,  $team_type_fr){
if($id == ""){
$query = "insert into team_type set `team_type_ar` = '$team_type_ar' , `team_type_en` = '$team_type_en' , `team_type_fr` = '$team_type_fr'  "; 
}else{
$query = "update team_type set `team_type_ar` = '$team_type_ar' , `team_type_en` = '$team_type_en' , `team_type_fr` = '$team_type_fr'  where team_type_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from team_type where team_type_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update team_type set $condition where team_type_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from team_type a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>