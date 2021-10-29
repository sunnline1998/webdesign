<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="editproductdetail.css">
  <title>Edit Product</title>
  <meta charset="utf-8">
</head>
<body>
  <div>

    <div>
      <?php
            require_once './db.php';
            if(isset($_GET['id']))
            {
              $id = $_GET['id'];
              $sql = "Select * From productdetail where productdetailid='".$id."'";
              $rows = query($sql);
          ?>
 
  <div>
    <img src="intro.jpg" alt="" width="100%" height="300px" align="center">
  </div>

  <div class="main">
    <div>
  <ul>
    <li>
      <a href="editdetail.php">Back</a>
    </li>
  </ul>
    </div>
    
  </div>

  <br>
  <hr color="black" style="width: 100%" size="1">

  <table class="canle" border="1" align="center">
  <form action="" method="POST">
    <tr>
      <td colspan="2" align="center">Update Product Detail</td>
    </tr>
      <tr>
      <td>DetailID</td>
      <td><?=$rows[0][0]?></td>
    </tr>
    <tr>
      <td>Productid</td>
      <td><?=$rows[0][1]?></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><?=$rows[0][2]?>"></td>
    </tr>
        <td  align="center" colspan="2" align="right" style="padding-left: 10px;">
          <input style="width: 70px; border: 1px solid black" type="submit" value="Update" name="submit">
          
        </td>
        
      </tr>
     </table>
  </form>

  <?php
}
?>
    </div>    
  </div>

</body>
</html>
<?php

if(isset($_POST['submit']))
{
  
  
  $screen = $_POST['screen'];
  $os = $_POST['os'];
  $fontc = $_POST['fontc'];
  $raerc = $_POST['raerc'];
  $ram = $_POST['ram'];
  $cpu = $_POST['cpu'];
  $pin = $_POST['pin'];
  $spcpu = $_POST['spcpu'];
  $wifi = $_POST['wifi'];

  $sql = "UPDATE productdetail set screen = '$screen' , OS= '$os' , CameraT =  '$fontc' , CameraS =  '$raerc'  , RAM =  '$ram'  , CPU = '$cpu'  , Battery =  '$pin'  , CPUSp =  '$spcpu'  , wifi =  '$wifi'   where productdetailid = '$id' ";

  if (execsql($sql)) {
    header("Location: ./editdetail.php");
  }
  else
  {
    echo "Addition fail";
  }

}
?>
