<?php
/*
Template Name: tenders-sub-section

 * The template for displaying a standard tender pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>

<div id="titleArea">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/tenders/">Tenders</a></h1></span>
	<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Tenders', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

    <aside>
<div class="aside-box"><h3><a href="#info" rel="prettyPhoto[inline]">Sign up for our Newsletter &#187;</a></h3></div>
<div class="aside-box"><h3>For more information:<br />Call: +44 (0)1740 625 700<br /> Email: <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>

    </aside>

<section class="box-container" id="postPage">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<div id="share">
			<span  class='st_email_button' displayText='Email'></span><span  class='st_twitter_button' displayText='Tweet'></span><span  class='st_facebook_button' displayText='Facebook'></span><span  class='st_plusone_button' ></span>
	</div>
			<h1><?php the_title(); ?></h1>
			<small></small>
			<?php the_content(); ?>

			<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>

</section>
      	  


	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
