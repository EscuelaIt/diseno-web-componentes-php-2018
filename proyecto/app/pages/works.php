<section class="Works">
  <h2>Trabajos desde el store estático</h2>
  <?php
  //$works = APP['works'];
  /* echo '<pre>';
    var_dump($works);
  echo '</pre>'; */
  //foreach ($works as $pos => $work) {
    /* echo '<pre>';
      var_dump($work);
    echo '</pre><hr>'; */
    //foreach ($work as $key => $value) {
      /* http://php.net/manual/es/language.variables.variable.php */
      //$$key = $value;
      //require './app/components/card.php';
    //}
  //}
  ?>
  <?php
  $works = APP['works'];
  foreach ($works as $pos => $work) {
    foreach ($work as $key => $value) {
      $$key = $value;
    }
    require './app/components/card.php';
  }
?>
<h2>Trabajos desde una Base de Datos</h2>
<?php
require_once './app/store/my_works.php';
$works_db = $data;
  foreach ($works_db as $row => $work) {
    require './app/components/card_db.php';
  }
?>
</section>
