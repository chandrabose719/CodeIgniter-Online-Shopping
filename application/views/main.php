<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product - Welcome To UrHome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/maincss.css">
</head>
<body>
	<!-- Header Part -->
	<div id="header-part">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url();?>home"><img src="<?php echo base_url();?>assets/images/header-title.png" alt="My Site"></a>
				</div>
				<div class="navbar-right">
					<ul class="nav navbar-nav"> 
						<li><a href="<?php echo base_url();?>home">Home</a></li>
						<li><a href="<?php echo base_url();?>main">Products</a></li>
						<li><a href="<?php echo base_url();?>login">Login</a></li>
						<li><a href="<?php echo base_url();?>cart">Cart : 
						<?php 
							echo $count;
						?>
						</a></li>	
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<!-- Main Home -->
	<div id="main-part">
		<div class="container">
			<h2>Products</h2>
			<div class="divider"></div>
			<?php
				foreach ($all_product->result() as $row) {
					$product_name = $row->product_name;
					$product_name = str_replace('_', ' ' , $product_name);
					$product_name = strtoupper($product_name);
			?>		
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="main-content">
					<form method="post" action="<?php echo base_url();?>main/add_cart">	
						<h4><?php echo $product_name; ?></h4>
						<p>PRICE:&#8377;<?php echo $row->product_cost; ?></p>
						<input type="text" name="product_quantity" class="form-control" placeholder="Quantity">
						<input type='hidden' name='product_id' value='<?php echo $row->product_id; ?>'>
						<input type="submit" class='form-control btn btn-success' name='addCart-submit' value="Add To Cart">
					</form>
				</div>
			</div>	
			<?php
				}
			?>
		</div>
	</div>
	<!-- Footer Part -->
	<nav class="navbar navbar-fixed-bottom">
		<div id="footer-home">
			<div class="container">
				<p>This is The Footer Contents || KVC Bose </p>
			</div>	
		</div>
	</nav>
	<!-- Javascript -->
	<script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>