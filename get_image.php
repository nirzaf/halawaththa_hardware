<?php 

  //--------------------------------------------------------------------------
  // php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  //error_reporting(0);
  include('includes/config.php');
  $key=$_GET['id'];

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $sql = "SELECT image FROM tblproducts WHERE id = $id";
  $query = $dbh->prepare($sql);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ); 
  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  echo json_encode($results);

?>