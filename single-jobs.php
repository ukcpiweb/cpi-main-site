<?php
/*
 * The template for displaying a tender items in the CPI INNOVATOR THEME
 */

get_header(); ?>

<div id="titleArea">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/careers/">Careers</a></h1></span>
	<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Careers', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

    <aside>
<div class="aside-box"><h3><a href="#info" rel="prettyPhoto[inline]">Sign up for our Newsletter &#187;</a></h3></div>
<div class="aside-box"><h3>For more information:<br />Call: +44 (0)1642 455 340<br /> Email: <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>
    </aside>

<section class="box-container" id="postPage">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
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
