<section class="infondo">
  <hr class="spacer py-4 py-md-4" />
    <div class="container">
      <div class="row">
        <div class="col-mx-12 col-md-6">
          <img src="<?php block_field('logo'); ?>" width="75" height="75" style="margin-bottom: 10px" />
        </div>
      <div class="col-6">
        <a href="<?php block_field('instagramm'); ?>"><img style="margin-right: 3px;" src="<?php echo get_stylesheet_directory_uri()?>/img/instagram.svg" height="45px" width="45px" /></a>
        <a href="<?php block_field('facebook'); ?>"><img style="margin-left: 3px; margin-right: 3px;" src="<?php echo get_stylesheet_directory_uri()?>/img/facebook.svg" height="45px" width="45px" /></a>
      </div>
    </div>
    <hr class="spacer py-1 py-md-1" />
      <div class="row">
        <div class="col-mx-12 col-md-6">
          <address>
            <h6>SEDE LEGALE</h6>
            <p><?php block_field('sede-legale-via'); ?><br  />
            <?php block_field('sede-legale-citta'); ?></p>
          </address>
        </div>
        <div class="col-mx-12 col-md-6">
          <address>
            <h6>SEDE OPERATIVA</h6>
            <p><?php block_field('cooperazione'); ?><br />
            <?php block_field('sede-operativa-via'); ?><br />
            <?php block_field('sede-operativa-citta'); ?></p>
          </address>
        </div>
      </div>
      <div class="row">
        <div class="col-mx-12 col-md-6">
          <p><?php block_field('tutti-i-diritti-riservati'); ?></p>
        </div>
        <div class="col-mx-12 col-md-6">
          <a type="button" class="btn btn-dark" href="<?php block_field('privacy-policy'); ?>">
            <?php block_field('tasto-privacy-policy'); ?>
          </a>
        </div>
      </div>
    </div>
    <hr class="spacer py-2 py-md-4" />
  </section>
