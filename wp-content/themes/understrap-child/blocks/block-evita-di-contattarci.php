<section class="row backgroundgradient" style="position: relative">
<img class="icona-evita-divieto" src="<?php echo get_stylesheet_directory_uri()?>/img/divieto.svg" style="opacity: 0.25; position: absolute; right: 20%; top: 45%; max-width: 128px; height: auto; color: rgba(255,255,255,0.2);">
<img class="icona-evita-esclamativo" src="<?php echo get_stylesheet_directory_uri()?>/img/punto esclamativo.svg" style="opacity: 0.25; position: absolute; left: 20%; top: 15%; max-width: 128px; height: auto;  transform: rotate(5deg);">
    <section class="container text-center">
      <hr class="spacer py-1 py-md-4" />
        <h2><?php block_field('evita-titolo'); ?></h2>
        <div class="row">
          <div class="col-md-6">
            <i class="material-icons" style="color:#ffffff">close</i>
            <h4 style="padding-bottom: 25px"><?php block_field('cerchi-un-diplomificio'); ?></h4>
            <h6><?php block_field('cerchi-un-diplomificio-testo-1'); ?></h6>
            <h6><?php block_field('cerchi-un-diplomificio-testo-2'); ?></h6>
          </div>
          <div class="col-md-6">
            <i class="material-icons" style="color:#ffffff">close</i>
            <h4 style="padding-bottom: 25px"><?php block_field('cerchi-lavoro'); ?></h4>
            <h6><?php block_field('cerchi-lavoro-testo-1'); ?></h6>
            <h6><?php block_field('cerchi-lavoro-testo-2'); ?></h6>
            <h6><?php block_field('cerchi-lavoro-testo-3'); ?></h6>
            <h6><?php block_field('cerchi-lavoro-testo-4'); ?></h6>
          </div>
        </div>
      <hr class="spacer py-1 py-md-4" />
    </section>
  </section>
