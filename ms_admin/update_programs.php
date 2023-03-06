<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Programs.php";
include "change_format.php";
include "class/Programs_donors.php";

extract($_POST);

$date=change_format($date);
$show_home=radio_button($show_home);
//print_r($programsDonors);die();
$query1 = "delete from programs_donors where program_id=$programs_id";
mysqli_query ($_SESSION["db_conn"], $query1);
$affected_rows=mysqli_affected_rows($_SESSION["db_conn"]);

foreach ($programsDonors as $key => $value) {
    Programs_donors::save( 0,  addslashes($value),  addslashes($programs_id));
}
//print_r($affected_rows);die();
$query = "programs_category_id='".addslashes(stripslashes($programs_category_id))."' ,title_ar='".addslashes(stripslashes($title_ar))."' ,title_en='".addslashes(stripslashes($title_en))."' ,title_fr='".addslashes(stripslashes($title_fr))."' ,description_ar='".addslashes(stripslashes($description_ar))."' ,description_en='".addslashes(stripslashes($description_en))."' ,description_fr='".addslashes(stripslashes($description_fr))."' ,beneficiaries_ar='".addslashes(stripslashes($beneficiaries_ar))."' ,beneficiaries_en='".addslashes(stripslashes($beneficiaries_en))."' ,beneficiaries_fr='".addslashes(stripslashes($beneficiaries_fr))."' ,date='".addslashes(stripslashes($date))."' ,location='".addslashes(stripslashes($location))."' ,budget='".addslashes(stripslashes($budget))."',show_home='".addslashes(stripslashes($show_home))."' ";
$query .=",sub_title_ar='".addslashes(stripslashes($sub_title_ar))."' ,sub_title_en='".addslashes(stripslashes($sub_title_en))."' ,sub_title_fr='".addslashes(stripslashes($sub_title_fr))."' ,sub_details_ar='".addslashes(stripslashes($sub_details_ar))."' ,sub_details_en='".addslashes(stripslashes($sub_details_en))."' ,sub_details_fr='".addslashes(stripslashes($sub_details_fr))."'";
$return=Programs::updateCondition($programs_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_programs.php?act=".$act);
exit();
?>
