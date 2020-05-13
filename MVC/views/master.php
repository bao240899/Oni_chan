<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEXTAG | HOME PAGE</title>
    <!-- Bootstrap -->
    <link href="./public/css/bootstrap-4.2.1.css" rel="stylesheet">
	  <base href="./public/css/product-page.css" rel="stylesheet">
    <base href="./public/css/Information-page.css" rel="stylesheet">
    <base href="./public/css/register.css" rel="stylesheet">
	  <link rel="Icon" href="./public/images/logo3.png">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
	
  </head>
  <body>
      <!--Header-->
      <?php require_once "./mvc/views/blocks/Header.php" ?>
      <!--Content-->
      <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?><br>
      <!--Footer-->
      <?php require_once "./mvc/views/blocks/Footer.php"?>
  </body>
