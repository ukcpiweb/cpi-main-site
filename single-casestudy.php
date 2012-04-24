<?php
/*
 * The template for displaying a case study item in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
	<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h2><a class="cpi-button" href="<?php bloginfo('url'); ?>/case-studies/">Case Studies</a> <?php echo $terms = get_the_term_list( $post->ID, 'casestudytype'); ?></h2></span>

</div>
	

	<section class="box-container" id="postPage">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div id="share">
			<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_email"></a>
<a class="addthis_button_linkedin"></a>
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_google_plusone" g:plusone:count="false"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f8fd85e198820c8"></script>
<!-- AddThis Button END -->

	</div>
	
		<h1><?php the_title(); ?></h1>
	
	<!-- Client Bio-->
<?php the_content(); ?>
	
	<!-- If Client Quote-->
	<?php if ( get_post_meta($post->ID, 'testimony', true) ) : ?>
		<div class="quote">
			<h3><?php echo get_post_meta($post->ID, 'clientperson', true); ?> says</h3>
			<blockquote>
				<?php echo get_post_meta($post->ID, 'testimony', true); ?>
			</blockquote>
		</div>	
	<?php endif; ?>
	
		<?php if ( get_post_meta($post->ID, 'testimonytwo', true) ) : ?>
		<div class="quote">
			<h3><?php echo get_post_meta($post->ID, 'clientpersontwo', true); ?> says</h3>
			<blockquote>
				<?php echo get_post_meta($post->ID, 'testimonytwo', true); ?>
			</blockquote>
		</div>	
	<?php endif; ?>

		<!-- If Achievements-->
	<?php if ( get_post_meta($post->ID, 'achievements', true) ) : ?>
		<?php echo get_post_meta($post->ID, 'achievements', true); ?>
	<?php endif; ?>
	
	<!-- If Client Website-->
	<?php if ( get_post_meta($post->ID, 'clientsite', true) ) : ?>
	<br/><br/>
	<a class="cpi-button" href="<?php echo get_post_meta($post->ID, 'clientsite', true); ?>" target="_blank">View <?php the_title(); ?> Website</a>
	<?php endif; ?>
	
	
	<?php edit_post_link( __( 'Edit Case Study' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    </section>
    
    <aside>
      
    
    <div class="aside-box">
    
    <!-- If Client Logo-->
    <?php if ( has_post_thumbnail() ) { ?>
  			
  				<div class="casestudyspace">
  				<?php if ( get_post_meta($post->ID, 'clientsite', true) ) : ?>
  				<a href="<?php echo get_post_meta($post->ID, 'clientsite', true); ?>" target="_blank"><?php endif; ?>
  			<?php the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); ?>
  				<?php if ( get_post_meta($post->ID, 'clientsite', true) ) : ?></a><?php endif; ?></div>
  	<?php } ?>
    
        <!-- If Download-->
    <?php if ( get_post_meta($post->ID, 'downloadlink', true) ) : ?>
    	<div class="casestudyspace"><a href="<?php echo get_post_meta($post->ID, 'downloadlink', true); ?>" class="cpi-button">Download <?php the_title(); ?> Case Study</a></div>
	<?php endif; ?>
    
    <!-- If Client Key Features-->
    <?php if ( get_post_meta($post->ID, 'keypoints', true) ) : ?>
    	<div class="casestudyspace"><h2>Key Features</h2>
    	<?php echo get_post_meta($post->ID, 'keypoints', true); ?></div>
    <?php endif; ?>
    
        <!-- If Client Key Features-->
    <?php if ( get_post_meta($post->ID, 'keypointstech', true) ) : ?>
    	<h2>Key Technical Features</h2>
    	<?php echo get_post_meta($post->ID, 'keypointstech', true); ?>
    <?php endif; ?>
    
    <!-- If Client Video-->
    <?php if ( get_post_meta($post->ID, 'youtubelink', true) ) : ?>
    	<h2><?php echo get_post_meta($post->ID, 'youtubetitle', true); ?></h2>
    	<iframe width="270" height="183" src="<?php echo get_post_meta($post->ID, 'youtubelink', true); ?>" frameborder="0" allowfullscreen></iframe>
	<?php endif; ?>
    
    
    </div>
    <?php if ( get_post_meta($post->ID, 'phonenumber', true) ) : ?>
    <div class="aside-box aside-right"><h3>For more information call:<br />
<?php echo get_post_meta($post->ID, 'phonenumber', true); ?></h3></div>
<?php endif; ?>
    </aside>
	
<?php get_footer(); ?>