<?php 

  //--------------------------------------------------------------------------
  // php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  //error_reporting(0);
  include('includes/config.php');
  $key=$_GET['key'];

  $array = array();
  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $sql = "SELECT * FROM tblproducts WHERE id LIKE '%{$key}%'";
  $query = $dbh->prepare($sql);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ); 
  foreach($results as $result){
      $array[] = $result->id;
  }
  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  echo json_encode($array);

?>