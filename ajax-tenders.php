		<script type="text/javascript">
$(document).ready(function(){

// Accordion Menu

//Hide (Collapse) the toggle containers on load
	$(".toggle_container").hide(); 

	//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
	$("h2.trigger").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow");
		return false; //Prevent the browser jump to the link anchor
	});
});
</script>
<?php
/*
Template Name: ajax-tenders
*/
?>
<?php
	$post = get_post($_POST['id']);
?>
<?php if ($post) : ?>
	<?php setup_postdata($post); ?>

		<h2><?php the_title(); ?></h2>
		 
 		<p>
			<a href="<?php bloginfo('url'); ?>/register-your-interest/" class="cpi-button">Register your interest</a>
		</p>
 
 		<?php if ( get_post_meta($post->ID, 'enddate', true) ) : ?>
 		<h4>Closing Date: <?php echo get_post_meta($post->ID, 'enddate', true); ?></h4>
 		<?php endif; ?>
 		
		<p><?php the_content(); ?></p>
		
		<?php if ( get_post_meta($post->ID, 'additionalinfo', true) ) : ?>
			<h2>Additional Information</h2>
			
			
				<p><?php echo get_post_meta($post->ID, 'additionalinfo', true); ?></p>
			
		<?php endif; ?>
		
<?php endif; ?>
