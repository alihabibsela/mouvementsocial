<?php function main(){?>






<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create News</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_news.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">


	<div class="form-group">
		<label class="col-md-3 control-label">Title ar</label>
		<div class="col-md-3">
			<input   name="title_ar"  type="text"  class="form-control" id="title_ar" value="" placeholder="Enter Title ar">
		</div>
	</div>
    <div class="form-group">
		<label class="col-md-3 control-label">Title en</label>
		<div class="col-md-3">
			<input   name="title_en"  type="text"  class="form-control" id="title_en" value="" placeholder="Enter Title en">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Title fr</label>
		<div class="col-md-3">
			<input   name="title_fr"  type="text"  class="form-control" id="title_fr" value="" placeholder="Enter Title fr">
		</div>
	</div>
    <div class="form-group">
      <label class="col-md-3 control-label">Sub Title Ar</label>
      	<div class="col-md-3">
	        <textarea class="form-control" limit="35" name="sub_title_ar" style="width: 100%;height: 34px;"></textarea>
            <span class="textareaCount"></span>
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label">Sub Title En</label>
      	<div class="col-md-3">
	        <textarea class="form-control" limit="35" name="sub_title_en" style="width: 100%;height: 34px;"></textarea>
            <span class="textareaCount"></span>
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label">Sub Title Fr</label>
      	<div class="col-md-3">
	        <textarea class="form-control" limit="35" name="sub_title_fr" style="width: 100%;height: 34px;"></textarea>
            <span class="textareaCount"></span>
        </div>
    </div>
	<div class="form-group">
      <label class="col-md-3 control-label">Details ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "details_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = "";
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      ?>
		</div>
    </div>
	<div class="form-group">
      <label class="col-md-3 control-label">Details en</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "details_en");
			$fck->BasePath = "fckeditor/";
			$fck->Value = "";
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      ?>
		</div>
    </div>
	<div class="form-group">
      <label class="col-md-3 control-label">Details fr</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "details_fr");
			$fck->BasePath = "fckeditor/";
			$fck->Value = "";
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      ?>
		</div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label" style="text-align: left;">Sub Details Ar</label>
      	<div class="form-group">
	        <textarea name="sub_details_ar" limit="70" style="width: 100%;height:200px;"></textarea>
            <span class="textareaCount"></span>
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label" style="text-align: left;">Sub Details En</label>
      	<div class="form-group">
	        <textarea name="sub_details_en" limit="70" style="width: 100%;height:200px;"></textarea>
            <span class="textareaCount"></span>
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label" style="text-align: left;">Sub Details Fr</label>
      	<div class="form-group">
	        <textarea name="sub_details_fr" limit="70" style="width: 100%;height:200px;"></textarea>
            <span class="textareaCount"></span>
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3">Dates</label>
		<div class="col-md-3">
			<input   class="form-control form-control-inline input-medium date-picker"  size="16" type="text" value="" name="dates" id="dates"/>
			<span class="help-block">Select date</span>
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

