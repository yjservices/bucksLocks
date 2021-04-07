<?php
/*
* Template Name: CommercialLocksmith-philadelphia
*/
function metaDescription() {
    ?>
        <meta name="keywords" content="Locksmith in Philadelphia, Commercial Locksmith services, Philadelphia-locksmith, Philadelphia, PA commercial Locksmith, Panic bar replacement, access entry, security system installation, proffesional locksmith around Philadelphia, door lockouts, high security locks, Locks replacement Philadelphia, new locks, Rekey locks Philadelphia, Locksmith for business, High security locks in Philadelphia PA ">
        <meta name="description" content="Commercial Locksmith services in Philadelphia PA. At BucksLocks, we offer a wide range of Commercial Locksmith services. Lost your keys, need a high security door lock for your business, need to install security system or just looking for a lockout service at the Philadelphia PA area. We strive to provide superior commercial Locksmith aid 24/7, 365 days a year to Phily">
            <?php
}
add_action('wp_head', 'metaDescription');

get_header();


?>
<div id="header-cover-box" class="commercial-locksmith-services"></div>
        <header id="header" class="commercial-locksmith-services"
  style="background-image: url('http://localhost/BucksLocks/wp-content/themes/illdy-child/layout/images/commercial_locksmith_philadelphia.jpg')" title="commercial locksmith in Philadelphia">
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
                    <h3>Commercial Locksmith in Philadelphia PA.</h3>
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
    <h3>Commercial Locksmith in Philadelphia PA.</h3>
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
	if( have_posts() ):
		while( have_posts() ): the_post();
			$static_page_content = get_the_content();?>			
				<section class="front-page-section" id="static-page-content">
					<div class="section-header">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
                                                                    <h2 class="header-section-text service-page">Commercial Locksmith in Philadelphia PA</h2>
								</div><!--/.col-sm-12-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.section-header-->
					<div class="section-content">
						<div class="container-fluid">
                                                    
                                                    
                                                   <div class="row">
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/commercial_locksmith_shop_philadelphia.jpg" alt="Commercial Locksmith shop in Philadelphia, PA">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">
                                                            <h3 style="margin-top: 0px;">Looking for a commercial locksmith in Philadelphia ? </h3>
                                                            
                                                          <p>
                                                             A Commercial Locksmith is a skilled vocational trade that entails accurate and exhaustive work of locks and security devices. There are often responsible
                                                             for the safety of not only people but for the property also. In the past the large part of the work of a commercial locksmith around Philadelphia PA involved traditional locks
                                                             and keys, they have varied in degrees of quality and difficulty to pick and open. In today's business environment in Philadelphia, locks have become more difficult in 
                                                             the ability to add simplicity to the customers. The numbers of electronic locks with keyless entry, magnetic or electronic, has surely required that 
                                                             commercial locksmiths in your area stay educated and current on technology. 
                                                          </p>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="hidden-desktop col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/Commercial_locksmith_security_philadelphia.jpg" alt="Commercial Locksmith Security Security in Philadelphia">
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         
                                                            <h3>Secure your Business in Philadelphia and Get Professional Commercial Locksmith with BucksLocks !</h3>
                                                            <p>
                                                                A commercial Locksmith has the ability to assess a security need and apply their experience and knowledge to deliver the best solution while trying
                                                                to work within the customers budget in the Philadelphia PA area. With frequent technological advancements in security, the use and consultation of a commercial locks
                                                                installation on a regular basis is a necessary part of operating a business in Philadelphia. Today, with the liability issues a business can face if there
                                                                are any emergency situations you really need to make sure your business is in compliance with all commercial locksmith needs. What kinds of hardware do you have on your
                                                                emergency exists? Is this hardware compliant with local and federal mandates? You don't want to end up in court of Philadelphia defending yourself and
                                                                business because of something you could have had fixed or change commercial Locks for relatively little money.  
                                                            </p>

                                                        </div>
                                                        <div class="hidden-mobile col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/Commercial_locksmith_security_philadelphia.jpg" alt="Commercial Locksmith Security Security in Philadelphia">                                                       								                                                               
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/commercial_locksmith_Logo_philladelphia.jpg" alt="Commercial Locksmith Philadelphia Logo">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                           
                                                          <h3 style="margin-top: 0px;">Get Best Commercial Locksmith Solutions for Philadelphia Your Work Place  </h3>
                                                            <p>
                                                              BucksLocks of Philadelphia and its commercial locksmith technicians understand how important it is to keep your business secure. We offer a complete comprehensive
                                                              array of security solutions and commercial locks installation for all types of businesses around Philadelphia, rather it is large or small. 
                                                          </p>
                                                          <p>
                                                              We all started out as a small commercial locksmith services company so we relate to how much a business owner wants to protect his business in Philadelphia. That's why when it comes to helping businesses' 
                                                              in Philadelphia PA we take it personally. Rather it's a big or small business we serve them all, and we will serve you. we can install access control systems, keycard systems, biometric locks, and even make sure your business is up to code. Don’t leave
                                                              your business vulnerable to the outside world in the city of Philadelphia PA. Rather you work at a bank, a high rise office, a local retail store, an industrial facility or a high-security government building,
                                                              BucksLocks commercial Locksmith technicians will meet you regular will meet your request. They are trained for all lock, key and security situations. Let BucksLocks commercial professionals protect you today!
                                                          </p>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row">
                                                        <div class="hidden-desktop col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/commercial_door_lock_philadelphia.jpg" alt="Commercial Lock Installation in Philadelphia">                                                       								                                                               
                                                        </div>
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         
                                                                <h3 style="margin-top: 0px;">BucksLocks Professional commercial Locksmith Technicians</h3>
                                                            <p>
                                                               All BucksLocks technicians carry with them welding equipment should you require gate or other barrier access. We carry with us the necessary 
                                                               commercial locksmith's equipment, tools and digital devices to meet any change locks, key or security request from our clients in Philadelphia. 
                                                            </p>
                                                            <p>
                                                                We use the most effective techniques and the most advanced tools to give you the best locksmith service in Philadelphia PA. BucksLocks Locksmith
                                                                provides custom-made locks and special solutions for unique cases, antique lock repair and foreign locking mechanisms. 
                                                            </p>
                                                            <p>
                                                                When you visit our showroom, you will see our commercial door locks, ADA compliant hardware. Keep your most important data protected
                                                                with our safes and door lock services.
                                                            </p>

                                                        </div>
                                                        <div class="col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/commercial_door_lock_philadelphia.jpg" alt="Commercial Lock Installation in Philadelphia">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-12  col-md-10 col-md-offset-1  col-lg-10 col-lg-offset-1 service-section-text-contianer" style="text-align: center">                                                         
                                                               <h4 style="font-size: 21px;">Our commercial Locksmith services in Philadelphia PA include, but not limited to the following: </h4>            
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <ul class="list-unstyled">
                                                                
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Commercial Locks </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> ReKey Commercial Locks </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Unlock Commercial Doors in Philadelphia </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Duplicate Commercial High Security Keys </li>                                                                
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> 24/7 Emergency Lockout Service around Philadelphia </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Repair and Install Panic Bars  </li>                                                                
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Door Installation and Repair  </li>
                                                                <li> <span class="glyphicon glyphicon-ok  text-success"></span> High-Security Lock Repair, Installation or Replacement  </li>
                                                            </ul>                                                                                                                        

                                                        </div>
                                                        
                                                        <div class="col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 service-section-text-contianer" style="text-align: left">                                                         

                                                            <ul class="list-unstyled">                                                            
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Loss Prevention Locksmith Services in Philadelphia</li> 
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Locksmith Consulting Services in the Philadelphia area</li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Commercial Access Control Devices </li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Life Safety Commercial Products </li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Locksmith Building Code Services </li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Open and Repair All Safes </li>                                                         
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Open File Cabinets </li>
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> Welding Services for Steel, Metal or Iron Entry Access </li>
                                                            </ul>
                                                        </div>
                                                         <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">
                                                         And any other commercial Locksmith services you need in and around Philadelphia, PA…
                                                         </div>
                                                       
                                                    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
						</div>
					</div>
				</section>
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