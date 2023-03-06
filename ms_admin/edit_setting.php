<?php function main(){

$sql="SELECT * FROM  `cms_general`  WHERE  `general_id`='1'";
$result=mysqli_query ($_SESSION['db_conn'], $sql);
$general=mysqli_fetch_array($result);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/validate_setting.js" ></script>
<form action="update_setting.php" method="post"  name="setting_form" id="setting_form" onsubmit="return validate_setting(this)">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="TdTitle"  height="25">Edit Site Setting </td>
    </tr>
    <tr>
      <td class="FormControlDesc">Site Title * </td>
      <td width="555" class="TdFormBorder">
	  <input  name="site_title" type="text"  class="InputTextTitle" id="site_title" value="<?php echo $general['site_title']?>" >	  </td>
    </tr>
	    <tr>
      <td class="FormControlDesc">Record / Page *  </td>
      <td width="555" class="TdFormBorder"><input  name="record_page" type="text"  class="InputText" id="record_page" value="<?php echo $general['record/page']?>" /></td>
    </tr>
    <tr>
      <td class="FormControlDesc">Email * </td>
      <td width="555" class="TdFormBorder"><input  name="email" type="text"  class="InputText" id="email" value="<?php echo $general['email']?>" /></td>
    </tr>
    <tr>
      <td class="FormControlDesc">&nbsp;</td>
      <td width="555" class="TdFormBorder"><input name="Reset" type="reset" class="InputButtons" value="Reset" />
      <input name="Submit2" type="submit" class="InputButtons" value="Submit" /></td>
    </tr>
  </table>
</form>
<?php }include "template_v1.php";?>