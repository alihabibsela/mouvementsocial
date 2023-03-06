<?php function main(){?>



		
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create Donation</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_donation.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
				

    <div class="form-group">
      <label class="control-label col-md-3">Date time</label>
		<div class="col-md-4">
			<div class="input-group date form_meridian_datetime" data-date="">                                       
				<input   type="text" size="16" readonly class="form-control" name="date_time" id="date_time">
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
		<label class="col-md-3 control-label">Amount</label>
		<div class="col-md-3">
			<input   name="amount"  type="text"  class="form-control" id="amount" value="" placeholder="Enter Amount">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Currency id</label>
		<div class="col-md-4">
			<select    class="form-control select2me" data-placeholder="Select..." name="currency_id" id="currency_id">
			<option selected="selected" value="0">--- Select Currency id ---</option>
			<?php
			$sql="select * from currency";
			$result=mysqli_query ($_SESSION["db_conn"], $sql);
			while($currency=mysqli_fetch_array($result)){?>
			<option value="<?php echo $currency['currency_id']?>"><?php echo $currency["currency_en"]?></option>
		   	<?php }?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Email address</label>
		<div class="col-md-3">
			<input   name="email_address"  type="text"  class="form-control" id="email_address" value="" placeholder="Enter Email address">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Name</label>
		<div class="col-md-3">
			<input   name="name"  type="text"  class="form-control" id="name" value="" placeholder="Enter Name">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">City</label>
		<div class="col-md-3">
			<input   name="city"  type="text"  class="form-control" id="city" value="" placeholder="Enter City">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">State id</label>
		<div class="col-md-4">
			<select    class="form-control select2me" data-placeholder="Select..." name="state_id" id="state_id">
			<option selected="selected" value="0">--- Select State id ---</option>
			<?php
			$sql="select * from state";
			$result=mysqli_query ($_SESSION["db_conn"], $sql);
			while($state=mysqli_fetch_array($result)){?>
			<option value="<?php echo $state['state_id']?>"><?php echo $state["name_en"]?></option>
		   	<?php }?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Zipcode</label>
		<div class="col-md-3">
			<input   name="zipcode"  type="text"  class="form-control" id="zipcode" value="" placeholder="Enter Zipcode">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Payment type</label>
		<div class="col-md-3">
			<input   name="payment_type"  type="text"  class="form-control" id="payment_type" value="" placeholder="Enter Payment type">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Status</label>
		<div class="col-md-3">
			<input   name="status"  type="text"  class="form-control" id="status" value="" placeholder="Enter Status">
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