<?php
require_once './db.php';
if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $sql1 = "Delete from productdetail where productdetailid='".$id."'";
  if (execsql($sql1)) {
    
    header("Location: ./editdetail.php");
  }
  else
  {
    echo "You need to delete productdetail of product first";
  }
}
?>