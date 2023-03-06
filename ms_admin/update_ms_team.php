<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Ms_team.php";
include "change_format.php";

include "resize.php";

extract($_POST);


$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$ms_team=Ms_team::selectById($ms_team_id);


if(is_file($imagesPath.$ms_team->image))
{
unlink($imagesPath.$ms_team->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=Ms_team::updateCondition($ms_team_id, "image='$image'");if($return) $num++;
}



$query = "name_ar='".addslashes(stripslashes($name_ar))."' ,name_en='".addslashes(stripslashes($name_en))."' ,name_fr='".addslashes(stripslashes($name_fr))."' ,position_ar='".addslashes(stripslashes($position_ar))."' ,position_en='".addslashes(stripslashes($position_en))."' ,position_fr='".addslashes(stripslashes($position_fr))."' ,orders='".addslashes(stripslashes($orders))."' ,bio_ar='".addslashes(stripslashes($bio_ar))."' ,bio_en='".addslashes(stripslashes($bio_en))."' ,bio_fr='".addslashes(stripslashes($bio_fr))."' ,team_type_id='".addslashes(stripslashes($team_type_id))."' ";

$return=Ms_team::updateCondition($ms_team_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_ms_team.php?act=".$act);
exit();
?>
