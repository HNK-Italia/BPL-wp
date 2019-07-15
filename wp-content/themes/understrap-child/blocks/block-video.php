<section class="container" style="position: relative">
<div class="">
  <div style="color: <?php block_field('colore'); ?>; position: relative; height: 100%;">
    <h1 class="text-center" style="position: absolute; left: 50%; top: 60%; transform:translate(-50%);"><?php block_field('titolo'); ?></h1>
    <h5 class="text-center" style="position: absolute; left: 50%; top: 80%; transform:translate(-50%);"><?php block_field('testo'); ?></h5>
    <iframe width="100%" height="550px" src="https://www.youtube.com/embed/<?php block_field('link'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
  </div>
</div>
</section>

 <!-- Inizio zona TEST -->

<section class="container" style="position: relative">
  <div style="color: <?php block_field('colore'); ?>; position: relative; height: 100%;">
    <h1 class="text-center" style="position: absolute; left: 50%; top: 60%; transform:translate(-50%);"><?php block_field('titolo'); ?></h1>
    <h5 class="text-center" style="position: absolute; left: 50%; top: 80%; transform:translate(-50%);"><?php block_field('testo'); ?></h5>
    <a href="<?php block_field('link'); ?>"><img class="icona-genitore" src="<?php echo get_stylesheet_directory_uri()?>/img/play.svg" style="position: absolute; left: 50%; top: 30%; transform:translate(-50%); max-width: 128px; height: auto;"></a>
    <img style="z-index: -1;" src="<?php block_field('immagine'); ?>">
 </div>
</section>