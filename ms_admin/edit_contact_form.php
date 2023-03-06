<?php
 require "session_start.php";
include "class/Contact_form.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$contact_form = Contact_form::selectById($id);

?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/contact_form_validation.js"></script>

<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Contact form</div>
	</div>
	<div class="portlet-body form">
	<form action="update_contact_form.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="contact_form_id" type="hidden" value="<?php echo $contact_form->contact_form_id?>" />

    <div class="form-group ">
      <label class="control-label col-md-3">Submitted date time</label>
		<div class="col-md-4">
			<div class="input-group date form_meridian_datetime" data-date="<?php if($contact_form->submitted_date_time !== "0000-00-00") echo reverse_change_timeformat($contact_form->submitted_date_time)?>">
				<input  style="width: 214px;"  type="text" size="16" readonly class="form-control" name="submitted_date_time" id="submitted_date_time" value="<?php if($contact_form->submitted_date_time !== "0000-00-00") echo reverse_change_timeformat($contact_form->submitted_date_time)?>">
				<span class="input-group-btn hidden" >
				<button class="btn default date-reset hidden" type="button"><i class="fa fa-times"></i></button>
				</span>
				<span class="input-group-btn hidden">
				<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
				</span>
			</div>
			<!-- /input-group -->
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Ip</label>
		<div class="col-md-3">
			<input     name="ip" type="text"  class="form-control" id="ip" value="<?php echo stripslashes($contact_form->ip)?>" placeholder="Enter Ip">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Name</label>
		<div class="col-md-3">
			<input     name="name" type="text"  class="form-control" id="name" value="<?php echo stripslashes($contact_form->name)?>" placeholder="Enter Name">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Email address</label>
		<div class="col-md-3">
			<input     name="email_address" type="text"  class="form-control" id="email_address" value="<?php echo stripslashes($contact_form->email_address)?>" placeholder="Enter Email address">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Phone</label>
		<div class="col-md-3">
			<input     name="phone" type="text"  class="form-control" id="phone" value="<?php echo stripslashes($contact_form->phone)?>" placeholder="Enter Phone">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Subject</label>
		<div class="col-md-3">
			<input     name="subject" type="text"  class="form-control" id="subject" value="<?php echo stripslashes($contact_form->subject)?>" placeholder="Enter Subject">
		</div>
	</div>
    <div class="form-group">
		<label class="col-md-3 control-label">Message</label>
		<div class="col-md-3">
			<textarea  class="form-control" style="width: 100%;height: 200px;"><?=$contact_form->message?></textarea>
		</div>
	</div>
	<!-- <div class="form-group hidden">
      <label class="col-md-3 control-label">Message</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "message");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($contact_form->message);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div> -->

<br/>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn green hidden"><i class="fa fa-check"></i> Submit</button>
					<button type="button" class="btn default"  onclick="javascript:if(confirm('Are you sure you want to leave this page?')) history.back()">Cancel</button>
				</div>
			</div>
		</div>
		<br/>
	</div> <!-- end div form body-->
</form>
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script>
$("input,textarea").prop('disabled',true);
</script>
<?php  }include "template.php";?>
