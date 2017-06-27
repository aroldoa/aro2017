<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aro17
 */
?>

<div id="">

<?php
// the query
$the_query = new WP_Query( array( 'post_type' => 'portfolio' ) ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<div class="container-fluid">
<div class="row-fluid">
<div class="col-md-10 col-md-offset-1">

		<div id="portfolioItem">

			<div id="portfolioTitle">
				<h1><?php the_title(); ?></h1>
			</div> <!-- Portfolio Title -->

			<div id="portfolioTitleTwo">
				<h2><?php the_field('second-title'); ?><h2>
			</div>

			<div id="portfolioImg">

				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			 		<?php the_post_thumbnail(); ?>
	 			</a>

			</div><!-- Featured Image -->

			<div id="portfolioImgTwo">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<img class="img-reponsive" src="<?php the_field('second-image'); ?>" alt="" />
					</a>
			</div>

		</div><!-- Portfolio Item -->

	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>
	</div><!-- .row -->
</div><!-- .container -->
