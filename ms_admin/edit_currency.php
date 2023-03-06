<?php 
 require "session_start.php";
include "class/Currency.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$currency = Currency::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/currency_validation.js"></script>
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Currency</div>
	</div>
	<div class="portlet-body form">
	<form action="update_currency.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="currency_id" type="hidden" value="<?php echo $currency->currency_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Currency ar</label>
		<div class="col-md-3">
			<input     name="currency_ar" type="text"  class="form-control" id="currency_ar" value="<?php echo stripslashes($currency->currency_ar)?>" placeholder="Enter Currency ar">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Currency en</label>
		<div class="col-md-3">
			<input     name="currency_en" type="text"  class="form-control" id="currency_en" value="<?php echo stripslashes($currency->currency_en)?>" placeholder="Enter Currency en">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Currency fr</label>
		<div class="col-md-3">
			<input     name="currency_fr" type="text"  class="form-control" id="currency_fr" value="<?php echo stripslashes($currency->currency_fr)?>" placeholder="Enter Currency fr">
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