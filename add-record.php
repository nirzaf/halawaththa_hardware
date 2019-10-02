<?php
session_start();
//error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
    header('location:index.php');
  }
  else
  {
  if(isset($_POST['submit']))
  {
  try 
    {
      $id=intval($_POST['pid']);
      $uid = rand(100, 1000000).time();
     // $uid=$_SESSION['id'];
      $filename = $_FILES["image"]["name"]; // Get the name of the file (including file extension).      
      $allowed_filetypes = array('.jpg','.gif','.bmp','.png'); // These will be the types of file that will pass the validation.
      $max_filesize = 10485760; // Maximum filesize in BYTES (currently 10.0 MB).
      $upload_path = 'pr_images/'; // The place the files will be uploaded to (currently a 'files' directory).
      $ext = substr($filename, strpos($filename, '.'), strlen($filename)-1); // Get the extension from the filename.
 
    // Now check the filesize, if it is too large then DIE and inform the user.
      if ($filename != null && filesize($_FILES["image"]["tmp_name"]) > $max_filesize) {
          die('The Image you attempted to upload is too large.');
      }

      // Check if we can upload to the specified path, if not DIE and inform the user.
      if (!is_writable($upload_path)) {
          die('You cannot upload to the specified directory, please CHMOD it to 777.');
      }
    
      $filename = rand(100, 1000000).time().$ext;
       // this will give the file current time so avoid files having the same name
      move_uploaded_file($_FILES["image"]["tmp_name"], $upload_path . $filename);

      $sql= "INSERT INTO tblproducts (id,userId,image) VALUES(:id,:uid,:img)";
      $query = $dbh->prepare($sql);
      $query->bindParam(':id', $id, PDO::PARAM_INT);
      $query->bindParam(':uid', $uid, PDO::PARAM_STR);
      $query->bindParam(':img', $filename, PDO::PARAM_STR);
      $query->execute();
      if ($query->rowCount() > 0) 
      {
        echo "<script> alert('Added Successfully')</script>";
      }
        
  }catch(PDOException $ex)
  {
    throw $ex;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>CMS | User Register Complaint</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
  </head>
  <body>
  <div id="ex1" class="modal">
      <p>Successfully Added</p>
      <a href="#" rel="modal:close">Ok</a>
  </div>
  <section id="container" >
     <?php include("includes/header.php");?>
      <?php include("includes/sidebar.php");?>
      <section id="main-content">
          <section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> Add Product</h3>

            <!-- BASIC FORM ELELEMNTS -->
    <form role="form" method="POST" action="add-record.php" enctype="multipart/form-data">
    <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Product Id</label>
    <div class="col-sm-4">
    <input type="text" name="pid" required="required" value="" class="form-control" >
    </div>
    </div>
    <br><br>
    <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Product Image</label>
    <div class="col-sm-4">
    <input type='file' name="image" id="image" onchange="readURL(this);"/>
		<img id="blah" width="600" height="400" src="img/tp.png" alt="" />
    </div>
    </div>
    <div></div>
    <div></div>
    <div></div>
    <div class="form-group">
    <div class="col-sm-10" style="padding-left:25% ">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
</form> 
		</section>
    </section>
    <?php include("includes/footer.php");?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	<script src="assets/js/form-component.js"></script>       
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>
