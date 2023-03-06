<?php require "session_start.php";

include "config.php";include "class/Gallery_item.php";

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



$return = Gallery_item::save( addslashes($gallery_item_id),  addslashes($gallery_id),  addslashes($image),  addslashes($video),  addslashes($orders));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_gallery_item.php?act=".$act."&gid=".$gallery_id);
exit;
?>
