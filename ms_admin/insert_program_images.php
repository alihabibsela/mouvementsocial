<?php require "session_start.php";

include "config.php";include "class/Program_images.php";

include "connect.php";
include "change_format.php";
include "resize.php";

extract($_POST);

$is_main=radio_button($is_main);
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



$return = Program_images::save( addslashes($program_images_id),  addslashes($image),  addslashes($is_main),  addslashes($video_url),  addslashes($orders),addslashes($programs_id));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_program_images.php?act=".$act);
exit;
?>
