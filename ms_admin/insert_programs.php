<?php require "session_start.php";

include "config.php";
include "class/Programs.php";
include "connect.php";
include "change_format.php";
include "class/Programs_donors.php";
extract($_POST);

$date=change_format($date);

$show_home=radio_button($show_home);

$return = Programs::save( 0,  addslashes($programs_category_id),  addslashes($title_ar),  addslashes($title_en),  addslashes($title_fr),  addslashes($description_ar),  addslashes($description_en),  addslashes($description_fr),  addslashes($beneficiaries_ar),  addslashes($beneficiaries_en),  addslashes($beneficiaries_fr),  addslashes($date),  addslashes($location),  addslashes($budget),  addslashes($show_home)
,  addslashes($sub_title_ar),  addslashes($sub_title_en),  addslashes($sub_title_fr),  addslashes($sub_details_ar),  addslashes($sub_details_en),  addslashes($sub_details_fr));
	if($return == true){
        $query1 = "SELECT MAX(programs_id) AS programs_id FROM programs";
        $result1=mysqli_query ($_SESSION["db_conn"], $query1);
        $result1=mysqli_fetch_object($result1);
        //print_r($result1);die();
        foreach ($programsDonors as $key => $value) {
            Programs_donors::save( 0,  addslashes($value),  addslashes($result1->programs_id));
        }
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_programs.php?act=".$act);
exit;
?>
