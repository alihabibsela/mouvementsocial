<?php
 require "session_start.php";
include "class/Area.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$area = Area::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/area_validation.js"></script>

<script language="JavaScript" type="text/javascript" src="javascript/pop_up.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/delete_file_confirmation.js"></script>
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Area</div>
	</div>
	<div class="portlet-body form">
	<form action="update_area.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="area_id" type="hidden" value="<?php echo $area->area_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Name en</label>
		<div class="col-md-3">
			<input     name="name_en" type="text"  class="form-control" id="name_en" value="<?php echo stripslashes($area->name_en)?>" placeholder="Enter Name en">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Name ar</label>
		<div class="col-md-3">
			<input     name="name_ar" type="text"  class="form-control" id="name_ar" value="<?php echo stripslashes($area->name_ar)?>" placeholder="Enter Name ar">
		</div>
	</div>
    <div class="form-group">
		<label class="col-md-3 control-label">Name fr</label>
		<div class="col-md-3">
			<input     name="name_fr" type="text"  class="form-control" id="name_fr" value="<?php echo stripslashes($area->name_fr)?>" placeholder="Enter Name fr">
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
