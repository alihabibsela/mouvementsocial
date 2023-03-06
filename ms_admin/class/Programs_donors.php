<?php
class Programs_donors{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " , b.name ";
$query.= " , c.title_en ";
$query.= " from programs_donors a    ";
$query.= " LEFT OUTER JOIN donor b ";
$query.= " ON a.donor_id = b.donor_id ";
$query.= " LEFT OUTER JOIN programs c ";
$query.= " ON a.program_id = c.programs_id";
$query.= "  where $condition ";

$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from programs_donors where programs_donors_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $donor_id,  $program_id){
if($id == ""){
$query = "insert into programs_donors set `donor_id` = '$donor_id' , `program_id` = '$program_id'  ";
}else{
$query = "update programs_donors set `donor_id` = '$donor_id' , `program_id` = '$program_id'  where programs_donors_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}public static function delete($id){
$query = "delete from programs_donors where programs_donors_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update programs_donors set $condition where programs_donors_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from programs_donors a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
