 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="editproduct.css">
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
	            $sql = "Select * From product where productid='".$id."'";
	            $rows = query($sql);
	        ?>
	<form action="">
	<div>
	  <img src="shopcar.jpg" alt="" width="100%" height="650px" align="center">
	</div>

	<div class="main">
	<ul>
		<a href="main.php">Home</a>
		<a href="index.php">Back</a>
	</ul>
<!-- 	<ul>
		<li>
			<a href="index.php">Back</a>
		</li>
	</ul> -->
		
	</div>

	<br>
	<hr color="black" style="width: 100%" size="1">

	<table class="canle" border="1" align="center">
		<tr>
			<td colspan="2" align="center">Update Product</td>
		</tr>
		<tr>
			<td align="right">Category:</td>
		    <td><select name="catid" id="">
			<?php
			require_once './db.php';
			$sql = "select * from category";
			$cats = query($sql);
			for($i=0;$i<count($cats);$i++)
			{
				if($cats[$i][0]==$rows[0][4])
				{
					?>
					<option value="<?=$cats[$i][0]?>"selected>
						<?=$cats[$i][1]?>
					</option>
					<?php
				}
				else
				{
					?>
					<option value="<?=$cats[$i][0]?>"><?=$cats[$i][1]?></option>
					<?php
				}
				?>
				<?php

			}
			?>
		</select></td>
	    </tr>
	    <tr>
	    	<td align="right">ID: </td>
	    	<td><input type="text" name="id" value="<?=$rows[0][0]?>"></td>
	    </tr>
	    <tr>
	    	<td align="right">Name: </td>
	    	<td><input type="text" name="name" value="<?=$rows[0][1]?>"></td>
	    </tr>
	    <tr>
	    	<td align="right">Image: </td>
	    	<td ><input type="text" name="image" value="<?=$rows[0][2]?>"></td>
	    </tr>
	    <tr>
	    	<td align="right">Price: </td>
	    	<td><input type="number" name="price" value="<?=$rows[0][3]?>"></td>
	    </tr>
	    <tr>
	    	<td  align="center" colspan="2" align="right" style="padding-left: 10px;">
	    		<input style="width: 70px; border: 1px solid black" type="submit" value="Update">
	    		<span style="color:#F6ECEC ">--------------</span>
	    		<input style="width: 70px; border: 1px solid black" type="reset" value="Reset"></a>
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
require_once './db.php';
if(isset($_GET['id'])&&isset($_GET['name'])&&isset($_GET['image'])&&isset($_GET['catid'])&&isset($_GET['price']))
{
	$id = $_GET['id'];
	$name = $_GET['name'];
	$image = $_GET['image'];
	$catid = $_GET['catid'];
	$price = $_GET['price'];
	$sql = "Update product set productname='".$name."',image='".$image."',price='".$price."',catid='".$catid."'where productid='".$id."'";
	if (execsql($sql)) {
		echo "Addition successfully";
		header("Location: ./index.php");
	}
	else
	{
		echo "Addition fail";
	}

}
?>
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
input[type=reset] {
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
	font-family: Monospace;
	font-size: 25px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>