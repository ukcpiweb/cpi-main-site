<?php
/*
 * The template for displaying project items in the CPI INNOVATOR THEME
 */

get_header(); ?>
		
<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1>Projects</h1></span>

	<?php include 'reuse/project-filter.php'; ?>
	
</div>
		

<?php $counter =0; ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php
  ++$counter;
  if($counter == 3) {
    $postclass = 'third-post';
    $counter = 0;
  } else { $postclass = ''; }
?>
	<section class="box-container archivePost <?php echo $postclass; ?>">
	
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h2>
	<div class="meta">
	<div class="date"><b><?php the_time('jS F Y') ?></b></div>
	</div>
	
	<div class="">
		<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?></a>
	</div>

<!-- excerpt goes here if needed -->
    
    </section>
    <?php endwhile; // end of the loop. ?>

<div id="navbox">
<div id="previousePage"><?php previous_posts_link( '&#171; Previous Page' , 0 ); ?></div> 
<?php kriesi_pagination(); ?>
<div id="nextPage"><?php next_posts_link('Next Page &raquo;', 0); ?></div>
</div>

    	
<?php get_footer(); ?>
	
