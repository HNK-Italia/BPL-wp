<section class="row">
  <div class="container-fluid" style="position: relative; padding: 0; background-image: url('<?php block_field('immagine'); ?>'); background-size: cover; background-position: center top;">
    <div style="color: <?php block_field('colore'); ?>; position: relative; height: 550px;" class=" trasparenza">
      <a href="<?php block_field('link'); ?>" rel="noopener noreferrer" target="_blank"><img class="icona-play" src="<?php echo get_stylesheet_directory_uri()?>/img/play.svg"></a>
      <div style="position: absolute; left: 50%; bottom: 17% ; transform:translate(-50%);">
        <h1 class="display-4 text-center"><?php block_field('titolo'); ?></h1>
        <h5 class="h3 text-center"><?php block_field('testo'); ?></h5>
      </div>
    </div>
  </div>
</section>