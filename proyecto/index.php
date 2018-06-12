<?php require_once './app/helpers/routes.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.3/hamburgers.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=APP['home_url']?>/style.css">
  <title>Diseño Web orientado a Componentes</title>
</head>
<body>
  <?php require_once './app/components/header.php'; ?>
  <main class="Main  u-afterFixed">
    <?php require_once $page; ?>
    <pre><?php var_dump($_GET); ?></pre>
  </main>
  <?php require_once './app/components/footer.php'; ?>
  <script src="<?=APP['home_url']?>/script.js"></script>
</body>
</html>
