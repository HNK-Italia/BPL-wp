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

 <!-- Il logo dinamico di BPL -->

        </div>
        <div class="col-6">
          <a href="http://instagram.com/"><img style="margin-right: 3px;" src="instagram_white.svg" height="45px" width="45px" /></a>
          <a href="http://facebook.com/"><img style="margin-left: 3px; margin-right: 3px;" src="facebook_white.svg" height="45px" width="45px" /></a>
        </div>
      </div>
      <hr class="spacer py-1 py-md-1" />
      <div class="row">
        <div class="col-mx-12 col-md-6">
          <address>
            <h6>SEDE LEGALE</h6>
            <p>Via G.B. Serralunga, 27<br  />
            13900 - Biella (Italia)</p>
          </address>
        </div>
        <div class="col-mx-12 col-md-6">
          <address>
            <h6>SEDE OPERATIVA</h6>
            <p>c/o SELLALAB<br />
            Via Corradino Sella, 10<br />
            13900 - Biella (Italia)</p>
          </address>
        </div>
      </div>
      <div class="row">
        <div class="col-mx-12 col-md-6">
          <p>© 2019 All rights reserved Big Picture Learning Italia | P.I. 02579780020 </p>
        </div>
        <div class="col-mx-12 col-md-6">
          <a type="button" class="btn btn-dark" href="faq.php">
            Privacy Policy
          </a>
        </div>
      </div>
      </div>
      <hr class="spacer py-2 py-md-4" />
    </section>

 <!-- Fine del Footer -->

<?php wp_footer(); ?>

</body>

</html>

