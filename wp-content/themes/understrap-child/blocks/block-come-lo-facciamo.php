<section>
  <hr class="spacer py-1 py-md-4" />
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="title"><?php block_field('titolo'); ?></h2>
    </div>

<!-- Inizio Cards -->

    <div class="row mt-5 mb-5">
      <div class="col-mx-12 col-md-6 col-lg-3">
      <div class="card text-center bpl-card indexcards">
        <div class="card-img-top img-background-little" style="background-image: url('<?php block_field('immagine-1'); ?>'); " alt="Card image cap"></div>
        <div class="card-body position-relative">
          <h5 class="card-title"><?php block_field('titolo1'); ?></h5>
          <p class="card-text"><?php block_field('primo-testo-1'); ?></p>
          <a href="<?php block_field('link-1'); ?>" class="btn btn-danger position-absolute bottonecard"><?php block_field('bottone-1'); ?></a>
        </div>
      </div>
    </div>

      <!-- Fine di una Cards e inizio di un'altra -->

      <div class="col-mx-12 col-md-6 col-lg-3">
      <div class="card text-center bpl-card indexcards">
        <div class="card-img-top img-background-little" style="background-image: url('<?php block_field('immagine-2'); ?>'); background-position: 50% 50%;" alt="Card image cap"></div>
        <div class="card-body position-relative">
          <h5 class="card-title"><?php block_field('titolo2'); ?></h5>
          <p class="card-text"><?php block_field('primo-testo-2'); ?></p>
          <a href="<?php block_field('link-2'); ?>" class="btn btn-danger position-absolute bottonecard"><?php block_field('bottone-2'); ?></a>
        </div>
      </div>
    </div>

      <!-- Fine di una Cards e inizio di un'altra -->

      <div class="col-mx-12 col-md-6 col-lg-3">
      <div class="card text-center bpl-card indexcards">
        <div class="card-img-top img-background-little" style="background-image: url('<?php block_field('immagine-3'); ?>');" alt="Card image cap"></div>
        <div class="card-body position-relative">
          <h5 class="card-title"><?php block_field('titolo3'); ?></h5>
          <p class="card-text"><?php block_field('primo-testo-3'); ?></p>
          <a href="<?php block_field('link-2'); ?>" class="btn btn-danger position-absolute bottonecard"><?php block_field('bottone-2'); ?></a>
        </div>
      </div>
    </div>

      <!-- Fine di una Cards e inizio di un'altra -->

      <div class="col-mx-12 col-md-6 col-lg-3">
      <div class="card text-center bpl-card indexcards">
        <div class="card-img-top img-background-little" style="background-image: url('<?php block_field('immagine-4'); ?>');" alt="Card image cap"></div>
        <div class="card-body position-relative">
          <h5 class="card-title"><?php block_field('titolo4'); ?></h5>
          <p class="card-text"><?php block_field('primo-testo-4'); ?></p>
          <a href="<?php block_field('link-4'); ?>" class="btn btn-danger position-absolute bottonecard"><?php block_field('bottone-4'); ?></a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <hr class="spacer py-1 py-md-4" />
</section>
