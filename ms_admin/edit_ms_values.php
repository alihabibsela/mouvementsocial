<?php 
 require "session_start.php";
include "class/Ms_values.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$ms_values = Ms_values::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/ms_values_validation.js"></script>

<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Ms values</div>
	</div>
	<div class="portlet-body form">
	<form action="update_ms_values.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="ms_values_id" type="hidden" value="<?php echo $ms_values->ms_values_id?>" />

<div class="form-group">
		<label class="col-md-3 control-label">Title ar</label>
		<div class="col-md-3">
			<input     name="title_ar" type="text"  class="form-control" id="title_ar" value="<?php echo stripslashes($ms_values->title_ar)?>" placeholder="Enter Title ar">
		</div>
	</div>
    <div class="form-group">
		<label class="col-md-3 control-label">Title en</label>
		<div class="col-md-3">
			<input name="title_en" type="text" class="form-control" id="title_en" value="<?php echo stripslashes($ms_values->title_en)?>" placeholder="Enter Title en">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Title fr</label>
		<div class="col-md-3">
			<input     name="title_fr" type="text"  class="form-control" id="title_fr" value="<?php echo stripslashes($ms_values->title_fr)?>" placeholder="Enter Title fr">
		</div>
	</div>

	<div class="form-group">
      <label class="col-md-3 control-label">Value ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "value_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($ms_values->value_ar);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Value en</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "value_en");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($ms_values->value_en);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Value fr</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "value_fr");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($ms_values->value_fr);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Orders</label>
		<div class="col-md-3">
			<input     name="orders" type="text"  class="form-control" id="orders" value="<?php echo stripslashes($ms_values->orders)?>" placeholder="Enter Orders">
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