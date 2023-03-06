<?php require "session_start.php";

include "config.php";include "class/Founders.php";

include "connect.php";
include "change_format.php";
include "resize.php";

extract($_POST);

//$name_ar=change_timeformat($name_ar);
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



$return = Founders::save( addslashes($founders_id),  addslashes($name_ar),  addslashes($name_en),  addslashes($name_fr),  addslashes($image),  addslashes($position_ar),  addslashes($position_en),  addslashes($position_fr),  addslashes($orders),  addslashes($bio_ar),  addslashes($bio_en),  addslashes($bio_fr));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_founders.php?act=".$act);
exit;
?>
