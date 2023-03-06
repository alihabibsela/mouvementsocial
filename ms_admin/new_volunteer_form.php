<?php function main(){?>





		
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create Volunteer form</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_volunteer_form.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
				

    <div class="form-group">
      <label class="control-label col-md-3">Submitted date time</label>
		<div class="col-md-4">
			<div class="input-group date form_meridian_datetime" data-date="">                                       
				<input   type="text" size="16" readonly class="form-control" name="submitted_date_time" id="submitted_date_time">
				<span class="input-group-btn">
				<button class="btn default date-reset" type="button"><i class="fa fa-times"></i></button>
				</span>
				<span class="input-group-btn">
				<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
				</span>
			</div>
			<!-- /input-group -->
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Ip</label>
		<div class="col-md-3">
			<input   name="ip"  type="text"  class="form-control" id="ip" value="" placeholder="Enter Ip">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Name</label>
		<div class="col-md-3">
			<input   name="name"  type="text"  class="form-control" id="name" value="" placeholder="Enter Name">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Email</label>
		<div class="col-md-3">
			<input   name="email"  type="text"  class="form-control" id="email" value="" placeholder="Enter Email">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Phone</label>
		<div class="col-md-3">
			<input   name="phone"  type="text"  class="form-control" id="phone" value="" placeholder="Enter Phone">
		</div>
	</div>
    <div class="form-group">
      <label class="control-label col-md-3">DOB</label>
		<div class="col-md-3">
			<input   class="form-control form-control-inline input-medium date-picker"  size="16" type="text" value="" name="dob" id="dob"/>
			<span class="help-block">Select date</span>
		</div>	
	</div>
	<div class="form-group">
      <label class="col-md-3 control-label">Address</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "address");
			$fck->BasePath = "fckeditor/";
			$fck->Value = "";
			$fck->Config["EnterMode"] = "br"; 
			$fck->Create ();
	      ?>
		</div>
    </div>
	<div class="form-group">
		<label class="col-md-3 control-label">Occupation</label>
		<div class="col-md-3">
			<input   name="occupation"  type="text"  class="form-control" id="occupation" value="" placeholder="Enter Occupation">
		</div>
	</div>
	<div class="form-group">
      <label class="col-md-3 control-label">Message</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "message");
			$fck->BasePath = "fckeditor/";
			$fck->Value = "";
			$fck->Config["EnterMode"] = "br"; 
			$fck->Create ();
	      ?>
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
</div>
</div>
<?php  }include "template.php";?>