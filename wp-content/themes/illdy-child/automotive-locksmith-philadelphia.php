<?php
/*
* Template Name: AutomotiveLocksmith-philadelphia
*/
function metaDescription() {
    ?>
        <meta name="keywords" content="Locksmith, Automotive Locksmith services, Philadelphia-locksmith, Philadelphia PA Locksmith,Vehicle lockouts, locksmith-in-Philadelphia, get new car key in Philly, automotive locksmith, make-car-key, chip car, replacement car keys in Phily, duplicate car keys, transponder key, auto Locksmith, program car key, replacement car keys, affordable car keys, get new car keys, Buckslocks in Philadelphia">
        <meta name="description" content="Automotive Locksmith services in Philadelphia, PA. At BucksLocks, we offer a wide range of Automotive Locksmith services. Lost car keys, need a new remote, need to make a copy of your car keys or just looking for a vehicle lockout service. We strive to provide superior Locksmith aid 24/7, 365 days a year">   
       <?php
}
add_action('wp_head', 'metaDescription');


get_header();
?>


        <div id="header-cover-box" class="automotive-locksmith-services"></div>
        <header id="header" class="automotive-locksmith-services"    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/layout/images/philadelphia-automotive.jpg') !important" title="Automotive Locksmith in Philadelphia header" >
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
            <h3>Automotive Locksmith in Philadelphia, PA.</h3>
            <h4>Available 24 Hours 7 Days a Week.</h4>
            <h4>Reliable and Dependable Service.</h4>
            <p>Call now! </p>
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
    <h3>Automotive Locksmith in Philadelphia, PA.</h3>
    <h4>Available 24 Hours 7 Days a Week.</h4>
    <h4>Reliable and Dependable Service.</h4>
    <p>Call now! </p>
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
	if( have_posts() ):
		while( have_posts() ): the_post(); ?>						
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
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/replacement_car_key.jpg" alt="car key duplication" title="replace Car Keys">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">
                                                            <b>Are you locked out of your vehicle? </b> <br/>
                                                            <b>Did you accidentally lock your keys in the trunk? </b><br/>
                                                            <b>Have you lost your keys? </b><br/>
                                                          <p>
                                                              The technology in car keys has rapidly advanced with the advent of transponder keys. In order for a
                                                              transponder key to work, the auto key must first be programmed to the car's internal computer. BucksLocks
                                                              has the cutting edge tools that allow us to do auto key programming at any location in Philadelphia PA. Having trouble turning
                                                              your ignition key? It may not be a key problem and it is possible you may need an ignition change,
                                                              BucksLocks has the parts and experience to change any ignition. 
                                                          </p>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="hidden-desktop col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/remote_car_key.jpg" alt="remote car keys" title="replace Car Keys">                                                       								                                                               
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <p>
                                                                With BucksLocks we can get to you fast when you need new car keys. We can even duplicate your car key for you, regardless of the make or model.
                                                                Intricate keyless entry systems are our specialty so when that button stops working and you have trouble getting into your car or truck, 
                                                                give us a call. We understand how frustrating it is to lock your keys in your vehicle or misplace them. It’ѕ why we treat our customers like 
                                                                family members. When you call us for auto locksmith services in Philadelphia, you can rest easy knowing that our quick and dependable service 
                                                                is on the way. 
                                                            </p>

                                                        </div>
                                                        <div class="hidden-mobile col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/remote_car_key.jpg" alt="remote car keys" title="replace Car Keys">                                                       								                                                               
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_locksmith_door_lockout.jpg" alt="car key duplication" title="replace Car Keys">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                           
                                                          <p>
                                                              Lose your car keys? Lock your keys in the car? Or do you just need a spare? Regardless of your issue, we have the solution! Call BucksLocks anytime 
                                                              day or night to receive the best automotive locksmith service in the Philadelphia area and beyond. Our automotive locksmith professionals are here 24/7 to assist
                                                              you with your automotive lock and key needs. Need new car keys? We have the Car Key Replacement services on call 24/7 ready to arrive at your location
                                                              and make the key you need to get on the road again.
                                                          </p>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row">
                                                        <div class="hidden-desktop col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/car_keys.jpg" alt="car keys" title="Car Keys">                                                       								                                                               
                                                        </div>
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <p>
                                                                All of our highly skilled automotive locksmiths are fully licensed, insured and bonded and all of our work is backed by a warranty. 
                                                                No matter what the make, model or year of your vehicle we are able to perform any automotive locksmith service. With a response time
                                                                that is as low as 20 minutes, count on BucksLocks to be able to provide you with emergency auto locksmith services when you need them.
                                                            </p>

                                                        </div>
                                                        <div class="col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/repair_car_keys.jpg" alt="repair car keys" title="repair Car Keys">                                                       								                                                               
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-12  col-md-10 col-md-offset-1  col-lg-10 col-lg-offset-1 service-section-text-contianer" style="text-align: center">                                                         
                                                               <h4 style="font-size: 21px;">We offer a multitude of automotive locksmith services to our customers in Philadelphia and the surrounding areas. Our automotive locksmith
                                                                services include, but are not limited to the following: </h4>                                                 
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <ul class="list-unstyled">
                                                                
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Locks for ALL Makes and Models </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> ReKey All Automotive Locks </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Open Locked Vehicles </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Manufacture New Keys </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Transponders </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> 24/7 Emergency Lockout Service </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Transponder Chip Key Service </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Re-Program Keyless Entry Devices </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Open Locked Trunks </li>
                                                            </ul>                                                                                                                        

                                                        </div>
                                                        
                                                        <div class="col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 service-section-text-contianer" style="text-align: left">                                                         

                                                            <ul class="list-unstyled">
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Replace Lost Keys </li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Laser Cut Transponder Keys </li> 
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Car Lock Out </li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Pickups Lock Out </li>                                                            
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Chip Keys Programming</li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Chip Keys Duplicate</li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Ignition Repair</li>                                                         
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Replace Keyless Entry Remote</li>
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> Repair Broken Car Keys</li>
                                                            </ul>
                                                        </div>
                                                         <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">
                                                         And any Auto Locksmith services you need…
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