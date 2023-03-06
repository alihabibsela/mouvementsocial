<?php require "session_start.php";

include "config.php";include "class/Page.php";

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



$return = Page::save( addslashes($page_id),  addslashes($name_ar),  addslashes($name_en),  addslashes($name_fr),  addslashes($details_ar),  addslashes($details_en),  addslashes($details_fr),  addslashes($image),  addslashes($video_url));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_page.php?act=".$act);
exit;
?>