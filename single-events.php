<?php
/*
 * The template for displaying a case study item in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
	<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h2><a class="cpi-button" href="<?php bloginfo('url'); ?>/events/">Events</a> <?php echo $terms = get_the_term_list( $post->ID, 'casestudytype'); ?></h2></span>

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
	
	<div class="figure">
		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?>
	</div>
	
	<!-- Dev comment do this later -->
	<?php
    $custom = get_post_custom(get_the_ID());
    $sd = $custom["tf_events_startdate"][0];
    $ed = $custom["tf_events_enddate"][0];
    $st = $custom["tf_events_starttime"][0];
    $et = $custom["tf_events_endtime"][0];
   
    $longdatestart = date("D jS, M, Y", $sd);
    $longdateend = date("D jS, M, Y", $ed);
    
    $time_format = get_option('time_format');
    
    $starttime = date($time_format, $st);
    $endtime = date($time_format, $et);
    ?>
		
	<?php the_content(); ?>
	
	
	    <!-- If Agenda-->
    <?php if ( get_post_meta($post->ID, 'agenda', true) ) : ?>
    	<h2>Agenda</h2> <?php echo get_post_meta($post->ID, 'agenda', true); ?>
    <?php endif; ?>
	
	
	<!-- If Event Website-->
	<?php if ( get_post_meta($post->ID, 'eventwebsite', true) ) : ?>
		<br /><a class="cpi-button" href="<?php echo get_post_meta($post->ID, 'eventwebsite', true); ?>" target="_blank">View event website</a>
	<?php endif; ?>
	
	
	<?php edit_post_link( __( 'Edit Case Study' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    </section>
    
    <aside>
    
    <div class="aside-box">
   	<h3>Event Information</h3><br/>     
    <strong>Start Date:</strong> <?php echo $longdatestart ; ?>
    <?php echo $starttime ; ?>
    <br />
	<strong>End Date:</strong> <?php echo $longdateend ; ?>
	<?php echo $endtime ; ?>
    
    
    <!-- If Location-->
    <?php if ( get_post_meta($post->ID, 'location', true) ) : ?>
     <br /><br />
    	<strong>Location:</strong> <br/><?php echo get_post_meta($post->ID, 'location', true); ?>
    <?php endif; ?>
    
    
    
    </div>
    
    <div class="aside-box">
    
    <?php if ( get_post_meta($post->ID, 'download', true) ) : ?>
    	<a class="cpi-button" href="<?php echo get_post_meta($post->ID, 'download', true); ?>"><h3>Download flyer</h3></a>
    	    <br/><br/>
    <?php endif; ?>
   
    <?php if ( get_post_meta($post->ID, 'registration_link', true) ) : ?>
    	<a class="cpi-button" href="<?php echo get_post_meta($post->ID, 'registration_link', true); ?>"><h3>Register for event</h3></a>
    	
    <?php endif; ?>
       
    <?php if ( get_post_meta($post->ID, 'contact_info', true) ) : ?>
    <br/><br/>       
    <h3>Event contact</h3>
    	<?php echo get_post_meta($post->ID, 'contact_info', true); ?>
		<?php endif; ?>
    </div>
    </aside>
	
<?php get_footer(); ?>