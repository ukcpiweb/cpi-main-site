<?php
/*
 * The template for displaying a project item in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
	<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h2><a class="cpi-button" href="<?php bloginfo('url'); ?>/projects/">Projects</a> <?php echo $terms = get_the_term_list( $post->ID, 'technology-project'); ?></h2></span>

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
	
	<!-- If Project Blurb-->
	<?php if ( get_post_meta($post->ID, 'about', true) ) : ?>
		<?php echo get_post_meta($post->ID, 'about', true); ?>
	<?php endif; ?>
	
	<!-- If Participant Quote-->
	<?php if ( get_post_meta($post->ID, 'testimony1', true) ) : ?>
		<div class="quote">
			<h3><?php echo get_post_meta($post->ID, 'participant1', true); ?> says</h3>
			<blockquote>
				<?php echo get_post_meta($post->ID, 'testimony1', true); ?>
			</blockquote>
		</div>	
	<?php endif; ?>
	
	<?php if ( get_post_meta($post->ID, 'testimony2', true) ) : ?>
		<div class="quote">
			<h3><?php echo get_post_meta($post->ID, 'participant2', true); ?> says</h3>
			<blockquote>
				<?php echo get_post_meta($post->ID, 'testimony2', true); ?>
			</blockquote>
		</div>	
	<?php endif; ?>


<?php if ( get_post_meta($post->ID, 'testimony3', true) ) : ?>
		<div class="quote">
			<h3><?php echo get_post_meta($post->ID, 'participant3', true); ?> says</h3>
			<blockquote>
				<?php echo get_post_meta($post->ID, 'testimony3', true); ?>
			</blockquote>
		</div>	
	<?php endif; ?>

	
	<?php the_content(); ?>
	
	<!-- If Client Website-->
	<?php if ( get_post_meta($post->ID, 'projectsite', true) ) : ?>
	<a class="cpi-button" href="<?php echo get_post_meta($post->ID, 'projectsite', true); ?>" target="_blank">View <?php the_title(); ?> Website</a>
	<?php endif; ?>
	
	
	<?php edit_post_link( __( 'Edit Project' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    </section>
    
    <aside>
      
    
    <div class="aside-box">
    
    <!-- If Client Logo-->
    <?php if ( has_post_thumbnail() ) { ?>
  			
  				<a href="<?php echo get_post_meta($post->ID, 'projectsite', true); ?>" target="_blank">
  			<?php the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); ?>
  				</a>
  			 
  	<?php } ?>
    
    <!-- If Client Key Features-->
    <?php if ( get_post_meta($post->ID, 'keyfeatures', true) ) : ?>
    	<h2>Key Features</h2>
    	<?php echo get_post_meta($post->ID, 'keyfeatures', true); ?>
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
    
    <div class="aside-box"><h3>For more information:<br />Call: +44 (0)1740 625 700<br /> Email: <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>

    </aside>
	
<?php get_footer(); ?>