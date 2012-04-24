<?php
/*
Template Name: legal-section

 * The template for displaying about pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>


    <aside>

    <nav>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Legal', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>
 
	
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
      	  

<?php get_footer(); ?>
	

