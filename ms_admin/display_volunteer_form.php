<?php
include "class/Volunteer_form.php";
function main(){
$orderBy = "desc";
$fieldName = "volunteer_form_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);

if($keywords != ""){
	$condition.=" a.ip like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Volunteer_form::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Volunteer_form::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>VOLUNTEER FORM MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by ip:
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
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Submitted date time";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "Ip";?></label><label><input type="checkbox" checked data-column="<?php echo "3";?>"><?php echo "Name";?></label><label><input type="checkbox" checked data-column="<?php echo "4";?>"><?php echo "Email";?></label><label><input type="checkbox" checked data-column="<?php echo "5";?>"><?php echo "Phone";?></label><label><input type="checkbox" checked data-column="<?php echo "6";?>"><?php echo "DOB";?></label><label><input type="checkbox" checked data-column="<?php echo "7";?>"><?php echo "Address";?></label><label><input type="checkbox" checked data-column="<?php echo "8";?>"><?php echo "Occupation";?></label>
				</div>
			</div>
			<div class="btn-group hidden" >
				<a id="sample_editable_1_new" class="btn green" href="new_volunteer_form.php">
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
<th><?php echo "Submitted date time";?></th>
<th><?php echo "Country";?></th>
<th><?php echo "Name";?></th>
<th><?php echo "Email";?></th>
<th><?php echo "Phone";?></th>
<th><?php echo "DOB";?></th>
<th><?php echo "Address";?></th>
<th><?php echo "Occupation";?></th>
<th></th>
<!-- <th></th> -->

				</tr>
			</thead>
			<tbody>

	<?php
 	 	for($rc=0;$rc<count($records);$rc++){
  		$volunteer_form = $records[$rc];
	?>
				<tr  id="<?php echo $volunteer_form->volunteer_form_id;?>">
					<!-- primary key -->
					<td><?php echo $volunteer_form->volunteer_form_id;?></td>
					<td><?php echo substr(strip_tags($volunteer_form->submitted_date_time), 0, 30); if(strlen($volunteer_form->submitted_date_time) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($volunteer_form->country), 0, 30); if(strlen($volunteer_form->country) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($volunteer_form->name), 0, 30); if(strlen($volunteer_form->name) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($volunteer_form->email), 0, 30); if(strlen($volunteer_form->email) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($volunteer_form->phone), 0, 30); if(strlen($volunteer_form->phone) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($volunteer_form->DOB), 0, 30); if(strlen($volunteer_form->DOB) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($volunteer_form->address), 0, 30); if(strlen($volunteer_form->address) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($volunteer_form->occupation), 0, 30); if(strlen($volunteer_form->occupation) > 30) echo "...";  ?></td>

					<td>
						<a class="btn btn-xs green" href="edit_volunteer_form.php?id=<?php echo $volunteer_form->volunteer_form_id?>">
						View
						<i class="fa fa-eye"></i>
						</a>
					</td>
					<!-- <td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('volunteer_form', '<?php echo $volunteer_form->volunteer_form_id;?>')">
							<i class="fa fa-times"></i>
							Delete
						</a>
					</td> -->
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
