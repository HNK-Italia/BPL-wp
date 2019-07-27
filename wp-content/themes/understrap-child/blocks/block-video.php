<section class="row">
  <div class="container-fluid" style="position: relative; padding: 0; background: #000000">
    <div style="color: <?php block_field('colore'); ?>; position: relative; height: 525px;">
      <a href="https://www.youtube.com/watch?v=<?php block_field('link'); ?>" rel="noopener noreferrer" target="_blank"><img class="icona-play" src="<?php echo get_stylesheet_directory_uri()?>/img/play.svg"></a>
      <h1 class="text-center" style="position: absolute; left: 50%; bottom: 5%; transform:translate(-50%);"><?php block_field('titolo'); ?></h1>
      <h5 class="text-center" style="position: absolute; left: 50%; bottom: 5%; transform:translate(-50%);"><?php block_field('testo'); ?></h5>
    </div>
  <hr class="spacer py-4 py-md-4">
  </div>
</section>