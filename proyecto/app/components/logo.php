<div class="Logo">
  <a href="<?=APP['home_url']?>">
    <?php
      if ( APP['logo_img'] !== null ) {
        echo '<img src="'. APP['logo_img'] .'" alt="'. APP['logo_text'] .'">';
      } else {
        echo APP['logo_text'];
      }
    ?>
  </a>
</div>
