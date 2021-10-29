<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Home</title>
	<meta charset="utf-8">

</head>
<body>

<div class="container">
	<div align="right" class="login">
		<a href="login.php">Login</a>
	</div>
<div>
	<img src="shopcar.jpg" alt="" width="100%" height="650px" align="center">
</div>

<div class="main">
	<ul>
		<li><a href="main.php">Home</a></li>
	</ul>
		
		<ul> 
			  	<?php
				require_once './db.php';
				$sql ="Select * from category";
				$rows = query($sql);
				for($i=0;$i<count($rows);$i++)
				{
					?>
					<li ><a href="main.php?CatId=<?=$rows[$i][0]?>"><?=$rows[$i][1]?></a></li>
					<?php
				}
				?>
		</ul>
	<ul>
		<li><a href="index.php">Product Manage</a></li>
	</ul>


<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #2F4F4F;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  /*background-color: #f2f2f2*/;
  padding: 30px;
}
	h1{
		width: 20%;
		font-family: Monospace;
		color: #2F4F4F;
		border: 3px solid #A9A9A9;
	}
</style>


</div>
<div class="search">
	<h1>Search Product</h1>
		<form>
			<input type="text" placeholder="Search product by name" name="keyword">
			<input type="submit" name="Search">
	    </form>
</div>
<div class="content">

<?php  
			  	
			  	if(isset($_GET['CatId']))
			  	{
			  		$CatId = $_GET['CatId'];
			  		$sql="Select * From product where CatId=".$CatId;
			  	}
			  	elseif (isset($_GET['keyword'])) {
			  		$sql = "Select * From Product where ProductName like '%" . $_GET['keyword'] . "%'";
			  	}
			  	else{  
			  		$sql="Select * From product";
			  	}
			  	$rows=query($sql);
			  	for($i=0;$i<count($rows);$i++)
			  	{
			  	?>
			  		<div class="khung">
			  			<a href="product.php?id=<?=$rows[$i][0]?>"><div class="anh"><img src="<?=$rows[$i][2]?>"></div></a>
			  			<div class="ten"><?=$rows[$i][1]?></div>
			  			<div class="price" style="color:#0D0C0C;">Price:<?=$rows[$i][3]?>$<br>
			  		    
			  		    <!-- <a href="product.php?id=<?=$rows[$i][0]?>">More detail</a><br> -->
			  		    <input style="width: 40px" type="button" value="Mua" >
			  			</div>
			  			
			  		</div>
			  		<?php
			  	}
			  	?>
	</div>
</div>
</body>
</html>