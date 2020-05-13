<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEXTAG | HOME PAGE</title>
    <!-- Bootstrap -->
	  <link rel="Icon" href="images/Logo.png">
    <link href="./Public/css/bootstrap-4.2.1.css" rel="stylesheet">
	  <link href="./Public/css/product-page.css" rel="stylesheet">
	  <link rel="Icon" href="./Public/images/logo3.png">  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <!--Right-sidebar-->
          <?php require_once "./mvc/views/blocks/admin_right_sidebar.php" ?>
        </div>
        <div class="col-md-9 col-sm-8">
          <!--Header-->
          <?php require_once "./mvc/views/blocks/Header_admin.php" ?>
          <!--Content-->
          <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>
        </div>
      </div>
    </div>
  </body>

<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>