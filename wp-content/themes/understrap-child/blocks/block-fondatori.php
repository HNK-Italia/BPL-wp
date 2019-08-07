<section class="container text-center">
  <hr class="spacer py-1 py-md-4" />
      <h2 style="color: #1CA554;"><?php block_field('titolo'); ?></h2>
  <div class="row">
    <div class="col-mx-12 col-md-5 fondatori-box ventipx">
      <img src="<?php block_field('immagine1'); ?>" class="rotondo" style="width: 300px; height: 300px;">
          <hr class="spacer py-2 py-md-2" />
      <h3 class="verde"><?php block_field('fondatore1'); ?></h3>
      <p><?php block_field('descrizione1') ?>
    </div>
    <div class="col-mx-12 col-md-2"><hr class="spacer py-3 py-md-0" /></div>
    <div class="col-mx-12 col-md-5 fondatori-box ventipx">
      <img src="<?php block_field('immagine2'); ?>" class="rotondo" style="width: 300px; height: 300px;">
          <hr class="spacer py-2 py-md-2" />
      <h3 class="verde"><?php block_field('fondatore2'); ?></h3>
      <p><?php block_field('descrizione2') ?>
    </div>
  </div>
  <hr class="spacer py-1 py-md-4" />
</section>