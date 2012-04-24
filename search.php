<?php
/*
 * The template for displaying a search resaults in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
	<?php if ( have_posts() ) : ?>
	<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'cpi' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	<section id="searchSection">
<?php while ( have_posts() ) : the_post(); ?>
	
	
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h2>
	<?php the_excerpt(); ?><br/>
    

    <?php endwhile; // end of the loop. ?>

</section>
<div id="navbox">

<div id="previousePage"><?php previous_posts_link( '&#171; Previouse Page' , 0 ); ?></div> 
<?php kriesi_pagination(); ?>
<div id="nextPage"><?php next_posts_link('Next Page &raquo;', 0); ?></div>
</div>

<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing found for your search "' . get_search_query() . '"' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

    	
<?php get_footer(); ?>
	
