<?php
/*
Template Name: tenders-home-page

 * The template for displaying about pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>
<div id="careers">
<div id="titleArea">	
	<h1>Tenders</h1>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Tenders', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>
	
<section>
	<div id="post-sidebar">
		<h2>Current Tenders</h2>
	
	
	<?php $tenders = new WP_Query(array( 'post_type' => 'tenders' ));?>
	<?php if ($tenders->have_posts()) : ?>
	<nav>
    	<ul id="tenderMenu">
			<?php while ($tenders->have_posts()) : $tenders->the_post(); ?>
			<li><a href="<?php the_permalink() ?>" rel="<?php the_ID(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; wp_reset_query(); ?>
    	</ul>
    </nav>
    <?php else : ?>
 
		<h3 class="center">No Current Tenders</h3>
		<p class="center">Sorry, there are no Tenders at this time. Please check back at a later date. Sign up below.</p>
 
	<?php endif; ?>
	
	</div>
	
		<div class="box-container" id="post">
		<div id="your_post_here"></div>
		<div class="tenderAlert">
			<div id="share">
			<span  class='st_email_button' displayText='Email'></span><span  class='st_twitter_button' displayText='Tweet'></span><span  class='st_linkedin_button' displayText='LinkedIn'></span><span  class='st_facebook_button' displayText='Facebook'></span><span  class='st_plusone_button' ></span>	</div>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    		<p><?php the_content(); ?></p>
    	<?php endwhile; ?>
	<?php endif; ?>
		
		</div>		
    	</div>
</section>
    
    	</div>
<?php get_footer(); ?>
	
