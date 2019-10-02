<?php 
session_start();
//error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $sql = "SELECT image FROM tblproducts WHERE id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query = $execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        foreach ($results as $result) {
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
    <title>IMS | Inventory Management System</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/table-responsive.css" rel="stylesheet">
  </head>
  <body>
<section id="container" >
<?php include("includes/header.php");?>
<?php include("includes/sidebar.php");?>
        <section id="main-content">
          <section class="wrapper">
          	<h3>View Products by Id </h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
              <div class="content-panel">
  <form action="" method="POST">
  Enter Product Id: 
    <input type="text" name="id" placeholder="Enter product id"/> <br><br>
    <div class="col-sm-4">
    <div class="col-sm-10" style="padding-left:190px; padding-top:20px">
    <input type="submit" name="submit" value="Search" class="btn btn-primary"/><br><br>
    </div>
    <img id="blah" width="600" height="400" src="<?php if($result->image!=null){'pr_images/'.$result->image;}else{'img/tp.png';}?>" alt="" />
    </div>
  </form>               
        </div><!-- /content-panel -->
        </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		</section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->
  <?php include("includes/footer.php");?>
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    <!--script for this page-->
  </body>
</html>
<?php 
} ?>
