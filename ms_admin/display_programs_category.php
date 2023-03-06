<?php 
include "class/Programs_category.php";
function main(){
$orderBy = "desc";
$fieldName = "programs_category_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);

if($keywords != ""){
	$condition.=" a.cat_name_ar like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Programs_category::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Programs_category::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>PROGRAMS CATEGORY MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by cat name ar: 
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
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Cat name ar";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "Cat name en";?></label><label><input type="checkbox" checked data-column="<?php echo "3";?>"><?php echo "Cat name fr";?></label><label><input type="checkbox" checked data-column="<?php echo "4";?>"><?php echo "Icon";?></label><label><input type="checkbox" checked data-column="<?php echo "5";?>"><?php echo "Orders";?></label>
				</div>
			</div>
			<div class="btn-group" >
				<a id="sample_editable_1_new" class="btn green" href="new_programs_category.php">
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
<th><?php echo "Cat name ar";?></th>
<th><?php echo "Cat name en";?></th>
<th><?php echo "Cat name fr";?></th>
<th><?php echo "Icon";?></th>
<th><?php echo "Orders";?></th>
<th></th>
<th></th>

				</tr>
			</thead>
			<tbody>
			
	<?php 
 	 	for($rc=0;$rc<count($records);$rc++){
  		$programs_category = $records[$rc];
	?>
				<tr  id="<?php echo $programs_category->programs_category_id;?>">
					<!-- primary key -->
					<td><?php echo $programs_category->programs_category_id;?></td>
					<td><?php echo substr(strip_tags($programs_category->cat_name_ar), 0, 30); if(strlen($programs_category->cat_name_ar) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($programs_category->cat_name_en), 0, 30); if(strlen($programs_category->cat_name_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($programs_category->cat_name_fr), 0, 30); if(strlen($programs_category->cat_name_fr) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($programs_category->icon), 0, 30); if(strlen($programs_category->icon) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($programs_category->orders), 0, 30); if(strlen($programs_category->orders) > 30) echo "...";  ?></td>

					<td>
						<a class="btn btn-xs yellow" href="edit_programs_category.php?id=<?php echo $programs_category->programs_category_id?>">
						Edit
						<i class="fa fa-edit"></i>
						</a>			
					</td>
					<td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('programs_category', '<?php echo $programs_category->programs_category_id;?>')">
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
