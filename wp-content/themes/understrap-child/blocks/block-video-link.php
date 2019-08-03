<section class="row">
  <div class="container-fluid" style="position: relative; padding: 0; background-image: url('<?php block_field('immagine'); ?>'); background-size: cover; background-position: center top;">
    <div style="color: <?php block_field('colore'); ?>; position: relative; height: 550px; padding: 0px" class=" trasparenza">
      <iframe src="https://www.youtube.com/embed/<?php block_field('link'); ?>" width="100%" height="100%"></iframe>
      <h1 class="display-4 text-center" style="position: absolute; left: 50%; bottom: 17%; transform:translate(-50%);"><?php block_field('titolo'); ?></h1>
      <h5 class="h3 text-center" style="position: absolute; left: 50%; bottom: 2%; transform:translate(-50%);"><?php block_field('testo'); ?></h5>
    </div>
  </div>
</section>