<?php 
include "class/Publication_category.php";
function main(){
$orderBy = "desc";
$fieldName = "publication_category_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);

if($keywords != ""){
	$condition.=" a.name_ar like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Publication_category::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Publication_category::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>PUBLICATION CATEGORY MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by name ar: 
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
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Name ar";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "Name en";?></label><label><input type="checkbox" checked data-column="<?php echo "3";?>"><?php echo "Name fr";?></label><label><input type="checkbox" checked data-column="<?php echo "4";?>"><?php echo "Icon";?></label><label><input type="checkbox" checked data-column="<?php echo "5";?>"><?php echo "Display order";?></label><label><input type="checkbox" checked data-column="<?php echo "6";?>"><?php echo "Desc ar";?></label><label><input type="checkbox" checked data-column="<?php echo "7";?>"><?php echo "Desc en";?></label><label><input type="checkbox" checked data-column="<?php echo "8";?>"><?php echo "Desc fr";?></label>
				</div>
			</div>
			<div class="btn-group" >
				<a id="sample_editable_1_new" class="btn green" href="new_publication_category.php">
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
<th><?php echo "Name ar";?></th>
<th><?php echo "Name en";?></th>
<th><?php echo "Name fr";?></th>
<th><?php echo "Icon";?></th>
<th><?php echo "Display order";?></th>
<th><?php echo "Desc ar";?></th>
<th><?php echo "Desc en";?></th>
<th><?php echo "Desc fr";?></th>
<th></th>
<th></th>

				</tr>
			</thead>
			<tbody>
			
	<?php 
 	 	for($rc=0;$rc<count($records);$rc++){
  		$publication_category = $records[$rc];
	?>
				<tr  id="<?php echo $publication_category->publication_category_id;?>">
					<!-- primary key -->
					<td><?php echo $publication_category->publication_category_id;?></td>
					<td><?php echo substr(strip_tags($publication_category->name_ar), 0, 30); if(strlen($publication_category->name_ar) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($publication_category->name_en), 0, 30); if(strlen($publication_category->name_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($publication_category->name_fr), 0, 30); if(strlen($publication_category->name_fr) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($publication_category->icon), 0, 30); if(strlen($publication_category->icon) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($publication_category->display_order), 0, 30); if(strlen($publication_category->display_order) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($publication_category->desc_ar), 0, 30); if(strlen($publication_category->desc_ar) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($publication_category->desc_en), 0, 30); if(strlen($publication_category->desc_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($publication_category->desc_fr), 0, 30); if(strlen($publication_category->desc_fr) > 30) echo "...";  ?></td>

					<td>
						<a class="btn btn-xs yellow" href="edit_publication_category.php?id=<?php echo $publication_category->publication_category_id?>">
						Edit
						<i class="fa fa-edit"></i>
						</a>			
					</td>
					<td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('publication_category', '<?php echo $publication_category->publication_category_id;?>')">
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
