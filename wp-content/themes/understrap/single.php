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

<div class="wrapper container" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->

			<div class="hero-minimo" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
				<div class="trasparenza">
					<h1 class="text-center" style="position: absolute; left: 50%; top: 60%; transform:translate(-50%);">
						<?php single_post_title() ?></h1>
				</div>
			</div>

			<main class="site-main" id="main">

				<?php the_content() ?>
				<!-- Ciao belli Autore -->
				<p>Ciao</p>
				<?php get_the_author_meta( 'display_name', $author_id ); ?>
				<p>Ciao</p>
				<!-- Ciao belli Autore -->
				<?php while ( have_posts() ) : the_post(); ?>
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