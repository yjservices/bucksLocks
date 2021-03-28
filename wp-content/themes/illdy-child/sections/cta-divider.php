<?php
/**
 *	The template for displaying divider section
 *  .
 *	params : 
 *  	* questionSentence 
 		* secondSentece
 */
?>

<div class="row" style="background-color: #3487C2" >
	<div class="container center cta-divider-container" style="padding-bottom: 35px; color: white; padding-top: 12px;">
            <div id="call-us-text">
                <h3><span><?php echo  $args['questionSentence']; ?></span> <span class='small-call-us-text'><?php echo $args['secondSentece']; ?></span></h3>
                <a href="tel:(267) 560-7065" onclick="gtag('event', 'click', {'event_category' : 'cta-divider','event_label' : 'cta-divider <?php echo  $args['page']; ?>'});><i class="fa fa-phone fa-flip-horizontal"></i> (267) 560-7065</a>
            </div>
    </div>
</div>

<style type="text/css">
	.cta-divider-container {
		padding-bottom: 35px;
		color: white; 
		padding-top: 16px;
	}
	
	#call-us-text a {
	    line-height: 1em;
	    font-size: 30px;
    	margin-bottom: 0.75em;
    	color: white;
	}

	.small-call-us-text {
	    font-weight: 100;
	    font-size: 90%;
	}
	#call-us-text h3 {
	    line-height: 1em;
	    font-size: 25px;
	    margin-bottom: 0.75em;
	}
}
</style>