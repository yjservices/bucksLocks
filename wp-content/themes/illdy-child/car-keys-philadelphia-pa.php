<?php
/*
* Template Name: car-keys-philadelphia
*/
function metaDescription() {
    ?>
        <meta name="keywords" content="best car keys in Philadephia PA, best Key to my Honda, Mobile best car keys services in Philadelhia, Philadelhia- best car keys, Philadelphia PA lost keys, replacemnet Keys to vehicle o my Ford,lost keys  keys in Philadelphia, replace lost car key in Philadelphia, originate lost car keys philadelphia, lost chip car key, program new lost keys, duplicate car keys, Lost transponder key, auto lost keys solutions, affordable replacement of lost car keys in philadelphia, cut new car keys, lost Key to my Jeep, Buckslocks in Philadelphia PA, Spare car key Philadelphia, keyless remote">
        <meta name="description" content="Lost car keys? BucksLocks offers lost car key services in Philadelphia at affordable prices for 24 hours a day anywhere in Philadelphia. We not only offer cost-effective car key replacement services but also get the job done much quicker than other expensive dealers in Philadelphia. Reliable and Dependable Service.">    
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

            </div><!--/.row-->
        </div><!--/.container-->
                <div id="header-title-text">      
                    <h3>Best Car Keys Service in Philadelphia!</h3>
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

    <?php
    if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ):
        get_template_part( 'sections/front-page', 'bottom-header' );
    else:
        get_template_part( 'sections/blog', 'bottom-header' );
    endif;
    ?>
</header><!--/#header-->
<div id="header-title-text-mobile">        
    <h3 style="font-size: 2em">Best Car Keys Service in Philadelphia!</h3>
    <h4>Available 24 Hours 7 Days a Week.</h4>
    <h4>Reliable and Dependable Service.</h4>
    <p>Call now! Immediate Response! </p>
    <div class="cta-hedear-title">                
        <div class="header-contact">                            
            <p><a href="tel: (267) 560-7065" onclick="gtag('event', 'click', {'event_category' : 'header-contact','event_label' : 'header_category - car keys PH call'});"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a></p>
        </div>            
    </div>
</div>
<div id="mobile-phone-button" onclick="gtag('event', 'click', {'event_category' : 'float_button','event_label' : 'float_button - car keys PH call'});">
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
                                    <h2 class="header-section-text service-page">Car Keys Replacement in Philadelphia</h2>                          
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
                                    <p> At BucksLocks, we provide an easy and affordable way to replace your car keys. </p>
                                    
                                  <p>
                                      BucksLocks is the best car keys replacement mobile service in Philadelphia. We offers car key replacements at affordable prices for 24 hours every day anywhere in Philadelphia. Well, you don’t need to pay so much to a dealer to get a new key. The great thing about our
                                    service is that we produce keys that will always work flawlessly without damaging your
                                    ignition.
                                  </p>
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
                                <div class="col-sm-12  col-md-10 col-md-offset-1  col-lg-10 col-lg-offset-1 service-section-text-contianer" style="text-align: center">                            
                                       <h4 style="font-size: 21px;">Looking for mobile car keys service in Philadelphia? Worry no more! </h4>
                                  <h5>Our services include: </h5>    
                                </div>
                                
                                <div class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 service-section-text-contianer" style="text-align: left">                                                         
                                    <ul class="list-unstyled">
                                        
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Replace keys for ALL Makes and Models </li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> ReKey All Automotive Locks </li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Duplicate car keys </li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Transponder Chip Key Service </li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Program Keyless Entry Devices </li>                                                                
                                    </ul>                                    
                                </div>
                                <div class="col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 service-section-text-contianer" style="text-align: left">
                                    <ul class="list-unstyled">
                                        <li> <span class="glyphicon glyphicon-ok  text-success"></span> Replace Lost all Keys </li>        
                                        <li> <span class="glyphicon glyphicon-ok  text-success"></span> Chip Keys Programming</li>                                         
                                        <li> <span class="glyphicon glyphicon-ok  text-success"></span> Replace Keyless Entry Remote</li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> Repair Broken Car Keys</li>
                                        <li> <span class="glyphicon glyphicon-ok text-success"></span> High Security Car Keys</li>
                                    </ul>
                                </div>
                                <div class="col-sm-11 col-sm-offset-1 service-section-text-contianer" style="text-align: left">
                                 And any other key services you need in Philadelphia PA…
                                 </div>
                            </div>        
                        </div>
                    </div>
                </section>
            <?php 
        endwhile;
    endif;
        ?>
        
<?php
    $args = array( 'mapEnabled' => true,
    'page' => 'car keys phila' );
    get_footer("short", $args); 
?>