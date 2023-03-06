<?php
 require "session_start.php";
include "class/Programs_category.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$programs_category = Programs_category::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/programs_category_validation.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/pop_up.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/delete_file_confirmation.js"></script>
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Programs category</div>
	</div>
	<div class="portlet-body form">
	<form action="update_programs_category.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="programs_category_id" type="hidden" value="<?php echo $programs_category->programs_category_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Cat name ar</label>
		<div class="col-md-3">
			<input     name="cat_name_ar" type="text"  class="form-control" id="cat_name_ar" value="<?php echo stripslashes($programs_category->cat_name_ar)?>" placeholder="Enter Cat name ar">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Cat name en</label>
		<div class="col-md-3">
			<input     name="cat_name_en" type="text"  class="form-control" id="cat_name_en" value="<?php echo stripslashes($programs_category->cat_name_en)?>" placeholder="Enter Cat name en">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Cat name fr</label>
		<div class="col-md-3">
			<input     name="cat_name_fr" type="text"  class="form-control" id="cat_name_fr" value="<?php echo stripslashes($programs_category->cat_name_fr)?>" placeholder="Enter Cat name fr">
		</div>
	</div>
    <div class="form-group">
      <label class="col-md-3 control-label">Description ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "description_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($programs_category->description_ar);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>

	<div class="form-group">
      <label class="col-md-3 control-label">Description en</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "description_en");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($programs_category->description_en);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>

	<div class="form-group">
      <label class="col-md-3 control-label">Description fr</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "description_fr");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($programs_category->description_fr);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>
	<div class="form-group">
		<label class="col-md-3 control-label">Icon (95 x 95)</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<?php
					if(is_file($imagesPath.$programs_category->icon)){?>
					 	<img src="<?php echo $imagesPath.$programs_category->icon?>" alt="<?php echo $programs_category->icon ?>" />
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
		<label class="col-md-3 control-label">Orders</label>
		<div class="col-md-3">
			<input     name="orders" type="text"  class="form-control" id="orders" value="<?php echo stripslashes($programs_category->orders)?>" placeholder="Enter Orders">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Active</label>
		<div class="col-md-9">
			<div class="make-switch" data-on="warning" data-off="danger">
				<input  type="checkbox" class="toggle"  name="active" <?php if($programs_category->active=="1") echo "checked"; ?>/>
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
