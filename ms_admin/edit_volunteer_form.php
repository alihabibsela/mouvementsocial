<?php
 require "session_start.php";
include "class/Volunteer_form.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$volunteer_form = Volunteer_form::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/volunteer_form_validation.js"></script>


<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Volunteer form</div>
	</div>
	<div class="portlet-body form">
	<form action="update_volunteer_form.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="volunteer_form_id" type="hidden" value="<?php echo $volunteer_form->volunteer_form_id?>" />

    <div class="form-group">
      <label class="control-label col-md-3">Submitted date time</label>
		<div class="col-md-4">
			<div class="input-group date form_meridian_datetime" data-date="<?php if($volunteer_form->submitted_date_time !== "0000-00-00") echo reverse_change_timeformat($volunteer_form->submitted_date_time)?>">
				<input   style="width: 214px;" type="text" size="16" readonly class="form-control" name="submitted_date_time" id="submitted_date_time" value="<?php if($volunteer_form->submitted_date_time !== "0000-00-00") echo reverse_change_timeformat($volunteer_form->submitted_date_time)?>">
				<span class="input-group-btn hidden">
				<button class="btn default date-reset" type="button"><i class="fa fa-times"></i></button>
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
			<input     name="ip" type="text"  class="form-control" id="ip" value="<?php echo stripslashes($volunteer_form->ip)?>" placeholder="Enter Ip">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Name</label>
		<div class="col-md-3">
			<input     name="name" type="text"  class="form-control" id="name" value="<?php echo stripslashes($volunteer_form->name)?>" placeholder="Enter Name">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Email</label>
		<div class="col-md-3">
			<input     name="email" type="text"  class="form-control" id="email" value="<?php echo stripslashes($volunteer_form->email)?>" placeholder="Enter Email">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Phone</label>
		<div class="col-md-3">
			<input     name="phone" type="text"  class="form-control" id="phone" value="<?php echo stripslashes($volunteer_form->phone)?>" placeholder="Enter Phone">
		</div>
	</div>

	<div class="form-group">
      <label class="control-label col-md-3">DOB</label>
		<div class="col-md-3">
			<input    class="form-control form-control-inline input-medium date-picker"  size="16" type="text" value="<?php if($volunteer_form->DOB !== "0000-00-00") echo change_format2($volunteer_form->DOB)?>" name="dob" id="dob"/>
			<span class="help-block hidden">Select date</span>
		</div>
	</div>
    <div class="form-group">
		<label class="col-md-3 control-label">Address</label>
		<div class="col-md-3">
			<textarea  class="form-control" style="width: 100%;"><?=$volunteer_form->address?></textarea>
		</div>
	</div>
	<!-- <div class="form-group">
      <label class="col-md-3 control-label">Address</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "address");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($volunteer_form->address);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	 -->

	<div class="form-group">
		<label class="col-md-3 control-label">Occupation</label>
		<div class="col-md-3">
			<input     name="occupation" type="text"  class="form-control" id="occupation" value="<?php echo stripslashes($volunteer_form->occupation)?>" placeholder="Enter Occupation">
		</div>
	</div>
    <div class="form-group">
		<label class="col-md-3 control-label">Message</label>
		<div class="col-md-3">
			<textarea  class="form-control" style="width: 100%;height: 200px;"><?=$volunteer_form->message?></textarea>
		</div>
	</div>
	<!-- <div class="form-group">
      <label class="col-md-3 control-label">Message</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "message");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($volunteer_form->message);
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
