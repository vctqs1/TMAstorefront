<!DOCTYPE html>
<html>
<head>
	<title>product-detail</title>
	<meta charset="utf-8">
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
	<link href="web/css/product-detail.css" rel="stylesheet" type="text/css" /> 

	<link rel="stylesheet" type="text/css" href="web/boostrap/fonts/glyphicons-halflings-regular.svg" />
</head>
<body data-container="body" class="cms-home cms-index-index page-layout-1column" aria-busy="false">
<div class="page-wrapper">
	<!-- <?php //include('modules/header.php'); ?> -->
	<main id="maincontent" class="">
	    <div class="content-home">	
		    <div class="container">
				<div class="row">
					<div class="col-md-4"><?php include('modules/product-detail/product-image.php'); ?></div>
					<div class="col-md-8"><?php include('modules/product-detail/product-review.php'); ?></div>
				</div>
				<div class="row">
					<?php include('modules/product-detail/product-frequently.php'); ?>
				</div>
				<div class="row">
					<?php include('modules/product-detail/carousel-product-customer.php'); ?>
				</div>
				<div class="row">
					<?php include('modules/product-detail/product-description.php'); ?>
				</div>
				<div class="row">
					<?php include('modules/product-detail/product-info.php'); ?>
				</div>
			</div>
		</div>
	</main>
</div>
</body>
</html>