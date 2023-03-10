<?php 
include "class/Finance_statement.php";
function main(){
$orderBy = "desc";
$fieldName = "finance_statement_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);

if($keywords != ""){
	$condition.=" a.year like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Finance_statement::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Finance_statement::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>FINANCE STATEMENT MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by year: 
						<input type="text" value="<?php echo $keywords ?>" name="keywords" id="keywords" style="width:300px; height:20px;"> &nbsp; 
						<input type="submit" style="" value="   Search   " />
					</div>
				</form>
				-->
		</div>
		<div class="actions">
			<div class="btn-group">
				<a class="btn default" href="#" data-toggle="dropdown">
				Columns
				<i class="fa fa-angle-down"></i>
				</a>
				<div id="sample_2_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Year";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "File an";?></label><label><input type="checkbox" checked data-column="<?php echo "3";?>"><?php echo "File en";?></label><label><input type="checkbox" checked data-column="<?php echo "4";?>"><?php echo "File fr";?></label><label><input type="checkbox" checked data-column="<?php echo "5";?>"><?php echo "Finance id";?></label>
				</div>
			</div>
			<div class="btn-group" >
				<a id="sample_editable_1_new" class="btn green" href="new_finance_statement.php">
				Add New <i class="fa fa-plus"></i>
				</a>
			</div>						
		</div>
	</div>
	<div class="portlet-body">
		<table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
			<thead>
				<tr>
<th>ID</th>
<th><?php echo "Year";?></th>
<th><?php echo "File an";?></th>
<th><?php echo "File en";?></th>
<th><?php echo "File fr";?></th>
<th><?php echo "Title En";?></th>
<th></th>
<th></th>

				</tr>
			</thead>
			<tbody>
			
	<?php 
 	 	for($rc=0;$rc<count($records);$rc++){
  		$finance_statement = $records[$rc];
	?>
				<tr  id="<?php echo $finance_statement->finance_statement_id;?>">
					<!-- primary key -->
					<td><?php echo $finance_statement->finance_statement_id;?></td>
					<td><?php echo substr(strip_tags($finance_statement->year), 0, 30); if(strlen($finance_statement->year) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($finance_statement->file_an), 0, 30); if(strlen($finance_statement->file_an) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($finance_statement->file_en), 0, 30); if(strlen($finance_statement->file_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($finance_statement->file_fr), 0, 30); if(strlen($finance_statement->file_fr) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($finance_statement->title_en), 0, 30); if(strlen($finance_statement->title_en) > 30) echo "...";  ?></td>

					<td>
						<a class="btn btn-xs yellow" href="edit_finance_statement.php?id=<?php echo $finance_statement->finance_statement_id?>">
						Edit
						<i class="fa fa-edit"></i>
						</a>			
					</td>
					<td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('finance_statement', '<?php echo $finance_statement->finance_statement_id;?>')">
							<i class="fa fa-times"></i>
							Delete
						</a>
					</td>
				</tr>
	<?php  
		  $c++;
		  $i++;
	  	}
	?>
			</tbody>
		</table>
	</div>
</div>
<?php  }include "template.php";?>					
