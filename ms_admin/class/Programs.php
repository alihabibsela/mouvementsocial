<?php
class Programs{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " , b.cat_name_en ";
$query.= " from programs a    ";
$query.= " LEFT OUTER JOIN programs_category b ";
$query.= " ON a.programs_category_id = b.programs_category_id ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from programs where programs_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $programs_category_id,  $title_ar,  $title_en,  $title_fr,  $description_ar,  $description_en,  $description_fr,  $beneficiaries_ar,  $beneficiaries_en,  $beneficiaries_fr,  $date,  $location,  $budget,$show_home
                            , $sub_title_ar,$sub_title_en,$sub_title_fr,$sub_details_ar,$sub_details_en,$sub_details_fr){
if($id == ""){
$query = "insert into programs set `programs_category_id` = '$programs_category_id' , `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `description_ar` = '$description_ar' , `description_en` = '$description_en' , `description_fr` = '$description_fr' , `beneficiaries_ar` = '$beneficiaries_ar' , `beneficiaries_en` = '$beneficiaries_en' , `beneficiaries_fr` = '$beneficiaries_fr' , `date` = '$date' , `location` = '$location' , `budget` = '$budget', `show_home` = '$show_home'  ";
$query .=",sub_title_ar='".addslashes(stripslashes($sub_title_ar))."' ,sub_title_en='".addslashes(stripslashes($sub_title_en))."' ,sub_title_fr='".addslashes(stripslashes($sub_title_fr))."' ,sub_details_ar='".addslashes(stripslashes($sub_details_ar))."' ,sub_details_en='".addslashes(stripslashes($sub_details_en))."' ,sub_details_fr='".addslashes(stripslashes($sub_details_fr))."'";
}else{
$query = "update programs set `programs_category_id` = '$programs_category_id' , `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `description_ar` = '$description_ar' , `description_en` = '$description_en' , `description_fr` = '$description_fr' , `beneficiaries_ar` = '$beneficiaries_ar' , `beneficiaries_en` = '$beneficiaries_en' , `beneficiaries_fr` = '$beneficiaries_fr' , `date` = '$date' , `location` = '$location' , `budget` = '$budget', `show_home` = '$show_home'  where programs_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}public static function delete($id){
$query = "delete from programs where programs_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update programs set $condition where programs_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from programs a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
