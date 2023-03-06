<?php require "session_start.php";

include "config.php";include "class/Programs_category.php";

include "connect.php";
include "change_format.php";
include "resize.php";

extract($_POST);
$active=radio_button($active);
$icon=upload_image("icon","$imagesPath");
if(is_file($imagesPath.$icon)){
$simpleImage->load($imagesPath.$icon);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$icon);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$icon);
}else{
$icon="";
}



$return = Programs_category::save( addslashes($programs_category_id),  addslashes($cat_name_ar),  addslashes($cat_name_en),  addslashes($cat_name_fr),  addslashes($icon),  addslashes($orders),addslashes($description_ar),addslashes($description_en),addslashes($description_fr),addslashes($active));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_programs_category.php?act=".$act);
exit;
?>
