<?php require_once './app/helpers/routes.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once './app/helpers/meta_tags.php'; ?>
</head>
<body>
  <?php require_once './app/components/header.php'; ?>
  <main class="Main  u-afterFixed">
    <section class="Main-container">
      <?php require_once $page; ?>
      <pre><?php var_dump($_GET); ?></pre>
    </section>
  </main>
  <?php require_once './app/components/footer.php'; ?>
  <script src="<?=APP['home_url']?>/script.js"></script>
</body>
</html>
