<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/index.css">
	<title>Admin</title>
</head>
<body>
	<div class="container">
		<div class="header">
		<div>
<div>
  <img src="shopcar.jpg" alt="" width="100%" height="650px" align="center">
</div>
	<ul>
		<li><a href="main.php">Home</a></li>
  </ul>
		</div>
	</div>
	<div class="main" >
		<table align="center">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Image</th>
				<th>Price</th>
				<th>Action</th>

			</tr>
			<?php 
			require_once ("./db.php");
			$sql = "select * from product";
			$rows = query($sql);
			for ($i=0; $i < count($rows) ; $i++) { 
				?>
				<tr>
					<td><?=$rows[$i][0]?></td>
					<td><?=$rows[$i][1]?></td>
					<td align="center"><img style="width: 90%; height: 20%;" src="<?=$rows[$i][2]?>" alt=""></td>
					<td><?=$rows[$i][3]?></td>
					<td><a href="editproduct.php?id=<?=$rows[$i][0]?>">Edit</a>
					<a href="deleteproduct.php?id=<?=$rows[$i][0]?>" >Delete</a></td>
				</tr>
				<?php
			}
			?>
		</table>

    <br>

<div class="">
  <h1>Add Product</h1>
<table style="font-size: 15px;" align="center" >  
      <tr>
        <form action="" method="POST">
          <td>ID</td>
          <td><input type="text" name="pid"></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="Name"></td>
        </tr>
        <tr>
          <td>Photo</td>
          <td><input type="text" name="Photo"></td>
        </tr>
        <tr>
          <td>Price</td>
          <td><input type="text" name="Price"></td>
        </tr>
        <tr>
          <td>CatID</td>
          <td><select name="cid">
            <?php 
            $sql = "select * from category";
            $rows = query($sql);
            for ($i=0; $i < count($rows) ; $i++) { 
              ?>
              <option value="<?=$rows[$i][0]?>"><?=$rows[$i][1]?></option>
              <?php
            }
            ?>
          </select></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" value="Add"></td>
        </tr>
      </table>
      <?php 
      require_once ("./db.php");
      if (isset($_POST['pid']) && isset($_POST['Name']) && isset($_POST['Photo']) && isset($_POST['Price']) && isset($_POST['cid'])) 
      {
        $pid = $_POST['pid'];
        $Name = $_POST['Name'];
        $Photo = $_POST['Photo'];
        $Price = $_POST['Price'];
        $cid = $_POST['cid'];
        $sql= "insert into product(ProductId, ProductName, Image, Price, CatId) VALUES ('$pid','$Name','$Photo','$Price', '$cid')";
        $sql1 = "insert into productdetail(productid) values ('$pid')";

        if (execsql($sql)&&execsql($sql1)) {
          echo "Success refresh in 5s";

          header("Location: ./index.php");

        }
        else{
        echo "Adding Failed";
      }

      }
            ?>


    </form>
</div>

</div>
</body>
</html>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #9400D3;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #483D8B;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>