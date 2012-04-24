<?php
/*
Template Name: pressroom-sub-section

 * The template for displaying Jobs in the CPI INNOVATOR THEME
 */

get_header(); ?>
<div id="careers">
<div id="titleArea">	
	<h1><a href="<?php bloginfo('url'); ?>/press-room/">Press Room</a></h1>


<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Press Room', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>
	
<section>
	<div id="press-sidebar" class="press-sidebar">
		<h2>Resources for Press & Media</h2>
	<p>Welcome to the CPI Press Room. Here you'll find the latest company news and media resources.</p>
	
	<nav>
		<?php include 'reuse/press-nav.php'; ?>
	</nav>
	
	</div>
	
	
		<div class="box-container" id="post">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		
			<?php the_content(); ?>
		
	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>


		
		</div>
		

</section>
    
    	</div>
<?php get_footer(); ?>
	
