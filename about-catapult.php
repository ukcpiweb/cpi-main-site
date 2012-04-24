<?php
/*
Template Name: about-catapult

 * The template for displaying about pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>


    <section id="aboutCatapult">
	<p id="techHeaderBlurb"></p>
</section>

    <aside>

    <nav>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'About CPI', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>


<div class="aside-box"><h3><a href="#info" rel="prettyPhoto[inline]">Sign up for our Newsletter &#187;</a></h3></div>
<div class="aside-box"><h3>For more information:<br />Call: +44 (0)1642 455 340<br /> Email: <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>
    </aside>

<section class="box-container" id="postPage">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
		
			<?php the_content(); ?>
		
	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    </section>
      	  


	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	

