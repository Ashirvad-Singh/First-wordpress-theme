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
		<section id="banner-content" class="container-fluid px-0 bannercontent" style="background-image:url('<?php the_field('banner_background')?>');">

    <div class="col-6 banner-text">
        <h1><?php the_field('banner_heading'); ?></h1>
        <h2><?php the_field('banner_sub_heading'); ?></h2>
        <div class="banner-content">
            <?php the_field('banner_content_list'); ?>
        </div>
        <div class="banner-btn">
            <a href="#signup" class="qualifybtn btnscroll"><?php the_field('banner_button'); ?></a>
        </div>
    </div>
</section>



		<!-- Banner Section - END -->
		<div id="aboutStudy" class="container-fluid px-0">
			<div class="container">
				<div class="section-head text-center"><h2 class="mainheading"> <?php the_field('step_heading') ?></h2></div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="img-outer">
							<div class="img-wrap">
							<img class="lazypreload lazyloaded" alt="Auto Cruitment" src="<?php the_field('step1_image') ?>">

								<img src="<?php the_field('first_arrow') ?>" class="uparrow-position">
							</div>
							<p><?php the_field('step_1_content') ?></p>								
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="img-outer">
							<div class="img-wrap">
								<img class="lazypreload lazyloaded" alt="Auto Cruitment" src="<?php the_field('step2_image') ?>">
								<img src="<?php the_field("second_arrow")?>" class="downarrow-position">
							</div>
							<p><?php the_field('step2_content') ?></p>								
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="img-outer">
							<div class="img-wrap">
								<img class="lazypreload lazyloaded" alt="Auto Cruitment" src="<?php the_field('step3_image') ?>">
								
							</div>
							<p><?php the_field('step3_content') ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="img-outer">
							<div class="img-wrap">
								<img class="lazypreload lazyloaded" alt="Auto Cruitment" src="<?php the_field('step4_image') ?>">
							</div>
							<p><?php the_field('step4_content') ?></p>
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
						<p><?php the_field("faq_heading")?></p>
						
							<h3><?php the_field("faq_subheading")?></h3>
						</div>
						<div class="right-cont">
							<div class="qualify-red-btn"> <a href="#signup" class="qualifybtn btnscroll"><?php the_field("faq_button_text")?></a></div>
						</div>
					</div>
				</div>
			</section>
			<!-- FAQ Section - END -->


		

						
			
</div>

<?php get_footer();
?>
