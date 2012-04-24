<?php
/*
 * The template for displaying a tender items in the CPI INNOVATOR THEME
 */

get_header(); ?>


    <aside>
<div class="aside-box"><h3><a href="#info" rel="prettyPhoto[inline]">Sign up for our Newsletter &#187;</a></h3></div>
<div class="aside-box"><h3>For more information call:<br />+44 (0)1740 625 700</h3></div>
    </aside>

<section class="box-container" id="postPage">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<small></small>
			<?php the_content(); ?>
			
				<?php if ( get_post_meta($post->ID, 'additionalinfo', true) ) : ?>
					<h2 class="trigger"><a href="#">Additional Information</a></h2> 
					<div class="toggle_container">
					<p><?php echo get_post_meta($post->ID, 'additionalinfo', true); ?></p>
					</div> 
				<?php endif; ?>

				<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>

    </section>
      	  


	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>

