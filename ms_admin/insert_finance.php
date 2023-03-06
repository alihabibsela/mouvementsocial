<?php require "session_start.php";

include "config.php";include "class/Finance.php";

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



$return = Finance::save( addslashes($finance_id),  addslashes($image),  addslashes($title_ar),  addslashes($title_en),  addslashes($title_fr),  addslashes($orders));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_finance.php?act=".$act);
exit;
?>