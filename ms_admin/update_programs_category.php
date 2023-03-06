<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Programs_category.php";
include "change_format.php";

include "resize.php";

extract($_POST);

$active=radio_button($active);
$icon=upload_image("icon",$imagesPath);

if(is_file($imagesPath.$icon)){
$programs_category=Programs_category::selectById($programs_category_id);


if(is_file($imagesPath.$programs_category->icon))
{
unlink($imagesPath.$programs_category->icon);
}

$simpleImage->load($imagesPath.$icon);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$icon);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$icon);

$return=Programs_category::updateCondition($programs_category_id, "icon='$icon'");if($return) $num++;
}


//addslashes($description_ar),addslashes($description_en),addslashes($description_fr)
$query = "cat_name_ar='".addslashes(stripslashes($cat_name_ar))."' ,cat_name_en='".addslashes(stripslashes($cat_name_en)).
"' ,cat_name_fr='".addslashes(stripslashes($cat_name_fr))."' ,orders='".addslashes(stripslashes($orders)).
"',description_ar='".addslashes(stripslashes($description_ar))."',description_en='".addslashes(stripslashes($description_en))."',description_fr='".addslashes(stripslashes($description_fr))."',active='".addslashes(stripslashes($active))."' ";

$return=Programs_category::updateCondition($programs_category_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_programs_category.php?act=".$act);
exit();
?>
