<?php 
 require "session_start.php";
include "class/Social_media.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$social_media = Social_media::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/social_media_validation.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/pop_up.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/delete_file_confirmation.js"></script>
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Social media</div>
	</div>
	<div class="portlet-body form">
	<form action="update_social_media.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="social_media_id" type="hidden" value="<?php echo $social_media->social_media_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Social media</label>
		<div class="col-md-3">
			<input     name="social_media" type="text"  class="form-control" id="social_media" value="<?php echo stripslashes($social_media->social_media)?>" placeholder="Enter Social media">
		</div>
	</div>	
				
	<div class="form-group">
		<label class="col-md-3 control-label">Icon</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<?php
					if(is_file($imagesPath.$social_media->icon)){?>
					 	<img src="<?php echo $imagesPath.$social_media->icon?>" alt="<?php echo $social_media->icon ?>" />
					<?php } ?> 
				</div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
				<div>
					<span class="btn default btn-file">
					<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
					<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					<input type="file" class="default" name="icon"   id="icon"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Url</label>
		<div class="col-md-3">
			<input     name="url" type="text"  class="form-control" id="url" value="<?php echo stripslashes($social_media->url)?>" placeholder="Enter Url">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Orders</label>
		<div class="col-md-3">
			<input     name="orders" type="text"  class="form-control" id="orders" value="<?php echo stripslashes($social_media->orders)?>" placeholder="Enter Orders">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Is volunteer</label>
		<div class="col-md-9">
			<div class="make-switch" data-on="warning" data-off="danger">
				<input  type="checkbox" class="toggle"  name="is_volunteer" <?php if($social_media->is_volunteer=="1") echo "checked"; ?>/>
			</div>
		</div>
	</div>	
	
<br/>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
					<button type="button" class="btn default"  onclick="javascript:if(confirm('Are you sure you want to leave this page?')) history.back()">Cancel</button>                              
				</div>
			</div>
		</div>
		<br/>
	</div> <!-- end div form body-->
</form>
<?php  }include "template.php";?>