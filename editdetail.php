<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="editdetail.css">
	<title>Product Detail</title>
</head>
<body>

<div class="container">
	<div class="header">
		<div>
<div>
  <img src="shopcar.jpg" alt="" width="100%" height="650px" align="center">
</div>
	<ul>
		<li><a href="index.php">Return</a></li>
  	</ul>
		</div>
	</div>

<div class="main">
	<table border="1" align="center"> 
		<tr align="center">
			<td>Product ID</td>
			<td>Image</td>
			<td>Price</td>
			<td>Description</td>

		</tr>
			<?php 
			require_once ("./db.php");
			$sql = "select * from productdetail";
			$rows = query($sql);
			for ($i=0; $i < count($rows) ; $i++) { 
				?>
				<tr align="center">
					
					<td><?=$rows[$i][1]?></td>
					<td align="center"><img style="width: 20%; height: 20%;" src="<?=$rows[$i][2]?>" alt=""></td>
					<td><?=$rows[$i][3]?></td>
					<td><?=$rows[$i][4]?></td>
										<td><a href="editproductdetail.php?id=<?=$rows[$i][0]?>">Edit</a></td>
          <td><a href="deleteproductdetail.php?id=<?=$rows[$i][0]?>">Delete</a></td>
				</tr>
				<?php
			}
			?>

</div>


</div>
</body>
</html>