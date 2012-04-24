<?php
/*
 * The template for displaying events in the CPI INNOVATOR THEME
 */

get_header(); ?>
		
<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1>Events</h1></span>

	<?php include 'reuse/casestudy-filter.php'; ?>
	
</div>
		

<?php $counter =0; ?>


<?php

 $querystr = "
    SELECT $wpdb->posts.* 
    FROM $wpdb->posts, $wpdb->postmeta
    WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id 
    AND $wpdb->postmeta.meta_key = 'tf_events_startdate' 
    AND $wpdb->posts.post_status = 'publish'
    AND $wpdb->posts.post_type = 'events'
    ORDER BY $wpdb->postmeta.meta_value ASC
 ";

 $pageposts = $wpdb->get_results($querystr, OBJECT);

?>
 <?php if ($pageposts): ?>
  <?php global $post; ?>
  <?php foreach ($pageposts as $post): ?>
    <?php setup_postdata($post); 
    $custom = get_post_custom(get_the_ID());
    $sd = $custom["tf_events_startdate"][0];
   
    $longdate = date("D jS, M, Y", $sd);
    ?>
	

<?php
  ++$counter;
  if($counter == 3) {
    $postclass = 'third-post';
    $counter = 0;
  } else { $postclass = ''; }
?>
	<section class="eventPost <?php echo $postclass; ?>">
	
	<div class="meta">	
	<div class="day"><b><?php echo $longdate ; ?></b></div>
	</div>
	
	<div class="figure">
		<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?></a>
	</div>
	
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h2>

	<?php the_excerpt(); ?>
    
    </section>
<?php endforeach; ?>
<?php endif; ?>


<div id="navbox">
<div id="previousePage"><?php previous_posts_link( '&#171; Previous Page' , 0 ); ?></div> 
<?php kriesi_pagination(); ?>
<div id="nextPage"><?php next_posts_link('Next Page &raquo;', 0); ?></div>
</div>

    	
<?php get_footer(); ?>