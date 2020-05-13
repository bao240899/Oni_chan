<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    div{padding:20px}
    #header, #footer{background-color:yellow}
    </style>
    <link rel="Icon" href="images/Logo.png">
    <link href="css/bootstrap-4.2.1.css" rel="stylesheet">
	<link href="css/product-page.css" rel="stylesheet">
	<link rel="Icon" href="image/NexTag - logo1.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div id="header"></div>
    <div id="content">
        <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>
    </div>
    <div id="footer"></div>
</body>
</html>