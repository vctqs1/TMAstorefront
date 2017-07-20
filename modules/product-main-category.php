<!DOCTYPE html>
<html>
<head>
	<title>product-main-category</title>
	<link href="../web/css/font/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="../web/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="../web/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
	<link href="../web/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/styles-m.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/styles.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/styles-l.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/magicmenu.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/custom.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/home.css" rel="stylesheet" type="text/css" />
	<script src="../web/js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="../web/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<link href="../web/css/animation.css" rel="stylesheet" type="text/css" />  
	<link href="../web/css/product-main-category.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<main>	
    <div class="container">
		<div class="row">
		  	<div class="col-md-3">
				<?php 
					include('product-main-category/left-category.php');
				?>
			</div>
			<div class="col-md-9">
				<div class="row">
					<?php 
						include('product-main-category/right-top.php');
					?>
				</div>
				<div class="row">
					<?php 
						include('product-main-category/right-center.php');
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<?php 
				include('product-main-category/bottom.php');
			?>
		</div>
	</div>
</main>
</body>
</html>