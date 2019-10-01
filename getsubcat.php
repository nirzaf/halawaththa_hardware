<?php
include('includes/config.php');
if(!empty($_POST["catid"])) 
{
 $id=intval($_POST['catid']);
 if(!is_numeric($id)){
 
 	echo htmlentities("invalid industryid");exit;
 }
 else{
 $stmt = mysqli_query($con,"SELECT subcategory FROM subcategory WHERE categoryid ='$id'");
 ?><option selected="selected">Select Subcategory </option><?php
 while($row=mysqli_fetch_array($stmt))
 {
  ?>
  <option value="<?php echo htmlentities($row['subcategory']); ?>"><?php echo htmlentities($row['subcategory']); ?></option>
  <?php
 }
}

}
?>