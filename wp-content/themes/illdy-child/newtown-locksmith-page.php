<?php
/*
* Template Name: NewtownLocksmith-page
*/

function metaDescription() {
    ?>
         <meta name="keywords" content="Locksmith,Locksmith in Newtown PA, Emergency Locksmith, locksmith in Newtown Bucks County PA, lockouts newtown PA, Lock and Key in Newtown PA, door locks, proffesional locksmith in newtown, door lockouts, 24 hour locksmith in Newtown PA, Locksmith around me, vehicle lockouts in newtown PA, car Lockout, locksmith near me, locksmith 18940, locksmith services 18940, Pennsylvania, emergency locksmith in Newtown PA, Locksmith around the clock, Locksmith near Newtow PA, 24/7 locksmith services, local locksmith">
        <meta name="description" content="Locksmith services in Newtown PA. At BucksLocks, we offer a wide range of Locksmith services to the residents of Newtown, PA. Lost your keys, need to install a new door lock for your business, moved to a new house and want to re-key all your locks or just looking for a 24 hours lockout service in Newtown, PA. We strive to provide superior Locksmith aid 24/7, 365 days a year around Newtown, PA. Call BucksLocks anytime at (267)560-7065">
	
	<?php
}
add_action('wp_head', 'metaDescription');


get_header();
?>

	<div id="header-cover-box" class="header-front-page"></div>
	<header id="header" class="header-front-page" style="<?php echo $style ?>" title="Locksmith in Newtown header image">
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
                                                    <li class="page_item page-item-19 current_page_item"><a href=<?php echo esc_url( home_url( '/' ) ); ?>>Home</a></li>
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
                    <h3>Locksmith in Newtown PA.</h3>
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
                                            <li class="page_item page-item-19 current_page_item"><a href=<?php echo esc_url( home_url( '/' ) ); ?>>Home</a></li>
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
    <h3>Locksmith in Newtown PA.</h3>
    <h4>Available 24 Hours 7 Days a Week.</h4>
    <h4>Reliable and Dependable Service.</h4>
    <p>Call now!  </p>
    <div class="cta-hedear-title">                
        <div class="header-contact">                            
            <p><a href="tel: (267) 560-7065"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a></p>
        </div>            
    </div>
</div>
<div class="wrapper-mobile-phone-button">
    <div id="mobile-phone-button">
        <a href="tel: (267) 560-7065"><i class="fa fa-phone"/></i><span>Click to call<span></a>
    </div>
</div>
        
<?php
if( get_option( 'show_on_front' ) == 'posts' ): ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<section id="blog">
					<?php do_action( 'illdy_above_content_after_header' ); ?>
					<?php
					if( have_posts() ):
						while( have_posts() ):
							the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
					<?php do_action( 'illdy_after_content_above_footer' ); ?>
				</section><!--/#blog-->
			</div><!--/.col-sm-7-->
			<?php get_sidebar(); ?>
		</div><!--/.row-->
	</div><!--/.container-->
<?php
else:
	$sections_order_fourth_section = get_theme_mod( 'illdy_general_sections_order_first_section', 1 );
	$sections_order_second_section = get_theme_mod( 'illdy_general_sections_order_second_section', 2 );
	$sections_order_third_section = get_theme_mod( 'illdy_general_sections_order_third_section', 3 );
	$sections_order_first_section = get_theme_mod( 'illdy_general_sections_order_fourth_section', 4 );
	$sections_order_fifth_section = get_theme_mod( 'illdy_general_sections_order_fifth_section', 5 );
	$sections_order_sixth_section = get_theme_mod( 'illdy_general_sections_order_sixth_section', 6 );
	$sections_order_seventh_section = get_theme_mod( 'illdy_general_sections_order_seventh_section', 7 );
	$sections_order_eighth_section = get_theme_mod( 'illdy_general_sections_order_eighth_section', 8 );	
	if( have_posts() ):
		while( have_posts() ): the_post();
			$static_page_content = get_the_content();
			if ( $static_page_content != '' ) : ?>
				<section class="front-page-section" id="static-page-content">
					<div class="section-header">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<h3><?php the_title(); ?></h3>
								</div><!--/.col-sm-12-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.section-header-->
					<div class="section-content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1">
									<?php echo $static_page_content; ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endif;
		endwhile;
	endif;
        ?>
        
        <section id="about" class="not-front-page" style="<?php if( !$general_title && !$general_entry ): echo 'padding-top: 25px;'; endif; ?>">
	
			
	<div class="section-header">
                                            <div class="container">
                                                <div class="row">								                                                                                                                                         
                                                    <div style="color: #38393d; width: 90%; max-width: 51em; margin-left: 17px;">
                                                                          <h3>Locksmith in Newtown PA</h3>
                                                        <p>
                                                           <span style="">At BucksLocks of Newtown, Bucks County, we offer a wide range of security and locksmith services to the residents of Newtown PA.</span><br/>
                                                            Our technicians will make sure you get reliable, fast and professional locksmith service like nowhere else around you.
                                                            We strive to provide superior Locksmith aid 24 hours a day, 7 days a week, 365 days a year.
                                                            Promise No Extra Charges or Hidden Fees.
                                                            Day or night, we're always available for you. Call Now!                                                        
                                                        </p>
                                                                         
                                                    </div>                      
							</div><!--/.row-->
                                                        
                                            </div><!--/.container-->
                        </div><!--/.section-header-->
                        <div class="section-content">
						
                                                    <div class="container">                                                                                                                
                                                        
                                                    <div class="row">
                                                          
                                                        <div class="col-sm-12 col-md-5 col-md-offset-0 col-lg-5 col-lg-offset-0 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/locksmith_newtown_pa.jpg" alt="Locksmith at Newtown PA" >
                                                        </div>
                                                        <div class="col-sm-12 col-md-7 col-lg-7 service-section-text-contianer" style="text-align: left">                                                            
                                                            <h3>Why BucksLocks Locksmith in Newtown? </h3>
                                                            <p>
                                                               For anyone based in Newtown PA, you’ll likely need a locksmith service at one stage in your life. While Newtown, PA is one of the safest to live in across the state of PA,
                                                               we know how high security living can force complacency. From people forgetting their house keys and getting locked out to having to undergo a car key replacement emergency. At BucksLocks Locksmith in Newtown PA,
                                                               we deal with all manner of different lock-related locksmith and keys issues. From a basic periodic locks change or Rekey locks at your home to high security locksmith solutions to keep businesses around Bucks county safely locked down,
                                                               our extensive range of security options makes BucksLocks locksmith services in Newtown PA a fine starting point for everyone whos looking for a local locksmith company around Newtown, PA. Our replacement key service, too, can be very useful
                                                               for making sure that your car or property is no longer quite so easy to get locked outside of!
                                                               Call BucksLocks today to schedule a locksmith service in Newtown PA. 
                                                            </p>                                                                                                                  
                                                        </div>
                                                    </div>
													
													<div class="row">
                                                        
                                                        <div class="hidden-desktop col-sm-12 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_locksmith_newtown.jpg" alt="Emergency Locksmith in Newtown">
                                                        </div>
                                                        
                                                        <div class="col-sm-12 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0 service-section-text-contianer" style="text-align: left">                                                         
                                                            <h4>24 Hr Emergency Locksmith Services in Newtown, PA </h4>
                                                            <p>
                                                              However, some of the most common Locksmith related service calls we get are emergencies issues. Someone being locked out in the middle of the night – or locked in ahead of a busy morning and looking for a fast local 
                                                              locksmith company in Newtown.
                                                            If you are looking for a local and licensed locksmith in Newtown, Bucks County who is available for 24 hr emergency lock outs around you, then contact BucksLocks locksmith services today. We can be there
                                                            as soon as possible to deliver a clear plan of action to help you open unlock the door to your property once again.
                                                            This emergency lock out services plays a major role in the BucksLocks Locksmith company history at Bucks county. We know that many people in Newtown PA will need emergency locksmith assistance around the clock; it’s not very often
                                                            that we plan to have a key related issue and need to find a locksmith near by. From being locked out to locked in, you can use BucksLocks professional locksmith service of Newtown,
                                                            to get yourself out of a door locked related situation.
                                                            From a simple key duplication service to an emergency door opening, we can make sure that your worries about getting in and out the property regardless of the time can be a thing of the past and thats why we provide 24/7 locksmith services in Newtown, PA.
                                                            </p>                                               

                                                        </div>
                                                        <div class="hidden-mobile col-sm-12 col-md-5 col-lg-4 col-lg-offset-1 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_locksmith_newtown.jpg" alt="Emergency Locksmith in Newtown">					                                                               
                                                        </div>
                                                    </div>
                                                
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5 col-md-offset-0 col-lg-5 col-lg-offset-0 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_locksmith_door_Newtown.jpg" alt="Locksmith Door service at Newtown PA" >
                                                        </div>
                                                        <div class="col-sm-12 col-md-7 col-lg-7 service-section-text-contianer" style="text-align: left">                                                            
                                                            <h3>What other Locksmith Services BucksLocks Does in Newtown, PA? </h3>
                                                            <p>
                                                                BucksLocks locksmith services been proudly providing the residents of Newtown Bucks County community all locks and keys services for quite some time. Our reputation speaks for it self and can be clearly seen throughout each satisfied customer great testimonial. 
                                                                We always here for our customers and willing to go out of our way to give you the best experience we can and keep everyone in Newtown PA safe and secured anytime of the day. Don't call the wrong number and let an inexperienced locksmith company to give you the runaround. Let BucksLocks locksmith services be your professionals locksmith choice and come to the rescue! 
                                                            </p>                                                                                                                 
                                                        </div>
                                                            <div class="col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 col-lg-12 col-lg-offset-0 service-section-text-contianer">
                                                                    
                                                                <div class="col-sm-12 col-md-12 col-lg-12 service-section-text-contianer" style="text-align: left; padding:0">
                                                                    <h4>Some of Our Locksmith services in Newtown, PA include:</h4>
                                                                    <ul class="list-unstyled">
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Home and Car Door Lock Outs </li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> 24 hours Emergency Locksmith </li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Lock Installations </li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Re-key house and business Locks</li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Keys Replacement and Duplication</li>                                                                    
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Programming Chip Car Keys</li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Around the Clock Locksmith Support in Newtown</li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Fresh Locks Installation</li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> High Security Solutions</li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Locksmith Consultation</li>
                                                                    And much more..
                                                                </div>
                                                                
                                                                
                                                                    
                                                            </div>
                                                        </div> 
                                                    <div class="row">
                                                         <h6>Looking for a licensed locksmith in Newtown PA? Look no more! Call Buckslocks now at <a href="tel: (267) 560-7065">(267)560-7065</a></h6>
                                                    </div>
                                                            
                                                </div>	
		<div class="container">
			<div class="row">
				<?php
				if( is_active_sidebar( 'front-page-about-sidebar' ) ):
					dynamic_sidebar( 'front-page-about-sidebar' );
				elseif( current_user_can( 'edit_theme_options' ) & defined("ILLDY_COMPANION") ):
					$the_widget_args = array(
						'before_widget'	=> '<div class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 col-lg-4 col-lg-offset-0 widget_illdy_skill">',
						'after_widget'	=> '</div>',
						'before_title'	=> '',
						'after_title'	=> ''
					);

					the_widget( 'Illdy_Widget_Skill', 'title='. __( 'Typography', 'illdy' ) .'&percentage=60&icon=fa-font&color=#f18b6d', $the_widget_args );
					the_widget( 'Illdy_Widget_Skill', 'title='. __( 'Design', 'illdy' ) .'&percentage=82&icon=fa-pencil&color=#f1d204', $the_widget_args );
					the_widget( 'Illdy_Widget_Skill', 'title='. __( 'Development', 'illdy' ) .'&percentage=86&icon=fa-code&color=#6a4d8a', $the_widget_args );
				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#about.front-page-section-->
        <?php
        
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
endif;
get_footer(); ?>