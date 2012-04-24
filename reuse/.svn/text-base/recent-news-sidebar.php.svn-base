<div class="aside-box news-home">

		<h3>Recent News</h3>
<?php
			$news = new WP_Query(array('showposts' => '3', 'post_type' => 'news'));
			while ($news->have_posts()) : $news->the_post();
			?>
			<div class="news-home-item">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?></a>
  			<b><?php the_time('jS F Y') ?></b>
			<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h4>
			</div>
				
			<?php endwhile; wp_reset_query(); ?>

    
</div>
