<?php
/*
Template Name: se-home

 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Sustainable Engineering Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<section id="seHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb"></p>
</section>

	<section id="postPageLeft-tech">
		<div class="aboutlinks">
			<?php the_content(); ?>
		</div>
	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
	<?php endwhile; // end of the loop. ?>
    </section>
    
    <div class="three-box menu-box box-right">
	<img src="<?php bloginfo('template_url'); ?>/-/images/icon/se-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Sustainable Engineering <br/> Services</h2>
			<ul>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'SE Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</div> 
      	
    	
    	<div class="three-box news-petec news-se">
    		<h2>Recent News</h2>
			
			<br/>
			
			<?php
				$yell = new WP_Query(array('post_type' => 'news', 'technology-news' => 'sustainable-engineering-news', 'showposts' => '1'));
				while ($yell->have_posts()) : $yell->the_post();
			?>


			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h3>

			<?php endwhile; wp_reset_query(); ?>
			
			
			
			<br/>
			<ul class="link-list">
			<li><a href="<?php bloginfo('url'); ?>/technology-news/sustainable-engineering-news/">View sustainable engineering news</a></li>
			</ul>
    	</div>
    	
    	<?php include 'reuse/se-panel-images.php'; ?>
	
<?php get_footer(); ?>
	
