<?php
/*
Template Name: ib-markets

 * The template for displaying the market pages in the CPI INNOVATOR THEME Industrial Biotechnology Section
 */

get_header(); ?>

<div id="titleArea">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">Industrial Biotechnology</a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Industrial Biotechnology Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>


    <aside>

    <nav>
    <img src="<?php bloginfo('template_url'); ?>/-/images/icon/ib-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Industrial Biotechnology<br/> Markets</h2>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'IB Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>

    </aside>

<section class="box-container" id="postPageHeader"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>

<div id="postPageHeader-Title" class="ib-section-header">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
</div>

<div id="postPage">

			<?php the_content(); ?>

			<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>

</div>
    </section>      	  	
    	<div id="sticky-box">
			<?php include 'reuse/ib-panel-images.php'; ?>
    	</div>
 
 <aside>

<div class="aside-box"><h3>For more information:<br />Call: +44 (0)1642 455 340<br /> Email: <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>
<div class="aside-box aside-right"><h3><a href="#info" rel="prettyPhoto[inline]">Sign up for our Newsletter &#187;</a></h3></div>

    </aside>  


	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	
