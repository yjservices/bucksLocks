<?php
/*
* Template Name: BucksLocksLocksmithHome-page
*/

function metaDescription() {
    ?>
         <meta name="keywords" content="Locksmith, Locksmith in Bucks County PA, Commercial Locksmith,bucks County PA, Residential Locksmith, emergency Locksmith, 24/7 Locksmith, car lockouts, Automotive Locksmith services, access entry, proffesional locksmith, Around the clock Locksmith, door lockouts, high security locks, vehicle lockouts PA, locksmith 18940, car key replacement service, Mobile locksmith, around me locksmith">
        <meta name="description" content="Locksmith services in Bucks County, PA. At BucksLocks, we offer a wide range of Locksmith services. Lost your keys, need a high security door lock for your business, need to install security system or just looking for a lockout service in Bucks County, PA. Look no more, BucksLocks strives to provide superior Locksmith aid 24/7, 365 days a year. We offer Residential, Commercial and Automobile proffesioanl Locksmith service to Bucks county and its surroundings.
              call us at (267)560-7065">
    <?php
}
add_action('wp_head', 'metaDescription');


get_header();
?>
 
        
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
        
        <section id="about" class="front-page-section" style="<?php if( !$general_title && !$general_entry ): echo 'padding-top: 130px;'; endif; ?>">
	
		<div class="section-header">
			<div class="container">
				<div class="row">
					
						<div class="col-sm-10">
                                                    <div class="section-description" style="margin: initial; text-align: left;">
                                                            <h3>About</h3>
                                                            <span style="">At BucksLocks, we offer a wide range of security and locksmith services to Bucks County PA.</span><br/>
                                                            Our technicians will make sure you get fast and professional Locksmith service like nowhere else.
                                                            We strive to provide superior aid 24 hours a day, 7 days a week, 365 days a year.
                                                            Promise No Extra Charges or Hidden Fees.<br/>
                                                            Day or night, we're always available for you.
                                                            
                                                            <div>
                                                                <h3 style="font-size: 23px; margin: 20px 0 2px;">24/7 Locksmith Services</h3>
                                                                We care deeply about our professional ability to help people out. It’s what gets us out of bed whenever you call, and why we work tirelessly to be the most reliable locksmith in Bucks County PA. We know that you need access to your home, business and/or vehicle and as such we waste little time in putting together a plan of action to solve your issue without any fuss or stress.
                                                                So, if you are sick of having to spend an excessive part of the day cleaning up after yourself and chasing around trying to find an alternative route into your property/vehicle, contact us today. We can quickly put in place a BucksLocks locksmith solution in the Bucks County area that will get the doors open and the access you need.
                                                                We also provide huge security locks and other large-scale security lock installations. This helps us to give you peace of mind that you can get in and out of anywhere you need access to, all the while giving you professional locksmith help and assistance that you could need to get back in without any time being wasted or stress building up.
                                                                So, don’t let that broken lock or security incident put you in a bad place. Contact BucksLocks today, and we’ll deliver the kind of comprehensive locksmith services in Bucks County, PA that you can benefit from immediately!
                                                                Call us on (267)560-7065, and we’ll be there as soon as we can to assist. 
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
	illdy_sections();
endif;
get_footer(); ?>