<section class="container text-center">

  <div class="titoloinsegnanti">
    <h2 style="color: #1CA554;"><?php block_field('titolo'); ?></h2>
  </div>

  <!-- Inizio delle cards Insegnanti -->

  <div class="row boxinsegnanti">

  <!-- Parte dell IF -->

  <?php if (block_value('foto1')) { ?>

  <!-- Parte dell IF -->

    <div class="col-mx-12 col-md-6 col-lg-3 tastoinsegnanti">
      <a href="<?php block_field('link1'); ?>"><img src="<?php block_field('foto1'); ?>" class="immagineinsegnanti" />
      <h5 style="color: #1CA554; margin-botom: 15px;"><?php block_field('prof1'); ?></h4>
      <h6><?php block_field('materia1'); ?></h6></a>
    </div>

<?php
	}
?>

  <!-- Inizio di una card e fine di un'altra -->

  <!-- Parte dell IF -->

  <?php if (block_value('foto2')) { ?>

  <!-- Parte dell IF -->

    <div class="col-mx-12 col-md-6 col-lg-3 tastoinsegnanti">
      <a href="<?php block_field('link2'); ?>"><img src="<?php block_field('foto2'); ?>" class="immagineinsegnanti" />
      <h5 style="color: #1CA554; margin-bottom: 15px;"><?php block_field('prof2'); ?></h4>
      <h6><?php block_field('materia2'); ?></h6></a>
    </div>

<?php
	}
?>

  <!-- Inizio di una card e fine di un'altra -->

  <!-- Parte dell IF -->

  <?php if (block_value('foto3')) { ?>

  <!-- Parte dell IF -->

    <div class="col-mx-12 col-md-6 col-lg-3 tastoinsegnanti">
      <a href="<?php block_field('link3'); ?>"><img src="<?php block_field('foto3'); ?>" class="immagineinsegnanti" />
      <h5 style="color: #1CA554; margin-botom: 15px;"><?php block_field('prof3'); ?></h4>
      <h6><?php block_field('materia3'); ?></h6></a>
    </div>

<?php
	}
?>

<!-- Inizio di una card e fine di un'altra -->

  <!-- Parte dell IF -->

  <?php if (block_value('foto4')) { ?>

  <!-- Parte dell IF -->

    <div class="col-mx-12 col-md-6 col-lg-3 tastoinsegnanti">
      <a href="<?php block_field('link4'); ?>"><img src="<?php block_field('foto4'); ?>" class="immagineinsegnanti" />
      <h5 style="color: #1CA554; margin-botom: 15px;"><?php block_field('prof4'); ?></h4>
      <h6><?php block_field('materia4'); ?></h6></a>
    </div>


<?php
	}
?>

<!-- Fine delle cards Insegnanti -->

  </div>
</section>
