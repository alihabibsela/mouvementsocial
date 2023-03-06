<?php
 require "session_start.php";
include "class/Finance.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$finance = Finance::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/finance_validation.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/pop_up.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/delete_file_confirmation.js"></script>
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Finance</div>
	</div>
	<div class="portlet-body form">
	<form action="update_finance.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="finance_id" type="hidden" value="<?php echo $finance->finance_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Image (470 x 338)</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<?php
					if(is_file($imagesPath.$finance->image)){?>
					 	<img src="<?php echo $imagesPath.$finance->image?>" alt="<?php echo $finance->image ?>" />
					<?php } ?>
				</div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
				<div>
					<span class="btn default btn-file">
					<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
					<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					<input type="file" class="default" name="image"   id="image"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Title ar</label>
		<div class="col-md-3">
			<input     name="title_ar" type="text"  class="form-control" id="title_ar" value="<?php echo stripslashes($finance->title_ar)?>" placeholder="Enter Title ar">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Title en</label>
		<div class="col-md-3">
			<input     name="title_en" type="text"  class="form-control" id="title_en" value="<?php echo stripslashes($finance->title_en)?>" placeholder="Enter Title en">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Title fr</label>
		<div class="col-md-3">
			<input     name="title_fr" type="text"  class="form-control" id="title_fr" value="<?php echo stripslashes($finance->title_fr)?>" placeholder="Enter Title fr">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Orders</label>
		<div class="col-md-3">
			<input     name="orders" type="text"  class="form-control" id="orders" value="<?php echo stripslashes($finance->orders)?>" placeholder="Enter Orders">
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
