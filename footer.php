<?php
/**
 * The template for displaying the footer
 *
 * @package ClubNature
 */

?>

<?php if ( is_active_sidebar( 'contact_sidebar' ) ) : ?>
<section class="sidebar-contact position-relative py-5 d-none">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
				<?php dynamic_sidebar( 'contact_sidebar' ); ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<footer class="py-4 border-top">
    <div class="container">
        <nav class="row">
            <div class="col-12 text-center">
                <h5 class="site-title mb-4">The Mycelium Network</h5>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <ul class="nav navbar-nav larger-links">
                    <li><a href="<?php echo site_url('');?>">Home</a></li>
                    <li><a href="<?php echo site_url('/about-us');?>">About Us</a></li>
                    <li><a href="<?php echo site_url('/contact-us');?>">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <ul class="nav navbar-nav larger-links">
                    <li><a href="<?php echo site_url('');?>">Home</a></li>
                    <li><a href="<?php echo site_url('/about-us');?>">About Us</a></li>
                    <li><a href="<?php echo site_url('/contact-us');?>">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <ul class="nav navbar-nav larger-links">
                    <li><a href="<?php echo site_url('');?>">Home</a></li>
                    <li><a href="<?php echo site_url('/about-us');?>">About Us</a></li>
                    <li><a href="<?php echo site_url('/contact-us');?>">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6  mb-2 text-start border-start">
                <ul class="nav navbar-nav larger-links">
                    <li><a href="<?php echo esc_url( get_theme_mod( 'clubnature_facebooklink' ) ); ?>" class="py-2" target="_blank"><i class="fab fa-facebook-f"></i>&emsp;themyceliumnetwork</a></li>
                    <li><a href="<?php echo esc_url( get_theme_mod( 'clubnature_twitterlink' ) ); ?>" class="py-2" target="_blank"><i class="fab fa-twitter"></i>&emsp;@themyceliumnetwork</a></li>
                    <li><a href="<?php echo esc_url( get_theme_mod( 'clubnature_instagramlink' ) ); ?>" class="py-2" target="_blank"><i class="fab fa-instagram"></i>&emsp;@themyceliumnetwork</a></li>
                </ul>
            </div>
        </nav>
    </div>
</footer>

<div class="back-to-top d-none"></div>

<?php wp_footer(); ?>

</body>
</html>