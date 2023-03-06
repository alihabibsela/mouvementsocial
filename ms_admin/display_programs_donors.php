<?php 
include "class/Programs_donors.php";
function main(){
$orderBy = "desc";
$fieldName = "programs_donors_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);

if($keywords != ""){
	$condition.=" a. like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Programs_donors::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Programs_donors::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>PROGRAMS DONORS MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by : 
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
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Donor id";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "Program id";?></label>
				</div>
			</div>
			<div class="btn-group" >
				<a id="sample_editable_1_new" class="btn green" href="new_programs_donors.php">
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
<th><?php echo "Name";?></th>
<th><?php echo "Title En";?></th>
<th></th>
<th></th>

				</tr>
			</thead>
			<tbody>
			
	<?php 
 	 	for($rc=0;$rc<count($records);$rc++){
  		$programs_donors = $records[$rc];
	?>
				<tr  id="<?php echo $programs_donors->programs_donors_id;?>">
					<!-- primary key -->
					<td><?php echo $programs_donors->programs_donors_id;?></td>
					<td><?php echo substr(strip_tags($programs_donors->name), 0, 30); if(strlen($programs_donors->name) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($programs_donors->title_en), 0, 30); if(strlen($programs_donors->title_en) > 30) echo "...";  ?></td>

					<td>
						<a class="btn btn-xs yellow" href="edit_programs_donors.php?id=<?php echo $programs_donors->programs_donors_id?>">
						Edit
						<i class="fa fa-edit"></i>
						</a>			
					</td>
					<td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('programs_donors', '<?php echo $programs_donors->programs_donors_id;?>')">
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
