<?php

	$next_post = get_next_post();
	$nextThumbnail = get_the_post_thumbnail_url( $next_post->ID );

	if (!empty( $next_post )): ?>

			<div id="NextPortfolioItem" style="background-image:url(<?php echo $nextThumbnail ?>); background-repeat:no-repeat; background-size:cover; background-position:center;">
				<a href="<?php echo get_permalink( $next_post->ID ); ?>">
					<div class="blackhover"></div>
								<div class="next-link">
									<span>View Next Project</span>
										<a href="<?php echo get_permalink( $next_post->ID ); ?>">
											<img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/inc/img/right-arrow.svg" width="18px" />
											<h4><?php echo $next_post->post_title; ?></h4>
										</a>
								</div>
				 </a>

</div>
<?php endif; ?>
