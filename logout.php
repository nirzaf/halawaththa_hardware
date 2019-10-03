<?php
session_start();
include("includes/config.php");
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
$sql = "UPDATE userlog  SET logout = '$ldate' WHERE username = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1";
$query = $dbh->prepare($sql);
$query->execute();
if ($query->rowCount()>0) {
    session_unset();
    session_destroy();
}else{
    return;
}
?>
<script language="javascript">
document.location="index.php";
</script>
