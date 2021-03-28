<?php
/**
 *	The template for displaying divider section
 *  .
 *	params : 
 *  	* image 
 		* link
 */
?>

<div class="row" style="background-color: white" >
	<div class="container center badge-divider-container" style="padding-bottom: 35px; color: white; padding-top: 12px;">
		<a href="<?php echo $args['link'];?>" class="badge-image-link">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/layout/images/<?php echo $args['image'];?>" alt="badge image""/>
			<br/>
			<span> Click to learn more ..</span>
		</a>
    </div>
</div>

<style type="text/css">
	.badge-divider-container {
		color: white; 
	}

	.badge-image-link img {
		width: 100%;
		max-width: 260px;
	}

	.badge-image-link span {
		line-height: 40px;
	    color: #38393d;
	    font-size: 1.2em;
	}
	
}
</style>