<?php
if (!isset($_SESSION)) {
      session_start();
}

$_GET['r'] = (isset($_GET['r'])? $_GET['r'].'/': 'index/index');

$rSeparar = explode('/', $_GET['r']);
$controller = $rSeparar[0];
$action = ($rSeparar[1] == null ? 'index' : $rSeparar[1]);
$parametro = ($rSeparar[2] == null ? '' : $rSeparar[2]);

//CLASS DO SISTEMA
require_once ('system/config.php');
require_once ('system/db.php');
require_once ('system/controller.php');
require_once ('app/controllers/'.$controller.'Controller.php');

$GLOBALS['jsController'] = $controller;

$app = new $controller();
$_SESSION['Titulo'] = $app->titulo;
$_SESSION['Versao'] = $app->versao;

//TEMPLETE
require_once ('app/views/head.php');
require_once ('app/views/nav.php');

//TEMPLETE Paginas
$app->$action($parametro);

//TEMPLETE FIM
require_once ('app/views/footer.php');