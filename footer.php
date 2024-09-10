<?php
/**
*
*Footer Template
*Template:Twenty Twenty-One
*@subpaackage 
* @package WordPress
* @subpackage  Twenty_Twenty_One_Child
*
**/

?>
		<!-- Footer Section -->

    <footer class="site-footer">
				<div class="container">
					<div class="footerTop">
						<div class="row">
							<div class="col-md-3 footer-first"><a class="fottlogo" href="#bodyTop" target="_blank"><img class="footer-logo lazypreload lazyloaded" data-src="images/footer-logo.png" alt="Auto Cruitment" src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo.png"></a>
								<p>The Teen ADHD Studies will include teens 13-17 years old, interested in trying a new ADHD treatment and will be conducted at various study sites across the USA.</p>
							</div>
							<div class="col-md-3">
								<h3><span>LEGAL INFORMATION</span></h3>
								<?php
								wp_nav_menu( array( 
				'theme_location' => 'custom-menu',
				'menu_class'      => 'flex' 
			) );   
			?>

							</div>
							<div class="col-md-3">
								<h3><span>Share This Study</span></h3>
								<ul>
									<li>
										<a href="https://www.facebook.com/sharer/sharer.php?u= https://autocruitment.net/teen-ADHD/PPp/" target="_blank">  <i class="fab fa-facebook-f"></i> Facebook
										</a>
									</li>
									<li>
										<a href="mailto:?subject=Look%20at%20this%20Website&amp;body=Hi, I saw this Research Study and thought you might be interested!%0D%0A%0D%0AThe Teen ADHD Studies will include teens 13-17 years old, interested in trying a new ADHD treatment and will be conducted at various study sites across the USA.
  https://autocruitment.net/teen-ADHD/PPp/"><i class="fas fa-envelope"></i> Email </a>
									</li>
									<li>
										<a href="http://www.twitter.com/intent/tweet?url= https://autocruitment.net/teen-ADHD/PPp/&amp;text=The Teen ADHD Studies will include teens 13-17 years old, interested in trying a new ADHD treatment and will be conducted at various study sites across the USA.
" target="_blank"> <i class="fab fa-twitter"></i> Twitter </a>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<a href="https://autocruitment.com/" target="_blank"><img class="autocruitment-logo lazypreload lazyloaded" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/autocruitment-logo.svg" alt="Auto Cruitment" src="<?php echo get_stylesheet_directory_uri(); ?>/images/autocruitment-logo.svg"></a>
								<p>AutoCruitment’s targeted direct-to-patient platform makes matching patients with the right clinical research trial studies in their area secure and easy.</p>
							</div>
						</div>
					</div>
					<a id="myBtn" class="back-to-top" alt="Go to top" title="Go to top" style="display: block;"> <i class="fas fa-chevron-up"></i> </a>
					<div class="footerBottom">
						<div class="row align-items-center copyrightAutocruitment m-0">
							<div class="autollc">©<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script>
								document.write(new Date().getFullYear())
							</script> AutoCruitment LLC</div>
							<a href="https://seal.godaddy.com/verifySeal?sealID=ZzdPKtMxCLR83lXwPMivmC3h2xbLQkPp5sdUjltADiGhCiwy3Br9hxB25JzG" target="_blank"><img class="footer-logo go-secured lazypreload lazyloaded" alt="Auto Cruitment" src="<?php echo get_stylesheet_directory_uri(); ?>/images/godaddy-logo.png"></a>
							<a href="#" target="_blank"><img class="footer-logo lazypreload lazyloaded" alt="Auto Cruitment" src="<?php echo get_stylesheet_directory_uri(); ?>/images/digicert-logo.png">
								<a href="https://www.bbb.org/us/ga/atlanta/profile/clinical-trials/autocruitment-llc-0443-27959591#bbbseal" target="_blank"><img class="footer-logo lazypreload lazyloaded" alt="Auto Cruitment" src="<?php echo get_stylesheet_directory_uri(); ?>/images/bbb-logo.png">
									<div class="text-right footer-bottom-right"></a>
										<a href="https://autocruitment.com/" target="_blank">AutoCruitment</a>
										<div class="followicons">
											<a href="https://www.facebook.com/AutoCruitment/" target="_blank"><i class="fab fa-facebook-f"></i></a>
											<a href="https://twitter.com/autocruitment" target="_blank"><i class="fab fa-twitter"></i></a>
											<a href="https://www.instagram.com/autocruitment/" target="_blank"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</footer>
					<!-- Footer Section - END -->
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
					<script src="jquery/common.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js" async></script>
					<!--[if !IE]><!-->
						<script>
							if ( /*@cc_on!@*/ false) {
								document.documentElement.className = 'ie10';
							}
						</script>
						<!--<![endif]-->
							<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77503550-5"></script>
							<script>
								window.dataLayer = window.dataLayer || [];
								function gtag() {
									dataLayer.push(arguments);
								}
								gtag('js', new Date());
								gtag('config', 'UA-77503550-5');
							</script>
							<script async src='https://www.google-analytics.com/analytics.js'></script>
							<script src="https://cdn.jsdelivr.net/npm/iframe-resizer@3/js/iframeResizer.min.js"></script>
							<script src="https://autocruitment.net/iframe.js"></script>
							<script>
								window.addEventListener('DOMContentLoaded', function() {
									setupIframe('UA-77503550-2', 'embed', 'embed', 'https://trials.autocruitment.com/forms/iframe/TeenADHDStudy_t1127t1142_GWppP_FB/', {
										hitType: 'event',
										eventCategory: 'TrialSignUp',
										eventAction: 'FormSubmit',
										eventLabel: 'Success'
									}, {
										hitType: 'event',
										eventCategory: 'TrialSignUp',
										eventAction: 'FormSubmit',
										eventLabel: 'Fail'
									});
								});
							</script>
							<script type="application/ld+json">{"@context":"http://schema.org/","@type":"WebSite","name":"The Teen ADHD Clinical Research Study | AutoCruitment","alternateName":"AutoCruitment","url":" https://autocruitment.net/teen-ADHD/PPp/"}</script>
						</body>
						</html>