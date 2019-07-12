<section class="container mb-5 text-center">

  <div style="padding: 20px;">
    <h2 style="color: #1CA554;"><?php block_field('titolo'); ?></h2>
  </div>

  <!-- Inizio delle cards Insegnanti -->

  <div class="row">

    <div class="col-mx-12 col-md-6 col-lg-3">
      <img src="<?php block_field('foto1'); ?>" style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 20px;" />
      <h5 style="color: #1CA554; margin-botom: 15px;"><?php block_field('prof1'); ?></h4>
      <h6><?php block_field('materia1'); ?></h6>
    </div>

  <!-- Inizio di una card e fine di un'altra -->

    <div class="col-mx-12 col-md-6 col-lg-3">
      <img src="<?php block_field('foto2'); ?>" style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 20px;" />
      <h5 style="color: #1CA554; margin-bottom: 15px;"><?php block_field('prof2'); ?></h4>
      <h6><?php block_field('materia2'); ?></h6>
    </div>

  <!-- Inizio di una card e fine di un'altra -->

    <div class="col-mx-12 col-md-6 col-lg-3">
      <img src="<?php block_field('foto3'); ?>" style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 20px;" />
      <h5 style="color: #1CA554; margin-botom: 15px;"><?php block_field('prof3'); ?></h4>
      <h6><?php block_field('materia3'); ?></h6>
    </div>

<!-- Inizio di una card e fine di un'altra -->

    <div class="col-mx-12 col-md-6 col-lg-3">
      <img src="<?php block_field('foto4'); ?>" style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 20px;" />
      <h5 style="color: #1CA554; margin-botom: 15px;"><?php block_field('prof4'); ?></h4>
      <h6><?php block_field('materia4'); ?></h6>
    </div>


<!-- Fine delle cards Insegnanti -->

  </div>
</section>
