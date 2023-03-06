<?php require "session_start.php";

include "config.php";include "class/Banner.php";

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



$return = Banner::save( addslashes($banner_id),  addslashes($page_id),  addslashes($image),  addslashes($title_ar),  addslashes($title_en),  addslashes($title_fr),  addslashes($btn_title_ar),  addslashes($btn_title_en),  addslashes($btn_title_fr),  addslashes($btn_URL),  addslashes($orders));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_banner.php?act=".$act);
exit;
?>