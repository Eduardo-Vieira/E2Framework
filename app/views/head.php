<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_SESSION['Titulo'];?></title>
<link rel="icon" href="public/imagens/favico.png">
<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="public/css/modificado.css">
<!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="public/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.css">
<link href="public/css/signin.css" rel="stylesheet">

<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

<script type="text/javascript" src="public/js/bootstrap-datetimepicker.js"></script>
<?php
echo '<script type="text/javascript" src="public/js-mvc/'.$GLOBALS['jsController'].'.js"></script>';
?>

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="public/js/ie-emulation-modes-warning.js"></script>
</head>
<body>