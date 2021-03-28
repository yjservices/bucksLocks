<?php
/**
 *	The template for displaying about section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
 function metaDescription() {
    ?>
        <meta name="keywords" content="Locksmith, Locksmith in Philadelphia PA, Locksmith in Bucks County PA, Commercial Locksmith,bucks County PA, Residential Locksmith, emergency Locksmith, 24/7 Locksmith, car lockouts, Automotive Locksmith services, access entry, proffesional locksmith, Around the clock Locksmith, door lockouts, high security locks, vehicle lockouts PA, locksmith 18940, car key replacement service, Mobile locksmith, around me locksmith">
        <meta name="description" content="Locksmith services in Philadelphia and Bucks County, PA. At BucksLocks, we offer a wide range of Locksmith services to the entire area of Philadelphia and Bucks County. With two locations in NE Philadelphia we can reach you in no time.  Lost your car key and looking for a replacement key, need a high security door lock for your business, need to install new locks at your home, jujst moved to a new house 
              and looking for a near by locksmith to rekey your locks, locked your key in your car or home and on a look for a locksmith around you that will provide you with a fast and affortable lockout service. Look no more, BucksLocks strives to provide superior Locksmith aid 24/7, 365 days a year to all residents in Philadelphia and Bucks County PA. We offer Residential, Commercial and Automotive proffesioanl Locksmith service.
              Call us today anytime at (267)560-7065">
    
                  <script type="application/ld+json">
            {
            "@context" : "http://schema.org",
            "@type" : "Locksmith", 
            "address" : {
                "@type": "PostalAddress",
                "addressLocality": "2097 B Red Lion Rd.", 
                "addressRegion": "PA", 
                "postalCode": "19115",
            }, 
            "name":"BucksLocks",
            "email":"buckslocks@gmail.com",
            "telephone":"(267)560-7065",
            "openingHours": [ 
            "Mo-Sa 24 hr"]
            }
        </script>
        
    <?php
}
add_action('wp_head', 'metaDescription');


get_header();

?>
<?php

	$general_title = get_theme_mod( 'illdy_about_general_title', __( 'About', 'illdy' ) );
	$general_entry = get_theme_mod( 'illdy_about_general_entry', __( 'It is an amazng one-page theme with great features that offers an incredible experience. It is easy to install, make changes, adapt for your business. A modern design with clean lines and styling for a wide variety of content, exactly how a business design should be. You can add as many images as you want to the main header area and turn them into slider.', 'illdy' ) );

?>

<?php if ( $general_title != '' || $general_entry != '' || is_active_sidebar( 'front-page-about-sidebar' ) ) { ?>
<span class="location-scroll" id="about-location" style=""></span>
<section id="about" class="front-page-section" style="<?php if( !$general_title && !$general_entry ): echo 'padding-top: 130px;'; endif; ?>">
	
		
					<div class="section-header">
						<div class="container">
							<div class="row">								                                                                                                                                         
                                                            <div style="color: #38393d; width: 90%; max-width: 51em; margin: auto;">
                                                                         <h3>About Us</h3>
                                                                         <p>
                                                                             <span style="">At BucksLocks, we offer a wide range of security and locksmith services to Philadelphia and Bucks County PA.</span><br/>
                                                                            Our technicians will make sure you get fast and professional service like nowhere else.
                                                                            We strive to provide superior aid 24 hours a day, 7 days a week, 365 days a year.
                                                                            Promise No Extra Charges or Hidden Fees.<br/>
                                                                            Day or night, we're always available for you.
                                                                         </p>
                                                                         
                                                                     </div>                      
							</div><!--/.row-->
                                                        
						</div><!--/.container-->
					</div><!--/.section-header-->
					<div class="section-content">
						<div class="container-fluid">
                                                    
                                                    <div class="row">
                                                          
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/emergency_home_lockout.jpg" alt="emergency locksmith in Philadelphia and Bucks County" >
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                            
                                                            <h3>Looking for 24/7 Locksmith Service ? </h3>
                                                            <p>We care deeply about our professional ability to help people when they are locked out of the house or in a different emergency and need a locksmith service that operates 24 hours a day. It’s what gets us out of bed whenever you call, and why we work tirelessly to be the most reliable locksmith in Philadelphia and Bucks County, PA. We know that you need access to your home, business and/or vehicle and as such we waste little time in putting together a plan of action to solve your issue without any fuss or stress.
                                                                    So, if you are sick of having to spend an excessive part of the day cleaning up after yourself and chasing around trying to find an alternative route into your property or vehicle, contact us today. We can quickly put in place a BucksLocks locksmith solution that will get the doors open and the access you need.
                                                                    We also provide custom door locks, high security locks and other large-scale security installations. This helps us to give you peace of mind that you can get in and out of anywhere you need access to, all the while giving you hep and assistance that you could need to get back in without any time being wasted or stress building up.
                                                                    So, don’t let that broken lock or security incident put you in a bad place. Contact BucksLocks today, and we’ll deliver the kind of comprehensive locksmith services in Philadelphia and Bucks County PA that you can benefit from immediately!
                                                                    Call us on (267)560-7065, and we’ll be there as soon as we can to assist. </p>                                                                                                                  
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="hidden-desktop col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/re-key_locks.jpg" alt="ReKey Locks in Philadelphia">                                                       								                                                               
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         
                                                            <h4>Need to Re-Key Your Home or Business Locks ? </h4>
                                                            <p>
                                                               If you just move to a new location, you probably looking to get your existing locks set with brand new keys.
                                                               BucksLocks can serve you with the best mobile Re-Key service in Philadelphia and Bucks County PA to make sure that unwanted personals 
                                                               can not enter your home or business. Call BucksLocks today to schedule a Re-Key service in a affordable price.  
                                                            </p>                                               

                                                        </div>
                                                        <div class="hidden-mobile col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/re-key_locks.jpg" alt="ReKey Locks in Philadelphia">                                                       								                                                               
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                          
                                                        <div class="col-sm-4 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-img-container">
                                                            <img style="max-width: 200px;" src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/remote_keyless_philadelphia.jpg" alt="remote keyless in Philadelphia">
                                                        </div>
                                                        <div class="col-sm-6 col-md-5 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                            
                                                            <h3 style="color: #38393d;">Replacement Car Keys </h2>
                                                            <p>
                                                                Lost your car keys but can not afford to wait to order a new key or pay the dealer an expensive fee for getting a new key ? BucksLocks also provides a car key replacement service 
                                                                24 hours a day. Day or night, we can provide you with a fast mobile replacement key service for a fraction of what the dealer will charge you and the best
                                                                part is, we will come to you and save you the trip. BucksLocks can replace or originate your key within the hour. We carry the best and most advanced car keys and remote inventory and equipment
                                                                in the locksmith industry so most chances, we have key replacement solution on board.
                                                                
                                                            </p>                                                                                                                                                                                
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="hidden-desktop col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/install_new_lock.jpg" alt="install new lock">                                                       								                                                               
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         
                                                            <h4>Locks Replacement and Installation  </h4>
                                                            <p>
                                                               Our Locksmith services also include, locks installation and replacement in your home or business. All of our technicians carry in their van a wide range of locks to fit any type of door. 
                                                               From grade 3 locks to high security and smart locks, BucksLocks Locksmith professionals can provide you with a reliable service to install new locks on your door.
                                                            </p>                                                            
                                                        </div>
                                                        <div class="hidden-mobile col-sm-5 col-md-5 col-lg-4 col-lg-offset-0 service-section-img-container">	
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/install_new_lock.jpg" alt="install new lock">                                                       								                                                               
                                                        </div>
                                                    </div>                                                                                                                                                                                                                                                                    
                                                    
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-12  col-md-10 col-md-offset-1  col-lg-10 col-lg-offset-1 service-section-text-contianer" style="text-align: center">                                                         
                                                              <h3 style="font-size: 23px; margin: 20px 0 2px;">Some  of BucksLocks Locksmith Services: </h3>
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         

                                                            <ul class="list-unstyled">
                                                                
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Emergency road side locksmith service</li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> 24 hours residential locksmith</li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Digital access entry</li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Door lockouts </li>
                                                                
                                                                
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Keys For All Vehicles</li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Program Keyless Entry Keys</li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> 24 hr key replacement mobile service </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Make New Keys for All Keys Lost </li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Transponders </li>                                                                                                                                
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Program Keyless Remote </li>                                                                
                                                            </ul>                                                                                                                        

                                                        </div>
                                                        
                                                        <div class="col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 service-section-text-contianer" style="text-align: left">                                                         

                                                            <ul class="list-unstyled">
                                                            
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Rekey door locks</li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Locksmith 24/7 phone support</li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Fast Locksmith Service</li>
                                                                <li> <span class="glyphicon glyphicon-ok text-success"></span> Locks Installation and Repair</li>
                                                                
                                                                
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Laser Cut High Security Keys </li>                                                             
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> Open Keyless Locked Trunks </li>
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Chip Keys on Board Programming</li>                                                                                                                                                                              
                                                            <li> <span class="glyphicon glyphicon-ok  text-success"></span> Replace Entry Remote</li>
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> Repair Broken Car Keys</li>
                                                            <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace Ignition</li>
                                                            </ul>
                                                        </div>
                                                         <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">
                                                         And any other Locksmith service you need in Philadelphia or Bucks County PA…
                                                         </div>
                                                        
                                                    </div>                                                                                                        
						</div>
					</div>							
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

<?php } ?>