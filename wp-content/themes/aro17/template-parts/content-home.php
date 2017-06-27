<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aro17
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aro17' ),
						'after'  => '</div>',
					) );
				?>
		</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->