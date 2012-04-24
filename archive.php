<?php
/*
 * The template for displaying a news items in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
	<span class="section-title"><h2>News</h2></span>
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<section class="box-container news-item" id="postPage">
	
	<div id="meta">
	<div id="date"><b><?php the_time('jS F Y') ?></b> Last updated: <?php the_modified_time('jS F Y');?> </div>
	</div>
	</div>
	
	<h1><?php the_title(); ?></h1>
	
	<div class="figure">
		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?>
	</div>

	<?php the_excerpt(); ?>
	<?php edit_post_link( __( 'Edit News Item' ), '<span class="edit-link">', '</span>' ); ?>
    
    </section>
    <?php endwhile; // end of the loop. ?>
    
    	
<?php get_footer(); ?>
	
