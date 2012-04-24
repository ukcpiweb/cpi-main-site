<?php
/*
Template Name: pressroom-home

 * The template for displaying Jobs in the CPI INNOVATOR THEME
 */

get_header(); ?>
<div id="careers">
<div id="titleArea">	
	<h1>Press Room</h1>

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
		<span class="press-room-icon"><h2>Recent Press Releases</h2></span> 

	<?php
		$news = new WP_Query(array('post_type' => 'news', 'press-release' => 'press-release', 'posts_per_page' => '6', 'orderby' => 'date'));
		while ($news->have_posts()) : $news->the_post();
	?>

			<div class="press-header"><h5><?php the_date(); ?> - <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo the_title(); ?></a></h5></div>
	
	
	<?php endwhile; wp_reset_query(); ?>
	
	<a href="<?php bloginfo('url'); ?>/press-release/press-release/" class="cpi-button press-button">View Press Release Archive</a><br/><br/>
		
				<div id="share-box">
					<div class="share-box-container" id="twitterPress"><h4>Twitter</h4>Your can <a href="http://twitter.com/ukCPI">follow @ukCPI on Twitter</a> for updates.</div>
					<div class="share-box-container" id="newsletterPress"><h4>Newsletter</h4>You can <a href="#info" rel="prettyPhoto[inline]">sign up for our newsletter</a>.</div>
					<div class="share-box-container" id="rssFeed"><h4>RSS Feed</h4>You can <a href="<?php bloginfo('url'); ?>/feed/?post_type=news">subscribe</a> to our RSS feed.</div>
				</div>

		
		</div>
		

</section>
    
    	</div>
    		<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	
