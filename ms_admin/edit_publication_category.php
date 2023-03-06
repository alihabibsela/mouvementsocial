<?php 
 require "session_start.php";
include "class/Publication_category.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$publication_category = Publication_category::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/publication_category_validation.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/pop_up.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/delete_file_confirmation.js"></script>

<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Publication category</div>
	</div>
	<div class="portlet-body form">
	<form action="update_publication_category.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="publication_category_id" type="hidden" value="<?php echo $publication_category->publication_category_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Name ar</label>
		<div class="col-md-3">
			<input     name="name_ar" type="text"  class="form-control" id="name_ar" value="<?php echo stripslashes($publication_category->name_ar)?>" placeholder="Enter Name ar">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Name en</label>
		<div class="col-md-3">
			<input     name="name_en" type="text"  class="form-control" id="name_en" value="<?php echo stripslashes($publication_category->name_en)?>" placeholder="Enter Name en">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Name fr</label>
		<div class="col-md-3">
			<input     name="name_fr" type="text"  class="form-control" id="name_fr" value="<?php echo stripslashes($publication_category->name_fr)?>" placeholder="Enter Name fr">
		</div>
	</div>	
				
	<div class="form-group">
		<label class="col-md-3 control-label">Icon</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<?php
					if(is_file($imagesPath.$publication_category->icon)){?>
					 	<img src="<?php echo $imagesPath.$publication_category->icon?>" alt="<?php echo $publication_category->icon ?>" />
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
		<label class="col-md-3 control-label">Display order</label>
		<div class="col-md-3">
			<input     name="display_order" type="text"  class="form-control" id="display_order" value="<?php echo stripslashes($publication_category->display_order)?>" placeholder="Enter Display order">
		</div>
	</div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Desc ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "desc_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($publication_category->desc_ar);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Desc en</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "desc_en");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($publication_category->desc_en);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Desc fr</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "desc_fr");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($publication_category->desc_fr);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Active</label>
		<div class="col-md-9">
			<div class="make-switch" data-on="warning" data-off="danger">
				<input  type="checkbox" class="toggle"  name="active" <?php if($publication_category->active=="1") echo "checked"; ?>/>
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