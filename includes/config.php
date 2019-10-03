<?php
// define('DB_HOST','sql308.unaux.com');
// define('DB_USER','unaux_24579808');
// define('DB_PASS' ,'fvxkehh');
// define('DB_NAME', 'unaux_24579808_halawatha');

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'cms');

try
{
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    exit("Error: " . $e->getMessage());
}
?>