<?php
/*
* Template Name: Philadelphia-Locksmith-page
*/

function metaDescription() {
    ?>
        <meta name="keywords" content="Locksmith, Locksmith in Philadelphia PA, Commercial Locksmith in Philadelphia, Residential Locksmith in Philadelphia pa, emergency Locksmith 24/7 Philadelphia PA, car lockouts, Automotive Locksmith services Philadelphia, proffesional locksmith around Philadelphia PA, door lockouts, house lock out, lock and keys, new locks,old lock, high security locks, vehicle lockouts, locksmith in Phily, locksmith services around Philadelphia,locksmithing, around me locksmith, Mobile locksmith in Philadelphia PA, 24 hours locksmith, near by locksmith Philadelphia, find a locksmith in Philadelphia, 24 7 locksmith service in Philadelphia, licensed locksmith in Philadelphia">
        <meta name="description" content="Locksmith services in Philadelphia, PA. At BucksLocks, we offer a wide range of Locksmith services to residents in Phily. Lost your keys, need a high security door lock for your business, need to install security system or just looking for a lockout service in Philadelphia. Look no more, BucksLocks strives to provide superior Locksmith aid 24/7, 365 days a year. We offer Residential, Commercial and Automobile proffesioanl Locksmith service to entire area in Philadelphia and its surroundings.
              call us at (267)560-7065">
                  <?php
}
add_action('wp_head', 'metaDescription');


get_header();
?>
 <div id="header-cover-box" class="header-front-page"></div>
     <header id="header" class="header-front-page" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/layout/images/locksmith_in_Philadelphia.jpg') !important" title="Locksmith in Philadelphia header">
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
                        <nav class="header-navigation">
                            <ul>
                                <li class="page_item page-item-19 current_page_item"><a href=#>Home</a></li>
                                <li class="page_item page-item-9"><a href="#services-location">Services</a></li>
                                <li class="page_item page-item-5"><a href="#contact-us-location">Contact Us</a></li>
                            </ul>
                        </nav> 					                                    
					<button class="open-responsive-menu"><i class="fa fa-bars"></i></button>
				</div><!--/.col-sm-10-->
			</div><!--/.row-->
		</div><!--/.container-->
                <div id="header-title-text">				
                    <h3>Best Locksmith in Philadelphia.</h3>
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
                            <li class="page_item page-item-19 current_page_item"><a href=#>Home</a></li>
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
<div id="header-title-text-mobile" style="margin-bottom: 20px;">				
    <h3 style="font-size: 2.15em">Best Locksmith in Philadelphia</h3>
    <h4>Available 24 Hours 7 Days a Week.</h4>
    <h4>Reliable and Dependable Service.</h4>
    <p>Call now!  </p>
    <div class="cta-hedear-title">                
        <div class="header-contact">                            
            <p><a href="tel: (267) 560-7065" onclick="gtag('event', 'click', {'event_category' : 'header-contact','event_label' : 'header-contact -locksmith philadelphia);"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a></p>
        </div>            
    </div>
</div>
<div class="wrapper-mobile-phone-button">
    <div id="mobile-phone-button" onclick="gtag('event', 'click', {'event_category' : 'mobile-phone-button','event_label' : 'mobile-phone-button -locksmith philadelphia);">
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
        
<section class="front-page-section" id="static-page-content">
                    <div class="section-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="header-section-text service-page">About BucksLocks</h2>                          
                                </div><!--/.col-sm-12-->
                            </div><!--/.row-->
                        </div><!--/.container-->
                    </div><!--/.section-header-->
                    <div class="section-content">
                        <div class="container-fluid">                           
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                          <img style="max-width: 200px;" src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/locksmith_Logo.jpg" alt="remote keyless">
                                </div>
                                <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left; margin-top: 1.2em">                                                            
                                   BucksLocks offers residential, commercial and automotive locksmith services throughout Philadelphia.
                                                                    There is no job or problem that we will turn down. We are always available and always ready for a challenge. Who are we?
                                                                    Real - Fully equipped locksmith mobile service, staffed with extremely knowledgeable locksmith professionals. Because we know a
                                                                    problem with a lock can be frustrating, and if not dealt with properly the problem can escalate into something worse.
                                                                    So the importance of a trusted, quality locksmith, who can put your mind at ease cannot be understand. Trust no one
                                                                    other than the most trusted group of locksmith in the country. Customer satisfaction and safety are our two main concerns,
                                                                    so don’t hesitate to contact us at any time with questions or concerns about us or the service we provide.
                                                                </p>
                                                                <div>
                                                                    <span style="">Locksmithing is described as the art of creating and beating locks.</span><br>
                                                                    Locksmith services include changing locks, rekeying door knobs repairing damaged locks and even
                                                                    cracking safes open (legally of course). Being a locksmith requires a lot of skill and training
                                                                    because it is crucial to understand various complex mechanisms of modern-day locking systems.
                                                                </div>
                                </div>
                            </div>
                            <?php illdy_sections(); // load #contact-us ?>
                            
                            <?php 
                               if (false) {
                                $args = array( 'questionSentence' => 'Lost your car keys &#63;',
                                               'secondSentece' => "Don't wait, call BucksLocks today.",
                                               'page' => 'lost car keys phila' );
                                get_template_part("sections/cta", "divider", $args);
                              }
                            ?>
                            
                            <div>
                            
                            <?php  $args = array( 'image' => '2020-top-pro-badge.png',
                                               'link' => "https://www.thumbtack.com/pa/philadelphia/locksmiths/buckslocks/service/347857150095810571"
                                           );
                                get_template_part("sections/badge", "divider", $args);
                            ?>
                            <div class="row">
                                <div class="service-section-text-contianer container" style="text-align: center">                                                       
                                   <div>

                                        <h3 style="font-size: 23px; margin: 20px 0 2px;">24 hrs Locksmith Service in Philadelphia PA</h3>
                                       Getting locked out is an unfortunate part of life that often happens. We never plan to get locked
                                       out of our office in the morning or leave our keys in the car in a parking garage, but life is funny
                                       that way. When you need help the most in these situations, it’s best to call a trusted locksmith in
                                       Philadelphia PA. At BucksLocks, we are that trustworthy and reliable locksmith in Philadelphia, PA
                                       that you need. From our professional service to our hard-working team to the convenient 24-hour
                                       Philadelphia locksmith service, we have you covered!.  
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12  col-md-10 col-md-offset-1  col-lg-10 col-lg-offset-1 service-section-text-contianer" style="text-align: center">                            
                                       <h4 style="font-size: 21px;">Looking for the best Locksmith service in Philadelphia? Worry no more! </h4>
                                  <h5>Our services include: </h5>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">
                                     <ul class="list-unstyled">
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Residential </li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Commercial </li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Automotive</li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> lock outs </li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> 24/7 Emergency Locksmith service in Philadelphia </li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Locks replacement & installation</li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Re-key </li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> keys Replacement</li>                                                                    
                                        And much more..
                                    </ul>                                                     
                                </div>
                                    <div class="col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 service-section-text-contianer" style="text-align: left">
                                        <ul class="list-unstyled">
                                        <li> <span class="glyphicon glyphicon-ok  text-success"></span> Laser Cut High Security Keys </li>                 <li> <span class="glyphicon glyphicon-ok text-success"></span>  Transponder keys programming </li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Access Controls</li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Fresh lock installations</li>             
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Open Keyless Locked Trunks </li>
                                        <li> <span class="glyphicon glyphicon-ok  text-success"></span> Replace Entry Remote</li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Repair Broken Car Keys</li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Ignition</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-11 col-sm-offset-1 service-section-text-contianer" style="text-align: left">
                                 And any other key services you need in Philadelphia PA…
                                 </div>
                            </div>
                            <p>
                                Call BucksLocks <a href="tel: (267) 560-7065" onclick="gtag('event', 'click', {'event_category' : 'bottom-contact','event_label' : 'bottom-contact -locksmith philadelphia'});"  style="color:#337ab7">(267) 560-7065</a>!  
                                We serve all of Philadelphia PA and the surrounding area, so if you live on the outskirts of the city don’t wait to call, do it today!
                            </p>

                        </div>
                    </div>
                </section>
     
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
endif;
get_footer(); ?>