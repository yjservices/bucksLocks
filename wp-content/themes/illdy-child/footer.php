<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php

if ( current_user_can( 'edit_theme_options' ) ) {
	$footer_copyright  = get_theme_mod( 'illdy_footer_copyright', __( '&copy; Copyright 2016. All Rights Reserved.', 'illdy' ) );
} else {
	$footer_copyright  = get_theme_mod( 'illdy_footer_copyright', __( '&copy; Copyright 2016. All Rights Reserved.', 'illdy' ) );
}
?>
<footer id="footer" class="page-footer center-on-small-only">
<div class="container center">

	<div id="">
                    <div id="call-us-text">
                        <h3><span>Need a Locksmith?</span> <span class='small-call-us-text'>Don't wait, Call now for fast service.</span></h3>
                        <a href="tel:(267) 560-7065" onclick="gtag('event', 'click', {'event_category' : 'footer','event_label' : 'footer-devider);"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a>
                    </div>
	</div>

</div>

<div class="bottom-footer">
    
    <div class="text-center">                                       
        <div id="mapAddress" class="map" style="position: relative; overflow: hidden;
        width: 100%;">
            
        </div>
    </div>
           
                    
    </div>
    <div id="bottom-footer-section" class="stylish-color-dark">
 <!--Footer Links-->
    <div class="container">
        <div class="row">
<!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3" style="top: 4px;">
                <h6 class="title font-bold"><strong>Contact</strong></h6>              
                <p><i class="fa fa-home mr-3"></i>2097 B Red Lion Rd. Philadelphia, PA 19115, US</p>
                <p><i class="fa fa-home mr-3"></i> Newtown, PA 18940, US</p>
                <p><i class="fa fa-envelope mr-3"></i> buckslocks@gmail.com</p>
                <p><i class="fa fa-phone mr-3"></i> 267-560-7065</p>             
            </div>
            <!--/.Fourth column-->
            <!--First column-->
            <div class="col-md-4">
                <h5 itemprop="name" class="title mb-4 mt-3 font-bold">BucksLocks</h5>
                <p>Professional Locksmith service in Bucks County and Philadelphia, PA. 24 hours a day, 7 days a week, 365 days a year. Call today to make an appointment.</p>
            </div>
            <!--/.First column-->

             <!--Second column-->
            <div class="col-md-2 mx-auto" id="useful-link-div">
                <h5 class="title mb-4 mt-3 font-bold">USEFUL LINKS</h5>
                <ul style="list-style-type: initial;">                   
                    <li><a href="/buckslocks.com/locksmith-in-philadelphia/"></a>Locksmith in Philadelphia 
                        <ul>
                            <li><a href="/buckslocks.com/automotive-locksmith-philadelphia/">Automotive Locksmith in Philadelphia</a></li>
                            <li><a href="/buckslocks.com/replacement-car-keys-philadelphia-pa/">Car Keys in Philadelphia</a></li>
                            <li><a href="/buckslocks.com/residential-locksmith-philadelphia/">Residential Locksmith in Philadelphia</a></li>
                            <li><a href="/buckslocks.com/commercial-locksmith-philadelphia/">Commercial Locksmith in Philadelphia</a></li>
                        </ul>
                    </li>
                    <li><a href="">Locksmith in Newtown</a> 
                        <ul>
                            <li><a href="/buckslocks.com/automotive-locksmith-newtown-pa/">Automotive Locksmith in Newtown</a></li>                            
                            <li><a href="/buckslocks.com/residential-locksmith-newtown-pa/">Residential Locksmith in Newtown</a></li>
                            <li><a href="/buckslocks.com/commercial-locksmith-newtown-pa/">Commercial Locksmith in Newtown</a></li>
                        </ul>
                    </li>
                    <li><a href="/buckslocks.com/car-keys-horsham-pa/">Car Keys in Horsham</a></li>                    
                </ul>
            </div>                          
            <!--/.Second column-->
            
         
        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class="social-section text-center">
        <ul>
            <li><a class="btn-floating btn-sm btn-fb" href="https://www.facebook.com/buckslocks/" target="_blank"><i class="fa fa-facebook"> </i></a></li>
            <li><a class="btn-floating btn-sm btn-tw" target="_blank"><i class="fa fa-twitter"> </i></a></li>
            <li><a class="btn-floating btn-sm btn-gplus" href="https://plus.google.com/b/113707017012877172913/" target="_blank"><i class="fa fa-google-plus"> </i></a></li>
            <li><a class="btn-floating btn-sm btn-li" target="_blank"><i class="fa fa-linkedin"> </i></a></li>
            <li><a class="btn-floating btn-sm btn-dribbble" target="_blank"><i class="fa fa-dribbble"> </i></a></li>
           
        
      <div class="yelp-button" id="yelp-biz-badge-rrc-NlH-Alp7zP2SnTCJGKoWSg"><a  onclick="this.target='_blank'" href="http://yelp.com/biz/buckslocks-newtown?utm_medium=badge_star_rating_reviews&amp;utm_source=biz_review_badge">Check out BucksLocks on Yelp</a></div>    <script>(function(d, t) {var g = d.createElement(t);var s = d.getElementsByTagName(t)[0];g.id = "yelp-biz-badge-script-rrc-NlH-Alp7zP2SnTCJGKoWSg";g.src = "//yelp.com/biz_badge_js/en_US/rrc/NlH-Alp7zP2SnTCJGKoWSg.js";s.parentNode.insertBefore(g, s);}(document, 'script'));</script>
    </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2020 Copyright: BucksLocks.com
        </div>
    </div>
    <!--/.Copyright-->
    </div>
	
	
</footer></span><!--/#footer-->
<?php wp_footer(); ?>
<script>
    
	    
    
        
        function initMap() {
                 
            var phillyInfo = '<strong>BucksLocks Philadelphia</strong><br>\r\ 2097B Red Lion Rd<br> Philadelphia, PA 19115<br>';
            var newtownInfo = '<strong>BucksLocks Newtown</strong><br>\r\ 22 S State St<br> Newtown, PA 18940<br>';
            var myLocation = new google.maps.LatLng(40.2,-75.0158721);
            var mapOptions = {
                center: myLocation,
                zoom: 10
            };
            
            var myLocationPhilly = new google.maps.LatLng(40.0974205,-75.0158721);
            var markerPhilly = new google.maps.Marker({
                position: myLocationPhilly,
                title: "BucksLocks"
            });
            var map = new google.maps.Map(document.getElementById("mapAddress"),
                mapOptions);
            markerPhilly.setMap(map);
            var infowindow = new google.maps.InfoWindow({});
            google.maps.event.addListener(markerPhilly, 'click', (function () {
			return function () {
				infowindow.setContent(phillyInfo);
				infowindow.open(map, markerPhilly);
			}
		})(markerPhilly));
            
            
            var myLocationBucks = new google.maps.LatLng(40.2284174,-74.9370496);
            var markerBucks = new google.maps.Marker({
                position: myLocationBucks,
                title: "BucksLocks"
            });
            markerBucks.setMap(map);
            google.maps.event.addListener(markerBucks, 'click', (function () {
			return function () {
				infowindow.setContent(newtownInfo);
				infowindow.open(map, markerBucks);
			}
		})(markerBucks));
               
        }
	
    jQuery(document).ready(function($){
        $('#mobile-phone-button').show();
        
        $('#header').appear();
        $('#footer').appear();
        $('#header').on('disappear', function(event, $all_disappeared_elements) {        
          $('#mobile-phone-button').show();
        });    
        $('#header').on('appear', function(event, $all_disappeared_elements) {        
          $('#mobile-phone-button').hide();
        });   
        $('#footer').on('disappear', function(event, $all_disappeared_elements) {        
          $('#mobile-phone-button').show();
        });
        $('#footer').on('appear', function(event, $all_disappeared_elements) {        
          $('#mobile-phone-button').hide();
        });
    });
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY7Y5bCVPxMSl4S3DuR2pn4QWFvoSFvtc&callback=initMap">
</script>
</body>
</html>