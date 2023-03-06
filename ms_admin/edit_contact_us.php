<?php
 require "session_start.php";
include "class/Contact_us.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$contact_us = Contact_us::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/contact_us_validation.js"></script>

<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Contact us</div>
	</div>
	<div class="portlet-body form">
	<form action="update_contact_us.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="contact_us_id" type="hidden" value="<?php echo $contact_us->contact_us_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Email</label>
		<div class="col-md-3">
			<input     name="email" type="text"  class="form-control" id="email" value="<?php echo stripslashes($contact_us->email)?>" placeholder="Enter Email">
		</div>
	</div>

	<div class="form-group">
      <label class="col-md-3 control-label">Address ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "address_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($contact_us->address_ar);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>

	<div class="form-group">
      <label class="col-md-3 control-label">Address en</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "address_en");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($contact_us->address_en);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>

	<div class="form-group">
      <label class="col-md-3 control-label">Address fr</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "address_fr");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($contact_us->address_fr);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>

	<div class="form-group">
		<label class="col-md-3 control-label">Phone</label>
		<div class="col-md-3">
			<input     name="phone" type="text"  class="form-control" id="phone" value="<?php echo stripslashes($contact_us->phone)?>" placeholder="Enter Phone">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Fax</label>
		<div class="col-md-3">
			<input     name="fax" type="text"  class="form-control" id="fax" value="<?php echo stripslashes($contact_us->fax)?>" placeholder="Enter Fax">
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
