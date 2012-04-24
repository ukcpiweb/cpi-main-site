<?php
/*
Template Name: markets-sub-section

 * The template for displaying market pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>

<div id="titleArea">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/markets/">Markets</a></h1></span>

</div>

    <aside>

    <nav>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'CPI Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>
<div class="aside-box"><h3>For more information:<br />Call: +44 (0)1740 625 700<br /> Email: <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>    

    </aside>
    
    
    
    <section class="box-container" id="postPageHeader"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>

<div id="postPageHeader-Title" style="background: url( <?php echo $bg_image;?> )">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
</div>

<div id="postPage">

			<?php the_content(); ?>

			<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>

</div>
    </section>
      	  


	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	

