<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>product-by-sub-cate</title>
	<link href="web/css/font/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="web/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="web/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
	<link href="web/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
	<link href="web/css/styles-m.css" rel="stylesheet" type="text/css" />
	<link href="web/css/styles.css" rel="stylesheet" type="text/css" />
	<link href="web/css/styles-l.css" rel="stylesheet" type="text/css" />
	<link href="web/css/magicmenu.css" rel="stylesheet" type="text/css" />
	<link href="web/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="web/css/custom.css" rel="stylesheet" type="text/css" />
	<link href="web/css/home.css" rel="stylesheet" type="text/css" />
	<script src="web/js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="web/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

	<link href="web/css/animation.css" rel="stylesheet" type="text/css" />  
</head>

<body data-container="body" class="cms-home cms-index-index page-layout-1column" aria-busy="false">
<div class="page-wrapper">
	<!-- <?php //include('modules/header.php'); ?> -->
	<main id="maincontent" class="">
	    <div class="content-home">
		    <div class="container">
				<div class="row">
				  	<div class="col-md-3 col-sm-6 col-xs-8">
						<?php 
							include('modules/product-by-sub-cate/left-cate.php');
						?>
					</div>
					<div class="col-md-9 col-xs-12 col-sm-12">
						<?php 
							include('modules/product-by-sub-cate/right-product.php');
						?>
					</div>	
					<div class="row">
						<?php 
							include('modules/product-by-sub-cate/carousel-product.php');
						?>
					</div>

					<div class="row">
						<?php 
							include('modules/product-by-sub-cate/row-brand.php');
						?>
					</div>
					<div class="row">
						<?php 
							include('modules/product-by-sub-cate/content-bottom.php');
						?>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- <?php //include('modules/footer.php'); ?> -->
</div>
</body>
</html>