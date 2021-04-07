<?php
/*
* Template Name: Replacement Car Keys Philadelphia pa
*/
function metaDescription() {
    ?>
        <meta name="keywords" content="replacement car keys in Philadelphia PA, keys replacement services, Philadelphia car keys, Philadelphia PA, car keys,Vehicle key, get new car key in Philadelphia, make-car-key, chip car key, program keys, duplicate car keys, transponder key, High security car key, program car remote, affordable car keys, cut new car keys, Buckslocks in Philadelphia PA, Spare car key in philadelphia, remotes ad keys">
        <meta name="description" content="Car Keys Replacement services in Philadelphia, PA. At BucksLocks, we offer a wide range of Automotive and replacement key services. Lost car keys, need to program key, need a new remote, need to make a copy of your car keys or just looking for a mobile replacement key service in Philly. We strive to provide superior key replacement services aid in Philadelphia PA 24/7, 365 days a year">     
       <?php
}
add_action('wp_head', 'metaDescription');


get_header();
?>


        <div id="header-cover-box" class="automotive-locksmith-services"></div>
        <header id="header" class="automotive-locksmith-services"    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/layout/images/car_keys_philadelphia.jpg') !important" title="car keys philadelphia" >
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
                                                    <li class="page_item page-item-19 current_page_item"><a href=<?php echo esc_url( home_url( '/locksmith-in-philadelphia/' ) ); ?>>Home</a></li>
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
                    <h3>Replacement Car Keys in Philadelphia, PA.</h3>
                    <h4>Available 24 Hours 7 Days a Week.</h4>
                    <h4>Reliable and Dependable Service.</h4>
                    <p>Call now!  </p>
                    <div class="cta-hedear-title">                
                        <div class="header-contact">                            
                            <p><a href="tel: (267) 560-7065" onclick="gtag('event', 'click', {'event_category' : 'header-contact','event_label' : 'header-contact -Replacement Keys Philly);"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a></p>
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
    <h3>Replacement Car Keys in Philadelphia, PA.</h3>
    <h4>Available 24 Hours 7 Days a Week.</h4>
    <h4>Reliable and Dependable Service.</h4>
    <p>Call now!  </p>
    <div class="cta-hedear-title">                
        <div class="header-contact">                            
            <p><a href="tel: (267) 560-7065" onclick="gtag('event', 'click', {'event_category' : 'header-contact','event_label' : 'header-contact-Replacement Keys Philly'});"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a></p>
        </div>            
    </div>
</div>
<div class="wrapper-mobile-phone-button">
    <div id="mobile-phone-button" onclick="gtag('event', 'click', {'event_category' : 'mobile-phone-button','event_label' : 'mobile-phone-button-Replacement Keys Philly'});">
        <a href="tel: (267) 560-7065"><i class="fa fa-phone"/></i><span>Click to call<span></a>
    </div>
</div>     
  
<?php		
	if( have_posts() ):
		while( have_posts() ): the_post(); ?>						
				<section class="front-page-section" id="static-page-content">
					<div class="section-header">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
                                                                    <h2 class="header-section-text service-page">Replacement Car Keys in Philadelphia PA</h2>
								</div><!--/.col-sm-12-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.section-header-->
					<div class="section-content">
						<div class="container-fluid">							
                                                    <div class="row">
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img style="max-width: 200px;" src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/remote_keyless_philadelphia.jpg" alt="remote car keyless in Philadelphia">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                            
                                                            <h4>Why Call Us for New Car Keys ? </h4>
                                                            <p>BucksLocks can replace lost or stolen car keys around Philadelphia, as well as repair, replace and re-key any ignition, door, trunk and compartment lock. We are appropriately equipped 
                                                               for originating and duplicating car key for every vehicle. we service both domestic and foreign cars and trucks.</p>
                                                            <b>Are you looking for a replacement car key in Philadelphia ? </b><br/>
                                                          <p>
                                                              BucksLocks provides car key and remote replacement services for many different vehicles makes and models in Philadelphia, PA. Our services include key duplication, car key programming, key origination, keyless entry remote replacement, and more car key's related services in Philadelphia PA. 
                                                              We also cut advanced high security car keys such as laser cut car keys, also known as sidewinder or side mill car keys. 
                                                              We also provide remotes and remote programming for most car keys in Philadelphia PA. 
                                                          </p>                                                          
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="hidden-desktop col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/remote_car_key_philadelphia.jpg" alt="remote car keys in philadelphia">                                                       								                                                               
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         
                                                            <h4>Need a 24 hours car key replacement service in Philadelphia ? </h4>
                                                            <p>
                                                               BucksLocks can serve you with the best replacement key mobile service at your place anywhere in Philadelphia any time you want because we are always busy in providing the best customer service with our replacement car keys service.
                                                                We have all it takes for the solution of car keys problems but this is not the end of our services because we are not ordinary car key replacement company in Philadelphia PA. 
                                                            </p>
                                                            <p>
                                                                We have the latest equipment and tools for all car keys purposes and also have professional automotive technicians on standby anywhere in Philadelphia to fix this modern high security car key systems for every vehicle at every place as our customers need them.
                                                                BucksLocks always do the best to provide all car keys replacement services to our customers in any easy way possible.
                                                            </p>

                                                        </div>
                                                        <div class="hidden-mobile col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/remote_car_key_philadelphia.jpg" alt="remote car keys i philadelphia">                                                       								                                                               
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_car_keys_philadelphia.jpg" alt="emergency car keys replacement philadelphia">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                           
                                                          <p>
                                                              Getting a new car keys at the dealer around Philadelphia, PA can be a very long and expensive process. With BucksLocks you can get a new car keys in no time
                                                              and for a reasonable price too. With us, You can save 100s of dollars and get a new car key in less then an hour.   
                                                          </p>
                                                          <p>
                                                            We have worked hard to build a lasting trust between our company and members of Philadelphia PA and its surrounding areas. 
                                                            Give us a call today and see how we can help you with your car key replacement needs.
                                                          </p>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row">
                                                        <div class="hidden-desktop col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/car_Key_fobs_philadelphia.jpg" alt="car key fobs in philladelphia">                                                       								                                                               
                                                        </div>
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <p>
                                                               BucksLocks has been proudly serving the community of Philadelphia PA for quite some time. Our reputation speaks volumes when it comes to getting a new key for your vehicle and can be clearly seen throughout each 
                                                               satisfied customer testimonial. We go out of our way to keep you safe on the road. Don't let the inexperienced company give you the runaround. Let the professionals at BucksLocks come to the Rescue!
                                                            </p>
                                                            <p>
                                                                Contact our experts today for convenient services with the best solution to your car key situation. Your Satisfaction is Guaranteed for
                                                                Good Service and we will beat any competitor's price you will find i the Philadelphia area.
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/repair_car_keys_philadelphia.jpg" alt="car keys Philadelphia repair">                                                       								                                                               
                                                        </div>
                                                    </div>
                                                    
													<div class="row">
                                                        <div class="hidden-mobile col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/auto_locksmith_philadelphia.jpg" alt="Auto Locksmith Philadelphia">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                           
                                                          <p>
                                                              With BucksLocks car keys and auto locksmith service in Philadelphia, it is easy than ever to get a new car key for your vehicle. Lost your car Key ? car key broken in ignition ? looking for a spare car key ? No Problem !
                                                              BucksLocks auto Locksmith services will travel to your location anywhere in Philadelphia and get you a new car key faster than you think. Contact BucksLocks anytime a day to schedule service. <a href="tel: (267) 560-7065"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a>
                                                          </p>
                                                          <div class="hidden-desktop col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/auto_locksmith_philadelphia.jpg" alt="Auto Locksmith Philadelphia">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-12  col-md-10 col-md-offset-1  col-lg-10 col-lg-offset-1 service-section-text-contianer" style="text-align: center">                                                         
                                                               <h4 style="font-size: 21px;">A BucksLocks Car Key Replacement professional locksmith of Philadelphia can arrive pretty fast, and get new car keys on the spot wherever you're located in Philadelphia, PA. </h4>                                                 
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <ul class="list-unstyled">
                                                                
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Keys For All Vehicles in Philadelphia</li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Program Keyless Entry Keys</li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> 24 hr key replacement mobile service Near By Philadelphia </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Make New Keys for All Keys Lost </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Transponders for all Car Keys</li>                                                                                                                                
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Program Keyless Remote for you Vehicle </li>                                                                
                                                            </ul>                                                                                                                        

                                                        </div>
                                                        
                                                        <div class="col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 service-section-text-contianer" style="text-align: left">                                                         

                                                            <ul class="list-unstyled">
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Laser Cut High Security Keys </li>                                                             
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> Open Keyless Locked Trunks </li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Chip Keys on Board Programming in Philly</li>                                                                                                                                                                              
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Replace Entry Remote</li>
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> Repair Broken Car Keys anywhere around Philadelphia</li>
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Ignition</li>
                                                            </ul>
                                                        </div>
                                                         <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">
                                                         And any other Car Keys Replacement service you need in Philadelphia PA… You can trust BucksLocks as your Local mobile car key replacement service anywhere around Philadelphia, PA.
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
                                                    <img alt="commercial locksmith in Philadelphia" title="Commercial locksmith services image" src="<?php echo get_stylesheet_directory_uri(); ?>/layout/images/commercial_locksmith.jpg" width="100%" height="auto">
                                                </div>

                                                <div class="divider clearfix"></div>
                                                <p class="service-paragraph">
                                                    <span>Secure your business!</span>
                                                    Most of us have valuable belongings in our business.
                                                    We should always protect them and keep intruders away.
                                                    With our latest security technologies we will help you protect your company.                                                    
                                                </p>
                                                <div class="read-more-div">
                                                   <a href="./commercial-locksmith-philadelphia/" class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
                                               </div>                                       
                                            </div>
                                            </div>
                                            <div class="col-md-4 ">
                                            <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                                            <h3>Automotive Locksmith</h3>                                                                                            
                                                <div class="divider clearfix">
                                                    <img alt="Automotive Locksmith Service in Philadelphia" title="Automotive locksmith services image" src="<?php echo get_stylesheet_directory_uri(); ?>/layout/images/Automotive_locksmith.jpeg" width="100%" height="auto">
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
                                                    <img alt="Residential Locksmith Service in Philadelphia" title="Residential locksmith services image" src="<?php echo get_stylesheet_directory_uri(); ?>/layout/images/residential_locksmith.jpeg" width="100%" height="auto">
                                                </div>
                                            <p class="service-paragraph">Locked out of your house? Need to change locks? Want to secure your house better? We are here for you any time 24 hours 7 days a week. Call now!
                                                
                                            </p>
                                                <div class="read-more-div">
                                                    <a href="./residential-locksmith-philadelphia/" class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
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