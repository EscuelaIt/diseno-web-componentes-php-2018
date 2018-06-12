<?php
require_once './app/store/data.php';
$route = ( isset($_GET['p']) ) ? $_GET['p'] : 'home';

switch ($route) {
  case 'home':
    $page = './app/pages/home.php';
    break;
  case 'acerca':
    $page = './app/pages/about.php';
    break;
  case 'trabajos':
    $page = './app/pages/works.php';
    break;
  case 'contacto':
    $page = './app/pages/contact.php';
    break;

  default:
    $page = './app/pages/404.php';
    header('HTTP/1.0 404 Not Found');
    header('Status: 404 Not Found');
    break;
}

//echo $route;
