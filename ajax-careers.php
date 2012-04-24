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
Template Name: ajax-careers
*/
?>
<?php
	$post = get_post($_POST['id']);
?>
<?php if ($post) : ?>
	<?php setup_postdata($post); ?>

		<h2><?php the_title(); ?></h2>

	<?php if ( get_post_meta($post->ID, 'refrence', true) ) : ?>
		<h4><strong>Ref No.:</strong> <?php echo get_post_meta($post->ID, 'refrence', true); ?></h4>
	<?php endif; ?>
	
	<?php if ( get_post_meta($post->ID, 'salary', true) ) : ?>
		<h4><strong>Salary:</strong> <?php echo get_post_meta($post->ID, 'salary', true); ?></h4>
	<?php endif; ?>
	
	<?php if ( get_post_meta($post->ID, 'employmenttype', true) ) : ?>
		<h4><strong>Employment Type:</strong> <?php echo get_post_meta($post->ID, 'employmenttype', true); ?></h4>
	<?php endif; ?>
	
	<?php if ( get_post_meta($post->ID, 'location', true) ) : ?>
		<h4><strong>Location:</strong> <?php echo get_post_meta($post->ID, 'location', true); ?></h4>
	<?php endif; ?>
	
	<?php if ( get_post_meta($post->ID, 'enddate', true) ) : ?>
		<h4><strong>Deadline:</strong> <?php echo get_post_meta($post->ID, 'enddate', true); ?></h4>
	<?php endif; ?>


		<p><?php the_content(); ?></p>
		
		<?php if ( get_post_meta($post->ID, 'additionalinfo', true) ) : ?>
			<h2 class="trigger"><a href="#">Additional Information</a></h2> 
			<div class="toggle_container">
				<p><?php echo get_post_meta($post->ID, 'additionalinfo', true); ?></p>
			</div> 
		<?php endif; ?>
		<p>
			<!-- <a href="" class="cpi-button">Download Job Profile</a> -->
			<a href="<?php bloginfo('url'); ?>/send-in-your-cv/" class="cpi-button">Send in your CV</a>
		</p>
<?php endif; ?>
