<?php
/*
* Template Name: carkeys-horsham-pa
*/
function metaDescription() {
    ?>
        <meta name="keywords" content="replacement car keys in Horsham PA, Automotive Locksmith services, Horsham-locksmith, Horsham PA car keys,Vehicle keys in Horsham, get new car key in Horsham, make-car-key, chip car key, program keys, duplicate car keys, transponder key, auto Locksmith, program car remote, affordable car keys, cut new car keys, Buckslocks in Horsham PA, Spare car key Horsham, keyless remote">
        <meta name="description" content="Car Keys Replacement services in Horsham, PA. At BucksLocks, we offer a wide range of Automotive Locksmith services. Lost car keys, need a new remote, need to make a copy of your car keys or just looking for a vehicle lockout service. We strive to provide superior car replacement services aid 24/7, 365 days a year">    
       <?php
}
add_action('wp_head', 'metaDescription');


get_header();
?>


        <div id="header-cover-box" class="automotive-locksmith-services"></div>
        <header id="header" class="automotive-locksmith-services"    style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/layout/images/new_car_keys_3.jpg') !important" title="get new car keys" >
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
                    <h3>Car Keys Replacement in Horsham, PA.</h3>
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
    <h3>Car Keys Replacement in Horsham, PA.</h3>
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
                                                                    <h2 class="header-section-text service-page">Replacement Car Keys in Horsham PA</h2>
								</div><!--/.col-sm-12-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.section-header-->
					<div class="section-content">
						<div class="container-fluid">							
                                                    <div class="row">
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img style="max-width: 200px;" src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/remote_keyless_1.jpg" alt="remote keyless">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                            
                                                            <h4>About BucksLocks</h4>
                                                            <p>BucksLocks Locksmith services provides 24 hr car key replacement services in Horsham PA.</p>
                                                            <b>Have you lost your keys? </b><br/>
                                                          <p>
                                                              You probably remember the moment when you've lost your car keys. You've searched the key everywhere, but couldn't find it. 
                                                          </p>
                                                          <p>
                                                              In the beginning, after noticing that your car key is nowhere to be found, you get panic. Maybe you're also frustrated, but hey, it's not the end of the world.
                                                              Finally, you end up calling a locksmith to get new car keys. This is a great decision. Buckslocks available 24 hr a day 7 days a week. 
                                                          </p>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="hidden-desktop col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/remote_car_key.jpg" alt="car keys">                                                       								                                                               
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <p>
                                                                Car keys are important and losing them can spell your day especially for people who need their ride. More often than not, a car owner has a spare car key; 
                                                                however, if all keys are lost or misplaced, then getting a replacement car key is the best option. Needless to say, getting a replacement key from your auto dealer can 
                                                                very costly and time consuming. Knowing the type of car key that one has though can cut the cost of replacing it.  
                                                            </p>

                                                        </div>
                                                        <div class="hidden-mobile col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/remote_car_key.jpg" alt="replacement keys">                                                       								                                                               
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_locksmith_door_lockout.jpg" alt="car door lockout">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                           
                                                          <p>
                                                              Replacing lost keys by requesting from the auto dealer can be an expensive option and one would have to wait for several days in order in order for car keys to be delivered.
                                                              The keys will also need to be programmed so that it would be compatible with the car's computer.
                                                          </p>
                                                          <p>
                                                            For those who have an older car model that have metal metal keys, they can call the local locksmith to make a replacement for them. More often than not locksmiths have master keys
                                                            which they can use to make a new car key for your vehicle. On the other hand, smart key car owners might find it difficult to have their replacement keys as these key types would require car  
                                                            key programming as well as the key to start the vehicle.  
                                                          </p>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row">
                                                        <div class="hidden-desktop col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/car_Keys_horsham.jpg" alt="car keys horsham">                                                       								                                                               
                                                        </div>
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <p>
                                                               The BucksLocks offers a fast response mobile car key programming service with vehicle locksmiths covering the whole area of Horsham PA. It just takes one phone call. Every van is fully equipped
                                                               with all the latest machinery to repair and replace your lost or broken car key and our locksmiths have the specialist skills and equipment required for transponder key programming. We can get
                                                               you back on the road in no time and it won't cost you an arm and a leg! It doesn't even have to be an emergency! 
                                                            </p>

                                                        </div>
                                                        <div class="col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/repair_car_keys.jpg" alt="repair car keys">                                                       								                                                               
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-12  col-md-10 col-md-offset-1  col-lg-10 col-lg-offset-1 service-section-text-contianer" style="text-align: center">                                                         
                                                               <h4 style="font-size: 21px;">A BucksLocks locksmith can arrive pretty fast, and get new car keys on the spot wherever you're located in our service area. </h4>                                                 
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <ul class="list-unstyled">
                                                                
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace keys for ALL Makes and Models </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> ReKey All Automotive Locks </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Duplicate car keys </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Make New Keys </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Transponders </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> 24/7 Emergency car Lockout Service </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Transponder Chip Key Service </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Program Keyless Entry Devices </li>                                                                
                                                            </ul>                                                                                                                        

                                                        </div>
                                                        
                                                        <div class="col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 service-section-text-contianer" style="text-align: left">                                                         

                                                            <ul class="list-unstyled">
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Replace Lost all Keys </li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Laser Cut Transponder Keys </li>                                                             
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Pickups Lock Out </li>
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> Open Locked Trunks </li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Chip Keys Programming</li>                                                                                                                                                                              
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Replace Keyless Entry Remote</li>
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> Repair Broken Car Keys</li>
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> High Security Car Keys</li>
                                                            </ul>
                                                        </div>
                                                         <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">
                                                         And any Auto Locksmith services you need in Horsham PA…
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