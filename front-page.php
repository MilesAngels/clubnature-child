<?php
/**
 * Template Name: Homepage
 *
 * @package ClubNature
 */

get_header(); ?>

<section id="content" class="content content-index position-relative py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col-12 col-xl-10 offset-xl-1">
				<h1 class="position-relative mb-4 text-uppercase fw-bold">The latest news</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-xl-10 offset-xl-1">

				<?php 
					$the_date = get_the_date('F d Y');
					$posts = array(
						'posts_per_page' => 3,
						'order' => 'date'

					);

					$myPosts = new WP_Query($posts);

					while($myPosts -> have_posts()) {
						$myPosts -> the_post(); ?>
						<div class="post-item">
							<div class="post-title position-relative">
								<h2 class="mb-4"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="post-image h-100 position-relative">
								<img class="attachment-medium_large size-medium_large wp-post-image img-fluid" width="768" height="512" src="<?php echo get_the_post_thumbnail();?>">
							</div>
							<div class="post-meta mb-3">
								<span class="post-date"><?php echo $the_date;?></span>
							</div>
							<div class="post-message"><p><?php the_excerpt();?></p></div>
						</div>
						
					<?php }

					wp_reset_postdata();
                ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>