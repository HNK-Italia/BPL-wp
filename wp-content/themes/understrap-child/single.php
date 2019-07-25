<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper container-fluid" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->

			<div class="hero-minimo" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-position: center center;">
				<div class="trasparenza">
					<h1 class="text-center" style="position: absolute; left: 50%; bottom: 20%; transform:translate(-50%);">
						<?php single_post_title(); ?></h1>
				</div>
			</div>


			<main class="site-main container" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<hr class="spacer py-4 py-md-4">

					<?php echo get_the_content()?>

				<!-- Qui viene visualizzato l'autore e la data del post -->

					<h4 style="font-weight: 400;">Scritto da <b><?php echo the_author_meta('display_name') ?></b></h4><h5 style="font-weight: 400;">il <i><?php echo get_the_date() ?></i></h5>

				<!-- Qui viene visualizzato l'autore e la data del post -->

				<hr class="spacer py-4 py-md-4">

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>