<?php function main(){?>




		
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create Contact form</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_contact_form.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
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
		<label class="col-md-3 control-label">Email address</label>
		<div class="col-md-3">
			<input   name="email_address"  type="text"  class="form-control" id="email_address" value="" placeholder="Enter Email address">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Phone</label>
		<div class="col-md-3">
			<input   name="phone"  type="text"  class="form-control" id="phone" value="" placeholder="Enter Phone">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Subject</label>
		<div class="col-md-3">
			<input   name="subject"  type="text"  class="form-control" id="subject" value="" placeholder="Enter Subject">
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