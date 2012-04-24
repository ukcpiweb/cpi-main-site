<?php
/*
Template Name: careers-home

 * The template for displaying Jobs in the CPI INNOVATOR THEME
 */

get_header(); ?>
<div id="careers">
<div id="titleArea">	
	<h1>Careers</h1>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Careers', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>
	
<section>
	<div id="post-sidebar">
		<h1>Careers at CPI </h1>
	<p>Our employees apply innovative thinking to help companies develop products and processes. Join us to inspire the future.</p>
	
	</div>
	
	
	<div class="box-container" id="careerPallet">
	

	
	
<?php $jobs = new WP_Query(array( 'post_type' => 'jobs' ));?>
<?php if ($jobs->have_posts()) { 

    $count_posts = wp_count_posts( 'jobs' )->publish;
    if ( $count_posts == "1" ) { 
        echo "<h2>There is currently one vacancy...</h2>"; }
    else { echo "<h2>There are currently  $count_posts vacancies...</h2>"; }

} else { ?>
<h2>There are currently no vacancies.</h2>
<?php } ?>
	


	<!-- All Vacancies -->
<div class="department">
		<?php if ( wt_get_category_count('79', true)) { ?>
		<div class="jobCount">
		<p><a href="<?php bloginfo('url'); ?>/job-fields/all-jobs"><?php echo wt_get_category_count('79'); ?></a></p>
		</div>
			<a href="<?php bloginfo('url'); ?>/job-fields/all-jobs">
				<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-all-icon.png" alt="Science and Engineering" width="34" height="34" />
			</a>	
		<h4><a href="<?php bloginfo('url'); ?>/job-fields/all-jobs">View all open <br/>Vacancies</a></h4>
		<?php } else { ?> 
			<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-all-icon.png" alt="Science and Engineering" width="34" height="34" />
			<h4>View all open <br/>Vacancies</h4>
		<?php } ?>
			<p>Browse all open vacancies <br/>at CPI.</p>
		</div>
		

	<!-- Science & Engineering -->
<div class="department">
		<?php if ( wt_get_category_count('35', true)) { ?>
		<div class="jobCount">
		<p><a href="<?php bloginfo('url'); ?>/job-fields/science-and-engineering"><?php echo wt_get_category_count('35'); ?></a></p>
		</div>
			<a href="<?php bloginfo('url'); ?>/job-fields/science-and-engineering">
				<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-science-icon.png" alt="Science and Engineering" width="34" height="34" />
			</a>	
		<h4><a href="<?php bloginfo('url'); ?>/job-fields/science-and-engineering">Science and <br/>Engineering</a></h4>
		<?php } else { ?> 
			<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-science-icon.png" alt="Science and Engineering" width="34" height="34" />
			<h4>Science and <br/>Engineering</h4>
		<?php } ?>
			<p>We develop products and processes with CPI clients.</p>
		</div>
		
	
	<!-- Admin & Finance -->
		<div class="department">
		<?php if ( wt_get_category_count('33', true)) { ?>
		<div class="jobCount">
		<p><a href="<?php bloginfo('url'); ?>/job-fields/admin-and-finance"><?php echo wt_get_category_count('33'); ?></a></p>
		</div>
			<a href="<?php bloginfo('url'); ?>/job-fields/admin-and-finance"><img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-admin-finance-icon.png" alt="Admin and Finance" width="32" height="32" /></a>
			<h4><a href="<?php bloginfo('url'); ?>/job-fields/admin-and-finance">Admin and <br/>Finance</a></h4>
		<?php } else { ?> 
			<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-admin-finance-icon.png" alt="Admin and Finance" width="32" height="32" />
			<h4>Admin and <br/>Finance</h4>
		<?php } ?>
			<p>We make sure operations run smoothly at CPI.</p>
			</div>

	<!-- Admin & Finance -->
<div class="department">
		<?php if ( wt_get_category_count('34', true)) { ?>
		<div class="jobCount">
		<p><a href="<?php bloginfo('url'); ?>/job-fields/health-and-safety"><?php echo wt_get_category_count('34'); ?></a></p>
		</div>
			<a href="<?php bloginfo('url'); ?>/job-fields/health-and-safety">
				<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-admin-icon.png" alt="Health and Safety" width="32" height="32" />
			</a>	
		<h4><a href="<?php bloginfo('url'); ?>/job-fields/health-and-safety">Health and <br/>Safety</a></h4>
		<?php } else { ?> 
			<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-admin-icon.png" alt="Health and Safety" width="32" height="32" />
			<h4>Health and <br/>Safety</h4>
		<?php } ?>
			<p>We encourage and regulate safety at CPI</p>
		</div>
		

	<!-- HR & Recruitment -->
<div class="department">
		<?php if ( wt_get_category_count('36', true)) { ?>
		<div class="jobCount">
		<p><a href="<?php bloginfo('url'); ?>/job-fields/hr-and-recruitment"><?php echo wt_get_category_count('36'); ?></a></p>
		</div>
			<a href="<?php bloginfo('url'); ?>/job-fields/hr-and-recruitment">
				<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-hr-icon.png" alt="Human Resources and Recruitment" width="32" height="32" />
			</a>	
		<h4><a href="<?php bloginfo('url'); ?>/job-fields/hr-and-recruitment">HR and <br/>Recruitment</a></h4>
		<?php } else { ?> 
			<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-hr-icon.png" alt="Human Resources and Recruitment" width="32" height="32" />
			<h4>Human Resourses</h4>
		<?php } ?>
			<p>We're the people behind the people at CPI.</p>
		</div>		
		
		
	<!-- IT & Communications -->
<div class="department">
		<?php if ( wt_get_category_count('37', true)) { ?>
		<div class="jobCount">
		<p><a href="<?php bloginfo('url'); ?>/job-fields/it-and-communications"><?php echo wt_get_category_count('37'); ?></a></p>
		</div>
			<a href="<?php bloginfo('url'); ?>/job-fields/it-and-communications">
				<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-it-icon.png" alt="HR and Recruitment" width="32" height="32" />
			</a>	
		<h4><a href="<?php bloginfo('url'); ?>/job-fields/it-and-communications">IT and <br/>Communications</a></h4>
		<?php } else { ?> 
			<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-it-icon.png" alt="HR and Recruitment" width="32" height="32" />
			<h4>IT</h4>
		<?php } ?>
			<p>We keep the computer systems and CPI employees connected.</p>
		</div>
		
		
	<!-- Management & Executive -->
<div class="department">
		<?php if ( wt_get_category_count('38', true)) { ?>
		<div class="jobCount">
		<p><a href="<?php bloginfo('url'); ?>/job-fields/management-and-executive"><?php echo wt_get_category_count('38'); ?></a></p>
		</div>
			<a href="<?php bloginfo('url'); ?>/job-fields/management-and-executive">
				<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-managment-icon.png" alt="Management and Executive" width="32" height="32" />
			</a>	
		<h4><a href="<?php bloginfo('url'); ?>/job-fields/management-and-executive">Management and Executive</a></h4>
		<?php } else { ?> 
			<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-managment-icon.png" alt="Management and Executive" width="32" height="32" />
			<h4>Management and Executive</h4>
		<?php } ?>
			<p>We provide leadership and strategy to CPI.</p>
		</div>
		

<!-- Marketing, Media & Sales -->
<div class="department">
		<?php if ( wt_get_category_count('39', true)) { ?>
		<div class="jobCount">
		<p><a href="<?php bloginfo('url'); ?>/job-fields/marketing-media-sales"><?php echo wt_get_category_count('39'); ?></a></p>
		</div>
			<a href="<?php bloginfo('url'); ?>/job-fields/marketing-media-sales">
				<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-sales-marketing-icon.png" alt="Marketing, Media and Sales" width="32" height="32" />
			</a>	
		<h4><a href="<?php bloginfo('url'); ?>/job-fields/marketing-media-sales">Marketing, Media and Sales</a></h4>
		<?php } else { ?> 
			<img src="<?php bloginfo('template_url'); ?>/-/images/content/careers/careers-sales-marketing-icon.png" alt="Marketing, Media and Sales" width="32" height="32" />
			<h4>Marketing, Media and Sales</h4>
		<?php } ?>
			<p>We're all about finding and engaging CPI customers.</p>
		</div>

</div>
</section>
    
    
       	
    
    
    	<div class="three-box benefits">
    		<a href="<?php bloginfo('url'); ?>/benefits/"><h2>Benefits</h2></a>
    	</div>
    	<div class="three-box box-center cpi-life">
    		<a href="<?php bloginfo('url'); ?>/life-at-cpi/"><h2>Life at CPI</h2></a>
    	</div>
    	<div class="three-box student-support">
    		<a href="<?php bloginfo('url'); ?>/apprenticeships-and-students/"><h2>Apprenticeships & Students</h2></a>
    	</div>
    	
    	
    	
</div>
<?php get_footer(); ?>
	
