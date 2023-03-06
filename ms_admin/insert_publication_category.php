<?php require "session_start.php";

include "config.php";include "class/Publication_category.php";

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



$return = Publication_category::save( addslashes($publication_category_id),  addslashes($name_ar),  addslashes($name_en),  addslashes($name_fr),  addslashes($icon),  addslashes($display_order),  addslashes($desc_ar),  addslashes($desc_en),  addslashes($desc_fr),  addslashes($active));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_publication_category.php?act=".$act);
exit;
?>