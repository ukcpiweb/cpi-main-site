<?php
/*
 * The template for displaying a news items in the CPI INNOVATOR THEME
 */

get_header(); ?>

<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>


<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/thermal-technologies/"><?php printf( $term->name ); ?></a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Thermal Technologies Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>


<div id="titleArchive" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/projects/">Projects</a></h1></span>

<?php include 'reuse/project-filter.php'; ?>

</div>



</div>

		<?php $counter =0; ?>
		<?php if ( have_posts() ) : ?>	
	<?php while ( have_posts() ) : the_post(); ?>

<?php
  ++$counter;
  if($counter == 3) {
    $postclass = 'third-post';
    $counter = 0;
  } else { $postclass = ''; }
?>
	<section class="box-container archivePost <?php echo $postclass; ?>">

	
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h2>
	<div id="meta">
	<div id="date"><b><?php the_time('jS F Y') ?></b></div>
	</div>
	
	<div class="">
		<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?></a>
	</div>
    
    </section>
    <?php endwhile; // end of the loop. ?>

<div id="navbox">
<div id="previousePage"><?php previous_posts_link( '&#171; Previouse Page' , 0 ); ?></div> 
<div id="nextPage"><?php next_posts_link('Next Page &raquo;', 0); ?></div>
</div>

<?php else : ?>

				
						<section class="" id="searchSection">
						<h1 class="gigantic"><?php _e( 'Filter returned no results', 'twentyeleven' ); ?></h1>
					

					<div class="entry-content">
						<h3><?php _e( 'Sorry, no projects matched your filter. You could try again or try searching for a project with some keywords.', 'cpi' ); ?></h3>
						
					</section>

			<?php endif; ?>
    	
<?php get_footer(); ?>
	
