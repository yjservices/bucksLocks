<?php
/*
* Template Name: Horsham-Locksmith-page
*/
function metaDescription() {
    ?>
        <meta name="keywords" content="Locksmith in Horsham PA, Locksmith services, Horsham locksmith, Locksmith around Horsham PA, 24 hour locksmith, Emergency Locksmith, Locksmith in Horsham and Bucks county PA, professional locksmith around Horsham, door lockouts, high security locks, Locks replacement Horsham, new locks, Rekey locks Horsham, Locksmith for business, High security locks in Horsham PA ">
        <meta name="description" content="Locksmith in Horsham PA. we offer a wide range of Locksmith services to residents in Horsham PA. Lost your keys, need a high security door lock for your business, need to install security system or just looking for a lockout service in Horsham. Look no more, BucksLocks strives to provide superior Locksmith aid 24/7.">
            <?php
}
add_action('wp_head', 'metaDescription');

get_header();


?>
<div id="header-cover-box" class="commercial-locksmith-services"></div>
        <header id="header" class="header-front-page" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/layout/images/Locksimth_in_horsham_image.jpg') !important" title="Locksmith in Horsham header">
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
                    <h3>Locksmith in Horsham PA.</h3>
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
                        <li class="page_item page-item-19 current_page_item"><a href=<?php echo esc_url( home_url( '/locksmith-in-philadelphia/' ) ); ?>>Home</a></li>
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
    <h3>Locksmith in Horsham PA.</h3>
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
		while( have_posts() ): the_post();
			$static_page_content = get_the_content();?>			
				<section id="about" class="front-page-section" style="padding-top: 15px;">
	
		<div class="section-header">
			<div class="container">
				<div class="row">																				
						<div class="col-sm-12">
                                                    <div class="section-description" style="margin: initial; text-align: left; max-width: none;">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-sm-offset-0 col-md-7 col-md-offset-0 col-lg-7 col-lg-offset-0 service-section-text-contianer">
                                                                <h3>About BucksLocks Locksmith Service in Horsham</h3>
                                                                <div>
                                                                        Welcome to Buckslocks, we are local locksmith company in Horsham PA. We are committed to providing excellent service to all of our clients in Horsham. 
                                                                        Buckslocks handles all Locksmith issues with repairing locks, making copies of keys, home/car lock outs and everything in between for everyone in Horsham, PA.  
                                                                        We all want our properties secured, and BucksLocks Locksmith experts are proud to provide you with the highest quality
                                                                        of workmanship and locksmith services in Horsham PA area. From master key systems to key duplication, desk locks, and access control 
                                                                        features, you'll find everything you need in our showroom.
                                                                </div>                                                               
                                                            </div>
                                                            <div class="col-sm-12 col-sm-offset-0 col-md-5 col-md-offset-0 col-lg-4 col-lg-offset-1 service-section-text-contianer">                                                                
                                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_home_lockout_horsham.jpg" alt="Emergency House Lockout in Horsham PA" style="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="hidden-mobile col-sm-4 col-md-5 col-lg-5 service-section-img-container">
                                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/locksmith_door_lockout_horsham.jpg" alt="Door Locksmith in Horsham">
                                                            </div>
                                                            <div class="col-sm-6 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                           
                                                              <h3 style="font-size: 23px; margin: 20px 0 2px;">Need Fast and Reliable Locksmith Service in Horsham, PA? </h3>
                                                                   <p>If you need a residential or commercial locksmith in Horsham, PA area, BucksLocks Locksmith services can get the job done quickly to keep your belonging secure.
                                                                       Enjoy the peace of mind in knowing that your office, loved ones, and values are protected by the most secured lock systems. 
                                                                       If you live around Horsham, PA and looking for a local Locksmith company near by, BucksLocks provides 24-hour locksmith service to all residents of Horsham PA and Bucks County. We are licensed and insured Lосаl Locksmith company servicing Horsham PA.
                                                                   </p>
                                                                   
                                                                   <p>
                                                                       BuсkѕLосkѕ Locksmith services is your first line of protection from unwanted intruders. We design, deliver and install simple to complex door hardware and other locksmith services to Horsham and Bucks County.
                                                                       We carry over 3000 different types of key blanks, and many types of door and locks hardware, both commercial and residential. 
                                                                       We also sell and service safes to protect your valuables. 
                                                                   </p>
                                                            </div>
                                                            <div class="hidden-desktop col-xs-12 col-sm-12 col-md-12 service-section-img-container">
                                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/locksmith_door_lockout_horsham.jpg" alt="Door Locksmith in Horsham">
                                                            </div>
                                                        </div>
                                                        <div class="row">
															<div class="col-sm-5 col-md-6 col-lg-6 service-section-text-contianer" style="text-align: left">                                                         

                                                                <p>
                                                                    BucksLocks professional locksmith technicians of Horsham will meet all of your security needs to leave you completely satisfied. From high-security locks in Horsham PA to a simple rekey of existing locks in your house or business. 
                                                                    Our services extend throughout the greater Horsham area, and our trucks travel to your location to handle your situation in a prompt and efficient manner.
                                                                </p>
                                                                <p>
                                                                    You'll find a variety of products and services when you visit our web site. We take pride in providing the best customer service to Horsham,PA and Bucks County to ensure all your needs are handled. Whether you require repairs,
                                                                    rekeying locks service, safe and vault installation or repair, or electronic automotive key replacement in Horsham, PA, turn to BucksLocks Locksmith services. 
                                                                </p>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 service-section-img-container">	
                                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/repair_car_keys_horsham.jpg" alt="repair car keys in Horsham" >                                                       								                                                               
                                                            </div>
														</div>
                                                        <div class="row">
                                                            <div class="hidden-mobile col-md-5 col-lg-4 service-section-img-container">
                                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/locksmith_Logo_horsham.jpg" alt="Locksmith Logo Horsham">
                                                            </div>
                                                            <div class="col-sm-6 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-2 service-section-text-contianer" style="text-align: left">                                                           
                                                              <h3 style="font-size: 23px; margin: 20px 0 2px;">Why BucksLocks ? </h3>
                                                                   <p>
                                                                       BucksLocks Locksmith Services provide 24 hour local locksmith services to Horsham PA, automotive locksmith, best car key replacement, fast unlock door service, change locks,
                                                                       commercial emergency locksmith,keys repair, locked out of home locked out services,
                                                                       lost car keys, mobile locksmith, open car door, rekey locks, residential locksmith. 
                                                                   </p>                                                                                                                                     
                                                            </div>
                                                            <div class="hidden-desktop col-xs-12 col-sm-12 service-section-img-container">
                                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/locksmith_Logo_horsham.jpg" alt="Locksmith Logo Horsham">
                                                            </div>
                                                        </div>
                                                        <br>                                               
                                                        <div class="row">
                                                            <div class="col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 col-lg-12 col-lg-offset-0 service-section-text-contianer">
                                                                    <h3 style="font-size: 23px; margin: 20px 0 2px;">What else BucksLocks Locksmith i Horsham PA can do?</h3>                                                                
                                                                <p>
                                                                    BucksLocks has been proudly serving the community of Horsham PA and Bucks County for quite some time. Our reputation speaks volumes and can be clearly seen throughout each satisfied customer testimonial. 
                                                                    We go out of our way to keep you safe on the road. Don't let an inexperienced local locksmith company give you the runaround. Let the professionals at BucksLocks be your trusted locksmith provider and come to the rescue! 
                                                                </p>
                                                                <div class="col-sm-12 col-md-12 col-lg-12 service-section-text-contianer" style="text-align: left; padding:0">
                                                                    <h4>Our Locksmith services in Horsham include:</h4>
                                                                    <ul class="list-unstyled">
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> lock outs </li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> 24/7 Emergency Locksmith calls </li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> change Locks</li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Re-key Locks</li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> keys Replacement</li>                                                                    
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> programming Chip keys</li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Around the clock locksmith support</li>
                                                                    <li> <span class="glyphicon glyphicon-ok text-success"></span> Fresh locks installation</li>
                                                                    And much more..
                                                                </div>
                                                                
                                                                <p>
                                                                    Call BucksLocks of Horsham PA now <a href="tel: (267) 560-7065" style="color:#337ab7">(267) 560-7065</a>!  
                                                                    Contact our experts today for convenient services with the best solutions to your situation. 
                                                                    Your satisfaction is guaranteed for good service and we will beat any competitor's price.
                                                                </p>
                                                                    
                                                            </div>
                                                        </div>   
                                                            
                                                    </div>
						</div><!--/.col-sm-10.col-sm-offset-1-->				
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	
	<div class="section-content">
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
		endwhile;
	endif;
	illdy_sections();
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
                                                   <a href="#" class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
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
                                                    <a href="./automotive-locksmith-philadelphia/" class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
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
get_footer(); ?>