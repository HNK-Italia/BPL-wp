<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

 <!-- Inizio del Footer -->

<section class="infondo">
      <hr class="spacer py-4 py-md-4" />
      <div class="container">
      <div class="row">
        <div class="col-mx-12 col-md-6">

 <!-- Il logo dinamico di BPL -->

		<?php the_custom_logo(); ?>

 <!-- Link dei social dinamici -->

 <!-- Instagram -->

        </div>
        <div class="col-6">
          <?php if(get_theme_mod('showcase_checkbox_instagram', 'Non funziona') == 1) {?>
            <a href="<?php echo get_theme_mod('showcase_link_instagram', 'https://www.instagram.com/bigpictureitalia/'); ?>">
            <img style="margin-right: 3px;" src="<?php echo get_stylesheet_directory_uri()?>/img/instagram.svg" height="45px" width="45px" /></a>
          <?php
          }
          ?>

 <!-- Facebook -->

          <?php if(get_theme_mod('showcase_checkbox_facebook', 'Non funziona') == 1) {?>
          <a href="<?php echo get_theme_mod('showcase_link_facebook', 'https://www.facebook.com/bigpicturelearningitalia/'); ?>"><img style="margin-left: 3px;
          margin-right: 3px;" src="<?php echo get_stylesheet_directory_uri()?>/img/facebook.svg" height="45px" width="45px" /></a>
          <?php
          }
          ?>

        </div>
      </div>
      <hr class="spacer py-1 py-md-1" />
      <div class="row">
        <div class="col-mx-12 col-md-6">
          <address>
            <h6>SEDE LEGALE</h6>
            <p><?php echo get_theme_mod('showcase_via_legale', 'Via G.B. Serralunga, 27'); ?><br />
            <?php echo get_theme_mod('showcase_citta_legale', '13900 - Biella (Italia)'); ?></p>
          </address>
        </div>
        <div class="col-mx-12 col-md-6">
          <address>
            <h6>SEDE OPERATIVA</h6>
            <p><?php echo get_theme_mod('showcase_co_operativa', 'c/o SELLALAB'); ?><br />
            <?php echo get_theme_mod('showcase_via_operativa', 'Via Corradino Sella, 10'); ?><br />
            <?php echo get_theme_mod('showcase_citta_operativa', '13900 - Biella (Italia)'); ?></p>
          </address>
        </div>
      </div>
      <div class="row">
        <div class="col-mx-12 col-md-6">
          <p>© <?php echo date("Y"); ?> <?php echo get_theme_mod('showcase_diritti', 'All rights reserved Big Picture Learning Italia | P.I. 02579780020'); ?></p>
        </div>
        <div class="col-mx-12 col-md-6">
          <a class="btn btn-dark" href="<?php echo get_theme_mod('showcase_Privacy_link', 'https://www.iubenda.com/privacy-policy/95347031'); ?>">
          <?php echo get_theme_mod('showcase_Privacy_text', 'Privacy Policy'); ?>
          </a>
        </div>
      </div>
      </div>
      <hr class="spacer py-2 py-md-4" />
    </section>

<div class="tornasu">
  <a class="btn btn-light" href="#" role="button">
    <i class="material-icons">arrow_upward</i>
    <?php echo get_theme_mod('showcase_torna', 'Torna su'); ?>
  </a>
</div>

 <!-- Fine del Footer -->

<?php wp_footer(); ?>

</body>

</html>

