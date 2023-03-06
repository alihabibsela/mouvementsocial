<?php function main(){?>


		
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create Calls docs</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_calls_docs.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
				

	<div class="form-group">
		<label class="control-label col-md-3">Calls id</label>
		<div class="col-md-4">
			<select    class="form-control select2me" data-placeholder="Select..." name="calls_id" id="calls_id">
			<option selected="selected" value="0">--- Select Calls id ---</option>
			<?php
			$sql="select * from calls";
			$result=mysqli_query ($_SESSION["db_conn"], $sql);
			while($calls=mysqli_fetch_array($result)){?>
			<option value="<?php echo $calls['calls_id']?>"><?php echo $calls["title_en"]?></option>
		   	<?php }?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Doc title ar</label>
		<div class="col-md-3">
			<input   name="doc_title_ar"  type="text"  class="form-control" id="doc_title_ar" value="" placeholder="Enter Doc title ar">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Doc title en</label>
		<div class="col-md-3">
			<input   name="doc_title_en"  type="text"  class="form-control" id="doc_title_en" value="" placeholder="Enter Doc title en">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Doc title fr</label>
		<div class="col-md-3">
			<input   name="doc_title_fr"  type="text"  class="form-control" id="doc_title_fr" value="" placeholder="Enter Doc title fr">
		</div>
	</div>
	<div class="form-group">
      <label class="col-md-3 control-label">Doc ar</label>
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
					<input   type="file" class="default" name="doc_ar"   id="doc_ar"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
    </div>
	<div class="form-group">
      <label class="col-md-3 control-label">Doc en</label>
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
					<input   type="file" class="default" name="doc_en"   id="doc_en"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
    </div>
	<div class="form-group">
      <label class="col-md-3 control-label">Doc fr</label>
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
					<input   type="file" class="default" name="doc_fr"   id="doc_fr"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
    </div>
	<div class="form-group">
		<label class="col-md-3 control-label">Orders</label>
		<div class="col-md-3">
			<input   name="orders"  type="text"  class="form-control" id="orders" value="" placeholder="Enter Orders">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Is active</label>
		<div class="col-md-9">
			<div class="make-switch" data-on="warning" data-off="danger">
				<input   type="checkbox" checked class="toggle"  name="is_active"/>
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