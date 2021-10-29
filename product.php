 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="product.css">
	<title>Product</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container" align="center">
	
		<div class="logo">
	<img src="shopcar.jpg" alt="" width="100%" height="650px" align="center">
</div>

<div class="main">
	<ul>
		<li><a href="main.php">Home</a></li>
	</ul>	
</div>

			
<div class="content">
	<div class="khung">
<?php  
			  	require_once './db.php';
			  	if(isset($_GET['id']))
			  	{
			  		$productid = $_GET['id'];
			  		$sql="Select * From product where productid='".$productid."'";
			  		$rows = query($sql)
			  	
			  	?>
			  		
			  			<div class="anh"><img src="<?=$rows[0][2]?>"></div>
			  			<div class="ten"><?=$rows[0][1]?></div>
			  			<div class="price" style="color:#0D0C0C;">Price:<?=$rows[0][3]?>$<br>
			  		    <input style="width: 40px" type="button" value="Mua" >
			  			</div>
			  			
			  		
			  		<?php
			  	}
			  	?>
	</div>
	<div>
			<div class="table" style="background-color: white;">
				

				<?php
				require_once './db.php';
				if(isset($_GET['id']))
                {
	            $id = $_GET['id'];
	            $sql = "Select * From productdetail where productid='".$id."'";
	            $rows = query($sql);
	           ?>
				<form action="">

				</form>
			<?php
			}
			?>
			</div>
		</div>

</div>

	<div>
		
	</div>

</div>
</body>
</html>