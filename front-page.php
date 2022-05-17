<?php
/**
 * Template Name: Homepage
 *
 * @package ClubNature
 */

get_header(); ?>

<!-- Heading for Latest News -->
<section class="content content-index position-relative py-2">
	<div class="container py-5">
		<div class="row">
			<div class="col-12 col-xl-10 offset-xl-1">
				<h2 class="text-uppercase fw-bold"><a class="border-bottom border-dark text-dark">The latest news</a></h2>
			</div>
		</div>
		</div>
</section>
			<!-- Displaying Posts -->
				<?php 
					
					$posts = array(
						'posts_per_page' => 3,
						'order' => 'date',
						'orderby' => 'DESC'
					);

					$myPosts = new WP_Query($posts);

					while($myPosts -> have_posts()) {
						$myPosts -> the_post(); ?>
						<div class="content content-block position-relative py-1">
							<div class="container py-5">
								<div class="row">
									<div class="col-12 col-xl-10 offset-xl-1">
										<div class="post-item">
											<div class="post-title position-relative">
												<h2 class="mt-4 mb-4 text-center"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
											</div>
											<div class="post-image h-100 position-relative">
												<img class="attachment-medium_large size-medium_large wp-post-image img-fluid" width="1200"<?php echo get_the_post_thumbnail();?>
											</div>
											<div class="post-meta mt-3 mb-3">
												<span class="post-date"><?php echo get_the_date('F d Y');?></span>
											</div>
											<div class="post-message"><p><?php the_excerpt();?></p></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php }

					wp_reset_postdata();
                ?>
			
	

<?php get_footer(); ?>