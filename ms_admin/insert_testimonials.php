<?php require "session_start.php";

include "config.php";include "class/Testimonials.php";

include "connect.php";
include "change_format.php";
include "resize.php";

extract($_POST);

$show_home=radio_button($show_home);
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



$return = Testimonials::save( addslashes($testimonials_id),  addslashes($title_ar),  addslashes($title_en),  addslashes($title_fr),  addslashes($description_ar),  addslashes($description_en),  addslashes($description_fr),  addslashes($image),  addslashes($video_url),  addslashes($orders),  addslashes($show_home));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_testimonials.php?act=".$act);
exit;
?>