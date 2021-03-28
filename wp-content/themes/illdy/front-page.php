<?php
/**
 *	The template for displaying the front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
get_header();
?>
<!--<section id="prices" class="front-page-section" style="padding-top: 130px;">
	
		<div class="section-header">
			<div class="container">
				<div class="row">
					
                                    <div class="col-sm-12">
                                        <h3 class="section-header-title"><span class="black-text">Our</span> Pricing</h3>
                                    </div>/.col-sm-12
								
				</div>/.row
        <section>            
                            
            <div class="pricing-box pricing-table one-third">
                <header class="header">
                    <div class="title">Commercial</div>
                    <div class="price">
                        <span>$19/ Service Call</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>5</strong> Users</li>
                    <li><strong>10</strong> Forms</li>
                    <li><strong>20</strong> Reports</li>
                    <li><strong>500</strong> Entries / Month</li>
                    <li>—</li>
                    <li>—</li>
                    <li><strong>3 GB</strong> Storage</li>
                </ul> 
            </div>
            
            <div class="pricing-box pricing-table one-third">
                <header class="header">
                    <div class="title">Automotive</div>
                    <div class="price">
                        <span>$19/ Service Call</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>20</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>3,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>15 GB</strong> Storage</li>
                </ul> 
            </div>
            
            <div class="pricing-box pricing-table featured one-third">
                <header class="header">
                    <div class="title">Residential</div>
                    <div class="price">
                        <span>$19/ Service Call</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>60</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>15,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>40 GB</strong> Storage</li>
                </ul> 
            </div>                      
        </section>
			</div>/.container
		</div>/.section-header		
</section>/#prices section-->

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
	illdy_sections();
endif;
get_footer(); ?>