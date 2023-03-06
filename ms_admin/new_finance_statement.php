<?php function main(){?>


		
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create Finance statement</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_finance_statement.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
				

	<div class="form-group">
		<label class="col-md-3 control-label">Year</label>
		<div class="col-md-3">
			<input   name="year"  type="text"  class="form-control" id="year" value="" placeholder="Enter Year">
		</div>
	</div>
	<div class="form-group">
      <label class="col-md-3 control-label">File an</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="input-group">
					<span class="input-group-btn">
					<span class="uneditable-input">
					<i class="fa fa-file fileupload-exists"></i> 
					<span class="fileupload-preview"></span>
					</span>
					</span>
					<span class="btn default btn-file">
					<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
					<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					<input   type="file" class="default" name="file_an"   id="file_an"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
    </div>
	<div class="form-group">
      <label class="col-md-3 control-label">File en</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="input-group">
					<span class="input-group-btn">
					<span class="uneditable-input">
					<i class="fa fa-file fileupload-exists"></i> 
					<span class="fileupload-preview"></span>
					</span>
					</span>
					<span class="btn default btn-file">
					<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
					<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					<input   type="file" class="default" name="file_en"   id="file_en"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
    </div>
	<div class="form-group">
      <label class="col-md-3 control-label">File fr</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="input-group">
					<span class="input-group-btn">
					<span class="uneditable-input">
					<i class="fa fa-file fileupload-exists"></i> 
					<span class="fileupload-preview"></span>
					</span>
					</span>
					<span class="btn default btn-file">
					<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
					<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					<input   type="file" class="default" name="file_fr"   id="file_fr"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
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