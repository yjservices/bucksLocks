<?php
/*
* Template Name: ResidentialLocksmithNewtown-page
*/

function metaDescription() {
    ?>
        <meta name="keywords" content="Residential Locksmith in Newtown PA, Residential Locksmith services in newtown, newtown locksmith residential Bucks County PA, emergency residential Locksmith, residential access entry, proffesional residential locksmith, residential door lockouts,house lockouts, high security residential locks">
        <meta name="description" content="Mobile service of Residential Locksmith in Newtown, PA. Providing extreme service of Residential Locksmith to the Newtown, PA around the clock. From being locked out of your home to installing new locks, you can always count on BucksLocks as your local Residential Locksmiths professional.">
	<?php
}
add_action('wp_head', 'metaDescription');

get_header();
?>

<div id="header-cover-box" class="residential-locksmith-services"></div>
        <header id="header" class="residential-locksmith-services"
 style="<?php echo $style ?>" title="residential locksmith in newtown header image">
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
                    <h3>Residential Locksmith in Newtown, PA.</h3>
                    <h4>Available 24 Hours 7 Days a Week.</h4>
                    <h4>Reliable and Dependable Service.</h4>
                    <p>Call now!  </p>
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
    <h3>Residential Locksmith in Newtown, PA.</h3>
    <h4>Available 24 Hours 7 Days a Week.</h4>
    <h4>Reliable and Dependable Service.</h4>
    <p>Call now!  </p>
    <div class="cta-hedear-title">                
        <div class="header-contact">                            
            <p><a href="tel:2675607065"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a></p>
        </div>            
    </div>
</div>
<div class="wrapper-mobile-phone-button">
    <div id="mobile-phone-button">
        <a href="tel: (267) 560-7065"><i class="fa fa-phone"/></i><span>Click to call<span></a>
    </div>
</div>
<?php		
	if( have_posts() ):
		while( have_posts() ): the_post();?>
			
				<section class="front-page-section" id="static-page-content">
					<div class="section-header">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
                                                                    <h2 class="header-section-text service-page"><?php the_title(); ?></h2>
								</div><!--/.col-sm-12-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.section-header-->
					<div class="section-content">
						<div class="container-fluid">							
								<div class="row">
									  
									<div class="col-sm-12 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/residential_locksmith_newtown.jpg" alt="Residential Locksmith Newtown" >
									</div>
									<div class="col-sm-12 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                            
										<h4>Why BuycksLocks Residential Locksmith in Newtown?  </h4>
										<p>
									At BucksLocks, we offer a wide range of residential locksmith services to the residents of Newtown, PA. 
									   If you live in Newtown PA or anywhere around Bucks County and looking for a local locksmith to replace your door locks or establish a high security system throughout your home, BucksLocks Residential Locksmith services can help. Call us today to set up a day and time for a professional local locksmith to send to your home. 
										</p>                                                                                                                  
									</div>
								</div>
								
								<div class="row">
									
									<div class="hidden-desktop col-sm-12 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
										<img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_locksmith_newtown.jpg" alt="Emergency Locksmith in Newtown">
									</div>
									
									<div class="col-sm-12 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         
										<h4>Emergency Residential Locksmith in Newtown PA </h4>
										<p>
									Locked out of your home late at night? Looking for a local locksmith around Newtown, PA to come to the rescue,
									unlock your door and get you back in your home? BucksLocks is proud to offer a 24/7 Emergency Residential Locksmith services in
								   Newtown, PA. With an average response time of 15 minutes, we are the best local Residential Locksmith in your area. 
										</p>                                               

									</div>
									<div class="hidden-mobile col-sm-12 col-md-5 col-lg-4 col-lg-offset-1 service-section-img-container">	
										<img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_locksmith_newtown.jpg" alt="Emergency Locksmith in Newtown">					                                                               
									</div>
								</div>

								<div class="row">
								   
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
											  <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/residential_security_cctv_camera.jpg" title="residential security system" alt="residential security system">
										  </div>

										  <div class="item">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/high_security_door_lock.jpg" title="High Security Door Lock" alt="high security door lock">
										  </div>

										  <div class="item">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/door_lock_fresh_installation.jpg" title="Fresh Installation Door Lock" alt="fresh installation door lock">
										  </div>
										</div>
									  </div>                                                        								                                                               
									</div>
									<div class="col-sm-12 col-sm-offset-0 col-md-5 col-md-offset-0 col-lg-5 col-lg-offset-0 service-section-text-contianer">
												
										<div class="col-sm-12 col-md-12 col-lg-12 service-section-text-contianer" style="text-align: left; padding:0">
											<h4>Our Residential Locksmith In Newtown PA include:</h4>
											<ul class="list-unstyled">
											<li> <span class="glyphicon glyphicon-ok text-success"></span> 24 Hour Residential Locksmith Support. </li>
											<li> <span class="glyphicon glyphicon-ok text-success"></span> High Security Residentgial Lock Installations. </li>
											<li> <span class="glyphicon glyphicon-ok text-success"></span> Locks and Keys replacement. </li>
											<li> <span class="glyphicon glyphicon-ok text-success"></span> Door Lockout services in Newtown PA.</li>
											<li> <span class="glyphicon glyphicon-ok text-success"></span> Rekey of House Locks.</li>                                                                    
											<li> <span class="glyphicon glyphicon-ok text-success"></span> Residential Door Installations</li>
											<li> <span class="glyphicon glyphicon-ok text-success"></span> Around the Clock Locksmith Support in Newtown</li>
											<li> <span class="glyphicon glyphicon-ok text-success"></span> Fresh Door Lock Installation.</li>
											<li> <span class="glyphicon glyphicon-ok text-success"></span> Privacy and Guard Locks</li>
											<li> <span class="glyphicon glyphicon-ok text-success"></span> Locksmith Consultation</li>
											And much more..
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
                                                    <a href="./automotive-locksmith-newtown-pa/" class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
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
                                                    <a href="#" class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
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