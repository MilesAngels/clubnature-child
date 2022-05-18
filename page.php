<?php
/**
 * The template for displaying all pages
 *
 * @package ClubNature
 */

get_header(); ?>

<section id="content" class="content content-page py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<?php if (is_page('contact-us')) :?>
					<section class="mb-4">

					<!--Section heading-->
					<h2 class="h1-responsive font-weight-bold text-center my-4">Contact Us</h2>
					<!--Section description-->
					<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
						a matter of hours to help you.</p>

					<div class="row">

						<!--Grid column-->
						<div class="col-md-9 mb-md-0 mb-5">
							<form id="contact-form" name="contact-form" action="mail.php" method="POST">

								<!--Grid row-->
								<div class="row">

									<!--Grid column-->
									<div class="col-md-6">
										<div class="md-form mb-0">
											<input type="text" id="name" name="name" class="form-control">
											<label for="name" class="">Your name</label>
										</div>
									</div>
									<!--Grid column-->

									<!--Grid column-->
									<div class="col-md-6">
										<div class="md-form mb-0">
											<input type="text" id="email" name="email" class="form-control">
											<label for="email" class="">Your email</label>
										</div>
									</div>
									<!--Grid column-->

								</div>
								<!--Grid row-->

								<!--Grid row-->
								<div class="row">
									<div class="col-md-12">
										<div class="md-form mb-0">
											<input type="text" id="subject" name="subject" class="form-control">
											<label for="subject" class="">Subject</label>
										</div>
									</div>
								</div>
								<!--Grid row-->

								<!--Grid row-->
								<div class="row">

									<!--Grid column-->
									<div class="col-md-12">

										<div class="md-form">
											<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
											<label for="message">Your message</label>
										</div>

									</div>
								</div>
								<!--Grid row-->

							</form>

							<div class="text-center text-md-left">
								<a class="btn bg-color text-white" onclick="document.getElementById('contact-form').submit();">Send</a>
							</div>
							<div class="status"></div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-3 text-center">
							<ul class="list-unstyled mb-0">
								<li><i class="fas fa-map-marker-alt fa-2x"></i>
									<p>Unknown</p>
								</li>

								<li><i class="fas fa-phone mt-4 fa-2x"></i>
									<p>+ 01 234 567 89</p>
								</li>

								<li><i class="fas fa-envelope mt-4 fa-2x"></i>
									<p>somenonsense@something.com</p>
								</li>
							</ul>
						</div>
						<!--Grid column-->

					</div>

				</section>
				<!--Section: Contact v.2-->
				<?php endif; ?>
				<div class="page-message">
					<?php the_content(); ?>
					<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-link">' . __( 'Pages:', 'clubnature' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>
				<div class="page-edit clearfix">
					<?php edit_post_link( __( 'Edit', 'clubnature' ), '<span class="edit-link">', '</span>' ); ?>
				</div>
				<?php if ( comments_open() || '0' !== get_comments_number() ) : ?>
					<?php comments_template( '', true ); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
