<?php
/*
Template Name: tenders-home

 * The template for displaying about pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>
<div id="careers">
<div id="titleArea">	
	<h1><a href="<?php bloginfo('url'); ?>/careers/">Careers</a></h1>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Careers', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>
	
<section>
	<div id="post-sidebar">
	<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

		<h2>Current Jobs <?php printf( $term->name ); ?></h2>
	

	
	
	<?php if ( have_posts() ) : ?>
	<nav>
    	<ul id="careersMenu">
				<?php while ( have_posts() ) : the_post(); ?>
			<li><a href="<?php the_permalink() ?>" rel="<?php the_ID(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			    <?php endwhile; // end of the loop. ?>
    	</ul>
    </nav>
	<?php else : ?>
 
		<h3 class="center">No Current Vacancies</h3>
		<p class="center">Sorry, there are no vacancies at this time. Please check back at a later date.</p>
 
	<?php endif; ?>
	
	</div>
	
	
		<div class="box-container" id="post">
		<div id="your_post_here"></div>
		<div class="tenderAlert">
		
<?php 
if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>

	<?php if ( get_post_meta($post->ID, 'refrence', true) ) : ?>
		<h4><strong>Ref No.:</strong> <?php echo get_post_meta($post->ID, 'refrence', true); ?></h4>
	<?php endif; ?>
	
	<?php if ( get_post_meta($post->ID, 'salary', true) ) : ?>
		<h4><strong>Salary:</strong> <?php echo get_post_meta($post->ID, 'salary', true); ?></h4>
	<?php endif; ?>
	
	<?php if ( get_post_meta($post->ID, 'employmenttype', true) ) : ?>
		<h4><strong>Employment Type:</strong> <?php echo get_post_meta($post->ID, 'employmenttype', true); ?></h4>
	<?php endif; ?>
	
	<?php if ( get_post_meta($post->ID, 'location', true) ) : ?>
		<h4><strong>Location:</strong> <?php echo get_post_meta($post->ID, 'location', true); ?></h4>
	<?php endif; ?>
	
	<?php if ( get_post_meta($post->ID, 'enddate', true) ) : ?>
		<h4><strong>Deadline:</strong> <?php echo get_post_meta($post->ID, 'enddate', true); ?></h4>
	<?php endif; ?>


		<p><?php the_content(); ?></p>
		
		<?php if ( get_post_meta($post->ID, 'additionalinfo', true) ) : ?>
			<h2 class="trigger"><a href="#">Additional Information</a></h2> 
			<div class="toggle_container">
				<p><?php echo get_post_meta($post->ID, 'additionalinfo', true); ?></p>
			</div> 
		<?php endif; ?>
		<p>
			<a href="<?php bloginfo('url'); ?>/send-in-your-cv/" class="cpi-button">Send in your CV</a>
		</p>

		<?php endwhile; // end of the loop. ?>
<?php endif; ?>
			
		</div>		
    	</div>
</section>
    
    	</div>
<?php get_footer(); ?>
	
