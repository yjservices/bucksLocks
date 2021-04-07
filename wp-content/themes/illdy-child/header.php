<?php
/**
 *    The template for displaying the header.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
$logo_id                   = get_theme_mod( 'custom_logo' );
$logo_image                = wp_get_attachment_image_src( $logo_id, 'full' );
$text_logo                 = get_theme_mod( 'illdy_text_logo', __( 'Illdy', 'illdy' ) );
$jumbotron_general_image   = get_theme_mod( 'illdy_jumbotron_general_image', esc_url( get_template_directory_uri() . '/layout/images/front-page/front-page-header.png' ) );
$jumbotron_single_image    = get_theme_mod( 'illdy_jumbotron_enable_featured_image', false );
$jumbotron_parallax_enable = get_theme_mod( 'illdy_jumbotron_enable_parallax_effect', true );
$preloader_enable          = get_theme_mod( 'illdy_preloader_enable', 1 );

$style = '';

$pagename = get_query_var('pagename');
if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ) {
	if ( $jumbotron_general_image ) {
		$style = 'background-image: url(' . esc_url( $jumbotron_general_image ) . ');';
	}
} else if ( ( is_single() || is_page() ) && $jumbotron_single_image == true ) {

	global $post;
	if ( has_post_thumbnail( $post->ID ) ) {
		$style = 'background-image: url(' . esc_url( get_the_post_thumbnail_url( $post->ID, 'full' ) ) . ');';
	}else {
		$style = 'background-image: url(' . get_header_image() . ');';
	}
} else {
	$style = 'background-image: url(' . get_header_image() . ');';
}

$url = get_theme_mod( 'header_image', get_theme_support( 'custom-header', 'default-image' ) );

// append the parallax effect
if ( $jumbotron_parallax_enable == true ) {
	$style .= 'background-attachment: fixed;';
}

if ( ( is_single() || is_page() || is_archive() ) && get_theme_mod( 'illdy_archive_page_background_stretch' ) == 2 ) {
	$style .= 'background-size:contain;background-repeat:no-repeat;';
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105576164-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-105576164-1');
</script>

    <link rel="Locksmith 24 hrs icon" href="<?php echo get_stylesheet_directory_uri(); ?>/layout/images/buckslocks_locksmith_fav.png" type="image/x-icon">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/layout/images/24hours_img.png">    

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <span><div id="header-logo-contianer">
        <div id="hours-img">
                <img itemprop="image" alt="24 hours locksmith service logo" src="<?php echo get_stylesheet_directory_uri(); ?>/layout/images/24hours_img.png" width="100%" height="auto"/>
        </div>
        <div id="logo-container" class="container" >
            <div class="row">
                <div class="header-left col-sm-4 col-xs-12 text-center">
                    <a href="<?php echo esc_url( home_url() )  ?>" title="BucksLocks" class="header-logo"><img alt="BucksLocks logo" id="logo-lock-img" src="<?php echo get_stylesheet_directory_uri(); ?>/layout/images/buckslocks_logo.png" width="100%" height="auto"/></a>
                </div>                    
                <div class="header-right">                
                    <div class="header-contact">
                        <p>Open 24 Hours</p>
                        <p><a href="tel: (267) 560-7065"><i class="fa fa-phone fa-flip-horizontal"></i><span itemprop="telephone" content="2675607065"> (267) 560-7065</span></a></p>
                    </div>            
                </div>
            </div><!--/.row-->
        </div>
    </div> 
        
<?php if ( is_front_page() ): ?> 
<div id="header-cover-box" style=""></div>
<header id="header" class="<?php if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ): echo 'header-front-page';
else: echo $pagename; endif; ?>" style="<?php echo $style ?>" title="BucksLocks Locksmith">
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
                    <h3>Locksmith in <span >Philadelphia, Bucks County </span> <span >PA</span> and its Surroundings.</h3>
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
    <h3>Locksmith in Philadelphia, Bucks County PA and its Surroundings.</h3>
    <h4>Available<span itemprop="openingHours" content="Mo-Su"> 24 Hours 7 Days a Week.</span></h4>
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
<?php endif;
?>