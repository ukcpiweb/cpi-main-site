<?php
/*
 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>


<div id="homePage">


<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>
<section id="homeSlider">

<div id="homeAbout">
<div id="homeDescription">
	<h1>The Centre for Process Innovation</h1>
	<p>CPI helps companies to prove and scale up processes to manufacture new products and create more sustainable, efficient and economic industries of the future.</p>
</div>
	<div id="about-links"><a href="<?php bloginfo('url'); ?>/about/" class="cpi-button about-button">More about CPI &raquo;</a>
	<br/><small>
	or <a id="watchVideo" href="<?php bloginfo('url'); ?>/case-studies/">view case studies</a>
	</small>
	<!--<br/><small>or 
	<a id="watchVideo" href="http://youtu.be/5MX7fcJKRZM" rel="prettyPhoto" title="">watch our video &raquo;</a></small>-->
	</div>
</div>
				


</section>
		<div class="clear"></div> 
   
       	<div class="three-box news-home news-area">
    		<h2>Recent News</h2>
    		
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
       	<div class="quick-box list-home quick-tech-box">
    		<h2>CPI Technologies</h2>
    		
    		<ul>
    		<li class="ib-icon-small"><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">Industrial Biotechnology</a></li>
    		<li class="pe-icon-small"><a href="<?php bloginfo('url'); ?>/printable-electronics/">Printable Electronics</a></li>
    		<li class="sc-icon-small"><a href="<?php bloginfo('url'); ?>/smart-chemistry/">Smart Chemistry</a></li>
    		<li class="ad-icon-small"><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/">Anaerobic Digestion</a></li>
    		<li class="tt-icon-small"><a href="<?php bloginfo('url'); ?>/thermal-technologies/">Thermal Technologies</a></li>
    		<li class="se-icon-small"><a href="<?php bloginfo('url'); ?>/sustainable-engineering/">Sustainable Engineering</a></li>
    		</ul>


    	</div>
   <div class="three-box list-home homelinks  market-box">
    		<h2>CPI Markets</h2>
    		
    		<ul>
    		<li><a href="<?php bloginfo('url'); ?>/markets/personal-care/">Personal Care</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/energy-lighting/">Energy & Lighting</a></li>    		
    		<li><a href="<?php bloginfo('url'); ?>/markets/aerospace/">Aerospace</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/speciality-chemicals/">Speciality Chemicals</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/automotive/">Automotive</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/materials/">Materials</a></li>
    		<li><strong><a href="<?php bloginfo('url'); ?>/markets/">View More Markets &raquo;</a></strong></li>
    		</ul>
    	</div>
    	
    

    	<div class="quick-box list-home homelinks quick-links">
    		<h2>Quick Links</h2>
    		
    		<ul>
    		<!--<li><a href="<?php bloginfo('url'); ?>/annual-report/">Annual Report 2011</a></li>-->
    		<li><a href="http://cpi-hub.com/">CPI Technology Hub</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/press-room/publications/">View CPI Brochures</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/careers/">CPI Careers</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/tenders/">CPI Tenders</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/press-room/">CPI Press Room</a></li>
    		</ul>

    	</div>


<!--
    	<div class="three-box annual-report">
    		<a href="<?php bloginfo('url'); ?>/business-support/"><h2>Annual Report 2011</h2></a>
    	</div>
-->
    	<div class="three-box box-center case-study-petec case-home catapult">
    		<a href="<?php bloginfo('url'); ?>/about/high-value-manufacturing-catapult/" ><h2>High Value Manufacturing Catapult</h2></a>
    	</div>
    	<div class="three-box business-support">
    		<a href="<?php bloginfo('url'); ?>/business-support/"><h2>Business Support Services</h2></a>
    	</div>
    	
    	
    	
    	
</div>   

	<?php get_footer(); ?>
	
