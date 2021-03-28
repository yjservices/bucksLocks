<?php
/*
* Template Name: AutomotiveLocksmithInNewtown-page
*/
function metaDescription() {
    ?>
       <meta name="keywords" content="Locksmith, Automotive Locksmith in Newtown, Newtown-locksmith PA,Vehicle lockouts Newtown PA, car Lockout in newtown pa, car locksmith-in-newtown, replacement car keys, make-car-key, get new car keys, program car key service, duplicate car keys, transponder key, cut car keys, auto Locksmith, car key replacement service in newtown pa, lost car keys, locksmith that makes car keys, 24 hours car lock out, pop a lock, unlock car door, cheap car keys">
        <meta name="description" content="Automotive Locksmith services in Newtown, PA. At BucksLocks, we offer a wide range of Automotive Locksmith services. Lost car keys, need a new remote, need to make a copy of your car keys or just looking for a vehicle lockout service. We strive to provide superior Automotive Locksmith aid 24/7, 365 days a year">
	<?php
}
add_action('wp_head', 'metaDescription');


get_header();
?>


    <div id="header-cover-box" class="automotive-locksmith-services"></div>
        <header id="header" class="automotive-locksmith-services"    style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/layout/images/newtown_new_car_keys.jpg') !important" alt="Automotive Locksmith in Newtown header image" title="Automotive Locksmith in Newtown header image">
	<div class="top-header">            
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-8">                                    
					<?php if ( ! empty( $logo_image ) ) { ?>
						<?php echo '<a href="' . esc_url( home_url() ) . '"><img src="' . esc_url( $logo_image[0] ) . '" /></a>'; ?>
					<?php } else { ?>
						<?php if ( get_option( 'show_on_front' ) == 'page' ) { ?>
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $text_logo ); ?>" class="header-logo"><?php echo esc_html( $text_logo ); ?></a>
						<?php } else { // front-page option ?>
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
						<?php } ?>
					<?php } ?>

				</div><!--/.col-sm-2-->
				<div class="col-sm-8 col-xs-4">
                                    <?php
                                        if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ): ?>
                                        <nav class="header-navigation">
					<ul>
                                            <li class="page_item page-item-19 current_page_item"><a href="#about-location">About</a></li>
                                            <li class="page_item page-item-9"><a href="#services-location">Services</a></li>
                                            <li class="page_item page-item-5"><a href="#contact-us-location">Contact Us</a></li>
                                        </ul>
					</nav>
                                                
                                        <?php else:?>
                                            <nav class="header-navigation">
                                                <ul>
                                                    <li class="page_item page-item-19 current_page_item"><a href=<?php echo esc_url( home_url( '/locksmith-newtown-pa/' ) ); ?>>Home</a></li>
                                                    <li class="page_item page-item-9"><a href="#services-location">Services</a></li>
                                                    <li class="page_item page-item-5"><a href="#contact-us-location">Contact Us</a></li>
                                                </ul>
                                            </nav>
                                       <?php endif;
                                        ?>					                                    
					<button class="open-responsive-menu"><i class="fa fa-bars"></i></button>
				</div><!--/.col-sm-10-->
			</div><!--/.row-->
		</div><!--/.container-->
                <div id="header-title-text">				
                    <h3>Automotive Locksmith in Newtown PA.</h3>
                    <h4>Available 24 Hours 7 Days a Week.</h4>
                    <h4>Reliable and Dependable Service.</h4>
                    <p>Call now! Immediate Response! </p>
                    <div class="cta-hedear-title">                
                        <div class="header-contact">                            
                            <p><a href="tel: (267) 560-7065"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a></p>
                        </div>            
                    </div>
		</div>
   
	</div><!--/.top-header-->
	<nav class="responsive-menu">            
		<ul>
                    <?php
                                        if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ): ?>
                                            <li class="page_item page-item-19 current_page_item"><a href="#about-location">About</a></li>
                                            <li class="page_item page-item-9"><a href="#services-location">Services</a></li>
                                            <li class="page_item page-item-5"><a href="#contact-us-location">Contact Us</a></li>
                                            <?php else:?>
                                            <li class="page_item page-item-19 current_page_item"><a href=<?php echo esc_url( home_url( '/locksmith-newtown-pa/' ) ); ?>>Home</a></li>
                                                    <li class="page_item page-item-9"><a href="#services-location">Services</a></li>
                                                    <li class="page_item page-item-5"><a href="#contact-us-location">Contact Us</a></li>
                                        <?php endif;
                                        ?>
		</ul>
	</nav><!--/.responsive-menu-->
	<?php
	if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ):
		get_template_part( 'sections/front-page', 'bottom-header' );
	else:
		get_template_part( 'sections/blog', 'bottom-header' );
	endif;
	?>
</header><!--/#header-->
<div id="header-title-text-mobile">				
    <h3>Automotive Locksmith in Newtown PA.</h3>
    <h4>Available 24 Hours 7 Days a Week.</h4>
    <h4>Reliable and Dependable Service.</h4>
    <p>Call now! Immediate Response! </p>
    <div class="cta-hedear-title">                
        <div class="header-contact">                            
            <p><a href="tel: (267) 560-7065"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a></p>
        </div>            
    </div>
</div>
<div id="mobile-phone-button">
    <a href="tel: (267) 560-7065"><i class="fa fa-phone"></i></a>
</div>        
        
<?php		
	if( have_posts() ):
		while( have_posts() ): the_post(); ?>						
				<section class="front-page-section" id="static-page-content">
					<div class="section-header">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
                                                                    <h2 class="header-section-text service-page">Automotive Locksmith in Newtown PA</h2>
								</div><!--/.col-sm-12-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.section-header-->
					<div class="section-content">
						<div class="container-fluid">							
                                                    <div class="row">
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/replacement_car_key.jpg" alt="car key duplication in Newtown PA" title="replace Car Keys in Newtown PA">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">
                                                          <p>
                                                            <h6>Around the Clock Automotive Locksmith Services in Newtown PA</h6>
                                                               If you are looking for an Automotive Locksmith in Newtown PA, look no more! Buckslocks provides a wide range of auto locksmith  
                                                           services in your area. We offer car keys replacement, Key Programming, ignition repairs, emergency car lock out services and more. Automotive Locksmith around you available 24 hours a day 7 days a week. 
                                                           There is no need to tow your car or try to find an open locksmith store to make you a new car key or replace your ignition. As a mobile Automotive locksmith company, we will drive to your location wherever you are any time, 
                                                           and fix your issue. 
                                                           Call now for reliable and dependable automotive locksmith service. Our locksmith professionals are always on standby and ready to go. 
                                                            </p>
                                                            <p>
                                                            <h6>Need New Car Keys? </h6>
                                                            If you ever lost your car keys and looked around for a cost of getting a new key for your car, you probably already know that many places
                                                            will over charge you to cut and program a new key. We offer key replacement service for a great price. Buckslocks Provides professional mobile car keys replacement and car keys duplication service to Newtown PA and its surroundings. Call us today
                                                            and schedule a service to get a new key for you vehicle in an affordable price. <a href="tel: (267) 560-7065">(267)560-7065</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <h4>Our Automotive Locksmith services include:</h4>
                                                            <ul>
                                                            <li>Car lock out </li>
                                                            <li>Pickups lock out </li>
                                                            <li>Car keys Replacement</li>
                                                            <li>Lost keys replacement</li>
                                                            <li>Chip keys programming</li>
                                                            <li>Chip keys duplicate</li>
                                                            <li>Remote Start</li>
                                                            <li>Transponder keys programmed</li>
                                                            <li>Chip keys duplicate</li>
                                                            <li>Ignition installation</li>
                                                            <li>Ignition repaired</li>
                                                            <li>Ignitions rekey</li>
                                                            <li>Replace keyless entry remotes</li>
                                                            <li>Repair broken car keys</li>
                                                            </ul>
                                                            
                                                            And any Auto Locksmith services you need…

                                                        </div>
                                                        <div class="col-sm-5 col-md-5 col-lg-5 col-lg-offset-1 service-section-img-container">	
                                                        <div id="locksmith-images-carousel" class="carousel slide" data-ride="carousel">
                                                            <!-- Indicators -->
                                                            <ol class="carousel-indicators">
                                                              <li data-target="#locksmith-images-carousel" data-slide-to="0" class="active"></li>
                                                              <li data-target="#locksmith-images-carousel" data-slide-to="1"></li>
                                                              <li data-target="#locksmith-images-carousel" data-slide-to="2"></li>
                                                            </ol>

                                                            <!-- Wrapper for slides -->
                                                            <div class="carousel-inner">
                                                              <div class="item active">
                                                                  <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/carKey_new.jpg" alt="Car Keys Replacement in Newtown PA" title="Car Keys Replacement in Newtown PA">
                                                              </div>

                                                              <div class="item">
                                                                  <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/repair_car_keys.jpg" alt="repair car keys in Newtown PA" title="Car Key Repair in Newtown PA">
                                                              </div>

                                                              <div class="item">
                                                                  <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_locksmith_door_lockout.jpg" alt="Emeregency Auto Locksmith in Newtown PA" title="Emeregency Auto Locksmith in Newtown PA">
                                                              </div>
                                                            </div>
                                                          </div>                                                        								                                                               
                                                        </div>
                                                    </div>
						</div>
					</div>
				</section>
			<?php 
		endwhile;
	endif;
	?>
         <!-- Start Services Section -->
        <?php
/**
 *	The template for displaying services section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
//if ( current_user_can( 'edit_theme_options' ) ) {
	$services_general_title = get_theme_mod( 'illdy_services_general_title', __( 'Services', 'illdy' ) );
	$services_general_entry = get_theme_mod( 'illdy_services_general_entry', __( '', 'illdy' ) );
//}else{
//	$services_general_title = get_theme_mod( 'illdy_services_general_title' );
//	$services_general_entry = get_theme_mod( 'illdy_services_general_entry' );
//}

?>

<?php if ( $services_general_title != '' || $services_general_entry != '' || is_active_sidebar( 'front-page-services-sidebar' ) ) { ?>
<span class="location-scroll" id="services-location" style="    
"></span>
<section id="services" class="front-page-section">
    <section   class="section-header">
        <h3 class="section-header-title"><span class="black-text">Our</span> Services</h3>
    </section>
	<?php if( $services_general_title || $services_general_entry ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if( $services_general_title ): ?>						
					<?php endif; ?>
					<?php if( $services_general_entry ): ?>
						<div class="col-sm-10 col-sm-offset-1">
							<div class="section-description"><?php echo do_shortcode(wp_kses_post( $services_general_entry )); ?></div>
						</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
                                        <div class="col-md-4 ">
                                            <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                                <h3>Commercial Locksmith</h3>
                                                <div class="services-type">
                                                    <img alt="commercial locksmith image" title="Commercial locksmith services image" src="<?php echo get_stylesheet_directory_uri(); ?>/layout/images/commercial_locksmith.jpg" width="100%" height="auto">
                                                </div>

                                                <div class="divider clearfix"></div>
                                                <p class="service-paragraph">
                                                    <span>Secure your business!</span>
                                                    Most of us have valuable belongings in our business.
                                                    We should always protect them and keep intruders away.
                                                    With our latest security technologies we will help you protect your company.                                                    
                                                </p>
                                                <div class="read-more-div">
                                                   <a href="./commercial-locksmith-newtown-pa/" class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
                                               </div>                                       
                                            </div>
                                            </div>
                                            <div class="col-md-4 ">
                                            <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                                            <h3>Automotive Locksmith</h3>                                                                                            
                                                <div class="divider clearfix">
                                                    <img alt="Automotive Locksmith Service" title="Automotive locksmith services image" src="<?php echo get_stylesheet_directory_uri(); ?>/layout/images/Automotive_locksmith.jpeg" width="100%" height="auto">
                                                </div>
                                            <p class="service-paragraph">locked your keys in your car? Need an extra pair? Lost car keys? Call BucksLocks now 
                                            for fast and reliable service. We will be at your place in less than 20 minutes. No hidden fees! final prices are
                                            given when you call.
                                                 
                                            </p>
                                                <div class="read-more-div">
                                                    <a href="#" class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-4 ">
                                            <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                                            <h3>Residential Locksmith</h3>                                                                                            
                                                <div class="divider clearfix">
                                                    <img alt="Residential Locksmith Service" title="Residential locksmith services image" src="<?php echo get_stylesheet_directory_uri(); ?>/layout/images/residential_locksmith.jpeg" width="100%" height="auto">
                                                </div>
                                            <p class="service-paragraph">Locked out of your house? Need to change locks? Want to secure your house better? We are here for you any time 24 hours 7 days a week. Call now!
                                                
                                            </p>
                                                <div class="read-more-div">
                                                    <a href="./residential-locksmith-newtown-pa/" class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                    </div>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container">
			<div class="row inline-columns">
				<?php
				if( is_active_sidebar( 'front-page-services-sidebar' ) ):
					dynamic_sidebar( 'front-page-services-sidebar' );
				elseif( current_user_can( 'edit_theme_options' ) & defined("ILLDY_COMPANION") ):
					$the_widget_args = array(
						'before_widget'	=> '<div class="col-sm-4 widget_illdy_service">',
						'after_widget'	=> '</div>',
						'before_title'	=> '',
						'after_title'	=> ''
					);

					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Web Design', 'illdy' ) .'&icon=fa-pencil&entry='. __( 'Consectetur adipiscing elit. Praesent molestie urna hendrerit erat tincidunt tempus. Aliquam a leo risus. Fusce a metus non augue dapibus porttitor at in mauris. Pellentesque commodo...', 'illdy' ) .'&color=#f18b6d', $the_widget_args );
					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Web Development', 'illdy' ) .'&icon=fa-code&entry='. __( 'Consectetur adipiscing elit. Praesent molestie urna hendrerit erat tincidunt tempus. Aliquam a leo risus. Fusce a metus non augue dapibus porttitor at in mauris. Pellentesque commodo...', 'illdy' ) .'&color=#f1d204', $the_widget_args );
					the_widget( 'Illdy_Widget_Service', 'title='. __( 'SEO Analisys', 'illdy' ) .'&icon=fa-search&entry='. __( 'Consectetur adipiscing elit. Praesent molestie urna hendrerit erat tincidunt tempus. Aliquam a leo risus. Fusce a metus non augue dapibus porttitor at in mauris. Pellentesque commodo...', 'illdy' ) .'&color=#6a4d8a', $the_widget_args );
				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#services.front-page-section-->

<?php } ?>

<!-- End Services Section -->
<?php
	illdy_sections();

get_footer(); ?>