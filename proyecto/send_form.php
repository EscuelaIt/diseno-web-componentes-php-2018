<?php
//echo 'Se envió formulario';

$res = array(
  'err' => false,
  'name' => $_POST['name'],
  'email' => $_POST['email'],
  'subject' => $_POST['subject'],
  'comments' => $_POST['comments'],
  'message' => 'Información enviada con exito'
);

header('Content-type: application/json');
echo json_encode($res);
