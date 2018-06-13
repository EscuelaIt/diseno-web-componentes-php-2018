<?php
require_once './app/store/data.php';
$route = ( isset($_GET['p']) ) ? $_GET['p'] : 'home';

switch ($route) {
  case 'home':
    $page = './app/pages/home.php';
    $meta_title = 'Título del Home';
    $meta_description = 'Descripción del Home';
    break;
    case 'acerca':
    $page = './app/pages/about.php';
    $meta_title = 'Título de Acerca';
    $meta_description = 'Descripción de Acerca';
    break;
  case 'trabajos':
    $page = './app/pages/works.php';
    $meta_title = 'Título de Trabajo';
    $meta_description = 'Descripción de Trabajo';
    break;
  case 'contacto':
    $page = './app/pages/contact.php';
    $meta_title = 'Título de Contacto';
    $meta_description = 'Descripción de Contacto';
    break;

  default:
    $page = './app/pages/404.php';
    $meta_title = 'Título de Error 404';
    $meta_description = 'Descripción de Error 404';
    header('HTTP/1.0 404 Not Found');
    header('Status: 404 Not Found');
    break;
}

//echo $route;
