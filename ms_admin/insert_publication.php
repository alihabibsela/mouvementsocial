<?php require "session_start.php";

include "config.php";include "class/Publication.php";

include "connect.php";
include "change_format.php";
include "file_uploader.php";
include "resize.php";

extract($_POST);
$file_ar=file_uploader("file_ar", $fileTypes, $filesPath);

$file_en=file_uploader("file_en", $fileTypes, $filesPath);

$file_fr=file_uploader("file_fr", $fileTypes, $filesPath);

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



$return = Publication::save( addslashes($publication_id),  addslashes($title_ar),  addslashes($title_en),  addslashes($title_fr),  addslashes($details_ar),  addslashes($details_en),  addslashes($details_fr),  addslashes($file_ar),  addslashes($file_en),  addslashes($file_fr),  addslashes($image),  addslashes($publication_category_id));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_publication.php?act=".$act);
exit;
?>