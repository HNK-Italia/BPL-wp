<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<hr class="spacer py-4 py-md-4">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php if ( 'post' == get_post_type() ) : ?>

		<div class="entry-meta">
		</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<hr class="spacer py-1 py-md-3">

	<div class="row">
		<!-- Inizio row -->

		<?php if (get_the_post_thumbnail()) { ?>

		<div class="col-md-5">

			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		</div>

<?php
	}
?>

		<div class="entry-content col-md-7">
			
		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>
			<?php the_excerpt(); ?>

			<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

			<footer class="entry-footer">


			</footer><!-- .entry-footer -->

		</div><!-- .entry-content -->

		<hr class="spacer py-4 py-md-4">

</article><!-- #post-## -->