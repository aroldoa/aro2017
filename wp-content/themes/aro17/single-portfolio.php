<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aro17
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="container-fluid">
			<div class="row-fluid">

				<div class="single-portfolio">
					<?php
					while ( have_posts() ) : the_post();	?>

						<h1 data-aos='fade-right' data-aos-duration='2000' data-aos-delay='2000'>
							<?php the_title(); ?>
						</h1>


						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="text-center" data-aos="zoom-in" data-aos-duration="1800" data-aos-delay="600" >
								<?php the_post_thumbnail('full', array('class' => 'img-responsive center-block'));?>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-8 col-md-offset-4">
								<div class="pull-right portfolio-content"  data-aos-once="true" data-aos-duration="800" data-aos="fade-up" data-aos-delay="600">
									<?php the_content();?>
								</div>
							</div>
						</div>

					<div class="row">
						<div class="col-md-6 col-md-offset-0">
							<div data-aos="fade-up-right"  data-aos-once="true" data-aos-duration="1200" data-aos-delay="800">
								<img class="img-reponsive" src="<?php the_field('second-image'); ?>" alt="" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="text-center" data-aos="fade-up"  data-aos-once="true" data-aos-delay="800" data-aos-duration="1200">
								<img class="img-reponsive center-block" src="<?php the_field('third-image'); ?>" alt="" />
							</div>
						</div>
					</div>

					<div class="space"></div>

					<div class="row">
						<div class="col-md-4 col-md-offset-1">
							<div class="pull-left" data-aos="fade-right"  data-aos-once="true" data-aos-delay="800" data-aos-duration="1200">
								<img class="img-reponsive center-block" src="<?php the_field('fifth-image'); ?>" alt="" />
							</div>
						</div>


					<div class="col-md-7">
						<div class="pull-right" data-aos="fade"  data-aos-once="true" data-aos-delay="1200" data-aos-duration="1400">
							<img class="img-reponsive" src="<?php the_field('fourth-image'); ?>" alt="" />
						</div>
					</div>

					</div>

					<div class="space"></div>

					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div data-aos="fade-up-right"  data-aos-once="true" data-aos-delay="800" data-aos-duration="1200">
								<img class="img-reponsive" src="<?php the_field('sixth-image'); ?>" alt="" />
							</div>
						</div>
					</div>

					<div class="space"></div>

					<div class="row">
						<div class="col-md-6">
							<div data-aos="fade-up"  data-aos-once="true" data-aos-delay="1000" data-aos-duration="1200">
								<img class="img-reponsive" src="<?php the_field('seven-image'); ?>" alt="" />
							</div>
						</div>

						<div class="col-md-6">
							<div data-aos="fade-up"  data-aos-once="true" data-aos-delay="800" data-aos-duration="1200">
								<img class="img-reponsive" src="<?php the_field('eight-image'); ?>" alt="" />
							</div>
						</div>
					</div>

					<div class="space"></div>

					<div class="row">
						<div class="col-md-9 col-md-offset-3">
							<div class="text-center" data-aos="fade-left"  data-aos-once="true" data-aos-delay="800" data-aos-duration="1200">
								<img class="img-reponsive center-block" src="<?php the_field('nine-image'); ?>" alt="" />
							</div>
						</div>
					</div>


						<?php
					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>

<?php get_template_part( 'template-parts/part', 'portfolioNext' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
