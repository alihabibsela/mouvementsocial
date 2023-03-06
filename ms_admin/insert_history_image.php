<?php require "session_start.php";

include "config.php";include "class/History_image.php";

include "connect.php";
include "change_format.php";
include "resize.php";

extract($_POST);
$image=upload_image("image","$imagesPath");
if(is_file($imagesPath.$image)){
$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);
}else{
$image="";
}



$return = History_image::save( addslashes($history_image_id),  addslashes($title),  addslashes($image),  addslashes($orders));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_history_image.php?act=".$act);
exit;
?>