<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<footer id="footer" class="page-footer center-on-small-only">
    <div class="container center" style="padding-bottom: 35px;">
    	<div id="">
            <div id="call-us-text">
                <h3><span>Lost your car keys ?</span> <span class='small-call-us-text'>Don't wait, Call now for fast service.</span></h3>
                <a href="tel:(267) 560-7065" onclick="gtag('event', 'click', {'event_category' : 'footer-short','event_label' : 'footer-short-devider);"><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a>
            </div>
    	</div>
    </div>   
    <?php if ($args['mapEnabled']){ ?>
        <div class="text-center">                                       
            <div id="mapAddress" class="map" style="position: relative; overflow: hidden;
            width: 100%;">
            
            </div>
        </div>
    <?php }  ?> 

    <div id="bottom-footer-section" class="stylish-color-dark">
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
    <?php if ($args['mapEnabled']){ ?>
        function initMap() {
                     
                var phillyInfo = '<strong>BucksLocks Philadelphia</strong><br>\r\ 2097B Red Lion Rd<br> Philadelphia, PA 19115<br>';
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
        }
    <?php } ?>

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
<?php if ($args['mapEnabled']){ ?>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY7Y5bCVPxMSl4S3DuR2pn4QWFvoSFvtc&callback=initMap">
</script>
 <?php } ?>
</body>
</html>