<?php require "session_start.php";

include "config.php";include "class/Social_media.php";

include "connect.php";
include "change_format.php";
include "resize.php";

extract($_POST);

$is_volunteer=radio_button($is_volunteer);
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



$return = Social_media::save( addslashes($social_media_id),  addslashes($social_media),  addslashes($icon),  addslashes($url),  addslashes($orders),  addslashes($is_volunteer));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_social_media.php?act=".$act);
exit;
?>