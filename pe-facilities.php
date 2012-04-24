<?php
/*
Template Name: pe-tour

 * The template for displaying a standard about pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>

<div id="titleArea">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/printable-electronics/">Printable Electronics</a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Printable Electronics Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

    <aside>

    <nav>
     <img src="<?php bloginfo('template_url'); ?>/-/images/icon/pe-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">About Printable<br/> Electronics</h2>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'PE About', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>

    </aside>

<section class="box-container" id="postPageHeader"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>

<div id="postPageHeader-Title" class="pe-section-header">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
</div>

<div id="postPage">
		
			<?php the_content(); ?>
		
<iframe name="virtualtour" src="http://www.uk-cpi.com/virtual_tours/petec_virtual_tour/index.html" width="609" height="600" frameborder="0" scrolling="no">
  <p>Your browser does not support iframes.</p>
</iframe>
		
	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    
    <a href="http://www.uk-cpi.com/wp-content/uploads/2012/03/Printable-Electronics-Equipment-List.pdf" class="cpi-button">View our Equipment List</a>
    <a href="http://www.uk-cpi.com/wp-content/uploads/2012/01/LACE.pdf" class="cpi-button">View our OLED/OPV Prototyping Line</a>

</div>
    </section>
      	  	
    	<div id="sticky-box">
			<?php include 'reuse/pe-panel-images.php'; ?>
    	</div>
 
 <aside>

    <div class="aside-box"><h3>For more information call:<br />
+44 (0)1740 625 700</h3></div>
<div class="aside-box aside-right"><h3><a href="#info" rel="prettyPhoto[inline]">Sign up for our Newsletter &#187;</a></h3></div>

    </aside>  


	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	
