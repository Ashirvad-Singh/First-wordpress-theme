<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

	<div id="body_section" class="body_section">
		<!-- Banner Section -->
		<section id="banner" class="container-fluid px-0 bannercontent">

			<div class="banner-text">
		<h1><?php the_field('banner_heading'); ?></h1>

			
			
				<h2>
<?php the_field('banner_sub_heading');?>
				</h2>
</h2>
				<div class="banner-content">

					<?php the_field('banner_content_list')?>
				</div>
				<div class="banner-btn"><a href="#signup" class="qualifybtn btnscroll"><?php the_field('banner_button')?></a></div>
			</div>
		</section>
		<!-- Banner Section - END -->
		<div id="aboutStudy" class="container-fluid px-0">
			<div class="container">
				<div class="section-head text-center"><h2 class="mainheading">How Does It <span>Work?</span> <?php the_field('step_heading') ?></h2></div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="img-outer">
							<div class="img-wrap">
							<img class="lazypreload lazyloaded" alt="Auto Cruitment" src="<?php the_field('step1_image') ?>">

								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/up-arrow.png" class="uparrow-position">
							</div>
							<p><?php the_field('step_1_content') ?></p>								
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="img-outer">
							<div class="img-wrap">
								<img class="lazypreload lazyloaded" alt="Auto Cruitment" src="<?php echo get_stylesheet_directory_uri(); ?>/images/step-2.png">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-arrow.png" class="downarrow-position">
							</div>
							<p>Our sign up form will ask some questions about your health, this allows us to match you to a Clinical Trial.</p>								
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="img-outer">
							<div class="img-wrap">
								<img class="lazypreload lazyloaded" alt="Auto Cruitment" src="<?php echo get_stylesheet_directory_uri(); ?>/images/step-3.png">
								<img src="" class="uparrow-position">
							</div>
							<p>We will connect you with a Clinical Trial in your area.</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="img-outer">
							<div class="img-wrap">
								<img class="lazypreload lazyloaded" alt="Auto Cruitment" src="<?php echo get_stylesheet_directory_uri(); ?>/images/step-4.png">
							</div>
							<p>Become one of 100,000 Patients taking part in an AutoCruitment Verified Clinical Trial!</p>
						</div>
					</div>


				</div>
			</div>
		</div>

		<!-- FAQ Section -->
		<section id="next-step" class="">
			<div class="container">
				<div class="get-row">
					<div class="left-cont">
						<p>Take the next step to see if you qualify for local
							<span>Teen ADHD Studies.</span></p>
							<h3>Space is limited!</h3>
						</div>
						<div class="right-cont">
							<div class="qualify-red-btn"> <a href="#signup" class="qualifybtn btnscroll">Get Started – Click Here</a></div>
						</div>
					</div>
				</div>
			</section>
			<!-- FAQ Section - END -->


		

			<section id="last-step" class="">
				<div class="container">
					<div class="get-row">
						<div class="left-cont">
							<p>Thank you for considering participating in a
								<span>Clinical Trial</span></p>
								<h3>...and helping to advance medicine.</h3>
							</div>
						</div>
					</div>
				</section>
			
</div>

<?php get_footer();
?>
