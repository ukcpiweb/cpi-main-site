<?php

//testfindand


if (function_exists('add_theme_support')) {
    add_theme_support('menus');

	// Support Post Thumbnails
	add_theme_support( 'post-thumbnails'); 
	add_image_size( 'single-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'front-thumb', 200, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'archive-thumb', 9999, 40 ); //300 pixels wide (and unlimited height)
}

function wpgym_extract_post_thumb( $str ){
	$matches = array();
	$pattern = '/src=[\'"]?([^\'" >]+)[\'" >]/';
	$match = preg_match( $pattern, $str, $matches );
	return($matches[1]);
}

// Shorten Title
function ShortenText($text)

{

// Change to the number of characters you want to display

$chars_limit = 54;
$chars_text = strlen($text);
$text = $text." ";
$text = substr($text,0,$chars_limit);
$text = substr($text,0,strrpos($text,' '));

// If the text has more characters that your limit,
//add ... so the user knows the text is actually longer
if ($chars_text > $chars_limit)
{
$text = $text."...";
}
return $text;
}


// Pagination

function kriesi_pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

// Custom Posts Case Studies

add_action('init', 'casestudy_register');
add_action("admin_init", "admin_init");
add_action('save_post', 'save_details');


register_taxonomy("casestudytype", array("casestudy"), array("hierarchical" => true, "label" => "Case Study Type", "singular_label" => "Case Study Type", "rewrite" => true));
register_taxonomy("technology-casestudy", array("casestudy"), array("hierarchical" => true, "label" => "Case Study Technology", "singular_label" => "Case Study Technology", "rewrite" => true));
 flush_rewrite_rules();
function casestudy_register() {
 
	$labels = array(
		'name' => _x('Case Studies', 'post type general name'),
		'singular_name' => _x('Case Study', 'post type singular name'),
		'add_new' => _x('Add New', 'Case Study'),
		'add_new_item' => __('Add New Case Study'),
		'edit_item' => __('Edit Case Study'),
		'new_item' => __('New Case Study'),
		'view_item' => __('View Case Study'),
		'search_items' => __('Search Case Study'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug'=> 'case-studies'),
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'has_archive' => 'case-studies',
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'casestudy' , $args );
	flush_rewrite_rules();
}


function save_details(){
  global $post;
  
$post_id = $post->ID; 

// to prevent metadata or custom fields from disappearing... 
if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
return $post_id; 
 
update_post_meta($post_id, "achievements", $_POST["achievements"]);
update_post_meta($post_id, "testimony", $_POST["testimony"]);
update_post_meta($post_id, "clientperson", $_POST["clientperson"]);
update_post_meta($post_id, "testimonytwo", $_POST["testimonytwo"]);
update_post_meta($post_id, "clientpersontwo", $_POST["clientpersontwo"]);
update_post_meta($post_id, "keypoints", $_POST["keypoints"]);
update_post_meta($post_id, "keypointstech", $_POST["keypointstech"]);
update_post_meta($post_id, "downloadlink", $_POST["downloadlink"]);
update_post_meta($post_id, "phonenumber", $_POST["phonenumber"]);
update_post_meta($post_id, "clientsite", $_POST["clientsite"]);
update_post_meta($post_id, "youtubelink", $_POST["youtubelink"]);
update_post_meta($post_id, "youtubetitle", $_POST["youtubetitle"]);
}


function admin_init(){
  add_meta_box("client_meta", "Client Information", "client_meta", "casestudy", "normal", "low");
}
 
function client_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  $achievements = $custom["achievements"][0];
  $testimony = $custom["testimony"][0];
  $clientperson = $custom["clientperson"][0];
  $testimonytwo = $custom["testimonytwo"][0];
  $clientpersontwo = $custom["clientpersontwo"][0];
  $keypoints = $custom["keypoints"][0];
  $keypointstech = $custom["keypointstech"][0];
  $downloadlink = $custom["downloadlink"][0];
  $phonenumber = $custom["phonenumber"][0];
  $clientsite = $custom["clientsite"][0];
  $youtubelink = $custom["youtubelink"][0];
  $youtubetitle = $custom["youtubetitle"][0];
  ?>
 <p><label>Achievements & Benefits:</label><br />
  <textarea cols="70" rows="5" name="achievements"><?php echo $achievements; ?></textarea></p>
  <p><label>Client Testimony:</label><br />
  <textarea cols="70" rows="5" name="testimony"><?php echo $testimony; ?></textarea></p>
  <p><label>Client Person:</label><br />
  <textarea cols="70" rows="1" name="clientperson"><?php echo $clientperson; ?></textarea></p>
<p><label>Client Testimony Two:</label><br />
  <textarea cols="70" rows="5" name="testimonytwo"><?php echo $testimonytwo; ?></textarea></p>
  <p><label>Client Person Two:</label><br />
  <textarea cols="70" rows="1" name="clientpersontwo"><?php echo $clientpersontwo; ?></textarea></p>
  <p><label>Key Points:</label><br />
  <textarea cols="70" rows="7" name="keypoints"><?php echo $keypoints; ?></textarea></p>
  <p><label>Key Technical Points:</label><br />
  <textarea cols="70" rows="7" name="keypointstech"><?php echo $keypointstech; ?></textarea></p>
  <p><label>Client Website (http://example.com/):</label><br />
  <textarea cols="70" rows="1" name="clientsite"><?php echo $clientsite; ?></textarea></p>
  <p><label>Client Video (YouTube Link):</label><br />
  <textarea cols="70" rows="1" name="youtubelink"><?php echo $youtubelink; ?></textarea></p>
  <p><label>Client Video Title:</label><br />
  <textarea cols="70" rows="1" name="youtubetitle"><?php echo $youtubetitle; ?></textarea></p>
    <p><label>Download Link:</label><br />
  <textarea cols="70" rows="1" name="downloadlink"><?php echo $downloadlink; ?></textarea></p>
    <p><label>Phone Number:</label><br />
  <textarea cols="70" rows="1" name="phonenumber"><?php echo $phonenumber; ?></textarea></p>
  <?php
}



//EVENTS SECTION HERE





// Custom Posts Projects

add_action('init', 'project_register');
add_action("admin_init", "admin_init4");
add_action('save_post', 'save_project');


register_taxonomy("technology-project", array("project"), array("hierarchical" => true, "label" => "Project Technology", "singular_label" => "Project Technology", "rewrite" => true));

 flush_rewrite_rules();
 
function project_register() {
 
	$labels = array(
		'name' => _x('Projects', 'post type general name'),
		'singular_name' => _x('Project', 'post type singular name'),
		'add_new' => _x('Add New', 'Project'),
		'add_new_item' => __('Add New Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('New Project'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Project'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug'=> 'projects'),
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'has_archive' => 'projects',
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'project' , $args );
	flush_rewrite_rules();
}


function save_project(){
  global $post;
  
$post_id = $post->ID; 

// to prevent metadata or custom fields from disappearing... 
if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
return $post_id; 
 
update_post_meta($post_id, "about", $_POST["about"]);
update_post_meta($post_id, "testimony1", $_POST["testimony1"]);
update_post_meta($post_id, "participant1", $_POST["participant1"]);
update_post_meta($post_id, "testimony2", $_POST["testimony2"]);
update_post_meta($post_id, "participant2", $_POST["participant2"]);
update_post_meta($post_id, "testimony3", $_POST["testimony3"]);
update_post_meta($post_id, "participant3", $_POST["participant3"]);
update_post_meta($post_id, "keyfeatures", $_POST["keyfeatures"]);
update_post_meta($post_id, "keypointstech", $_POST["keypointstech"]);
update_post_meta($post_id, "projectsite", $_POST["projectsite"]);
update_post_meta($post_id, "youtubelink", $_POST["youtubelink"]);
update_post_meta($post_id, "youtubetitle", $_POST["youtubetitle"]);
}


function admin_init4(){
  add_meta_box("project_meta", "Project Information", "project_meta", "project", "normal", "low");
}
 
function project_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  $about = $custom["about"][0];
  $testimony1 = $custom["testimony1"][0];
  $participant1 = $custom["participant1"][0];
  $testimony2 = $custom["testimony2"][0];
  $participant2 = $custom["participant2"][0];
  $testimony3 = $custom["testimony3"][0];
  $participant3 = $custom["participant3"][0];
  $keyfeatures = $custom["keyfeatures"][0];
  $keypointstech = $custom["keypointstech"][0];
  $projectsite = $custom["projectsite"][0];
  $youtubelink = $custom["youtubelink"][0];
  $youtubetitle = $custom["youtubetitle"][0];
  ?>
 <p>
   <p><label>About Project:</label><br />
 <textarea cols="70" rows="7" name="about"><?php echo $about; ?></textarea></p>
  
  <p><label>Participant One Testimony:</label><br />
  <textarea cols="70" rows="5" name="testimony1"><?php echo $testimony1; ?></textarea></p>
  <p><label>Participant Person One:</label><br />
  <textarea cols="70" rows="1" name="participant1"><?php echo $participant1; ?></textarea></p>

  <p><label>Participant Two Testimony:</label><br />
  <textarea cols="70" rows="5" name="testimony2"><?php echo $testimony2; ?></textarea></p>
  <p><label>Participant Person Two:</label><br />
  <textarea cols="70" rows="1" name="participant2"><?php echo $participant2; ?></textarea></p>
  
  <p><label>Participant Three Testimony:</label><br />
  <textarea cols="70" rows="5" name="testimony3"><?php echo $testimony3; ?></textarea></p>
  <p><label>Participant Person Three:</label><br />
  <textarea cols="70" rows="1" name="participant3"><?php echo $participant3; ?></textarea></p>

  <p><label>Key Features:</label><br />
  <textarea cols="70" rows="7" name="keyfeatures"><?php echo $keyfeatures; ?></textarea></p>
  <p><label>Key Technical Points:</label><br />
  <textarea cols="70" rows="7" name="keypointstech"><?php echo $keypointstech; ?></textarea></p>
  <p><label>Project Website (http://example.com/):</label><br />
  <textarea cols="70" rows="1" name="projectsite"><?php echo $projectsite; ?></textarea></p>
  <p><label>Project Video (YouTube Link):</label><br />
  <textarea cols="70" rows="1" name="youtubelink"><?php echo $youtubelink; ?></textarea></p>
  <p><label>Project Video Title:</label><br />
  <textarea cols="70" rows="1" name="youtubetitle"><?php echo $youtubetitle; ?></textarea></p>
  <?php
}





// Custom Posts News

add_action('init', 'news_register');
add_action("admin_init", "admin_inits");
add_action('save_post', 'save_news');

register_taxonomy("technology-news", array("news"), array("hierarchical" => true, "label" => "Technology News", "singular_label" => "Technology News", "rewrite" => true));

register_taxonomy("press-release", array("news"), array("hierarchical" => true, "label" => "Press Release", "singular_label" => "Press Release", "rewrite" => true)); 
 
 flush_rewrite_rules();
function news_register() {
 
	$labels = array(
		'name' => _x('News', 'post type general name'),
		'singular_name' => _x('News', 'post type singular name'),
		'add_new' => _x('Add New', 'News Item'),
		'add_new_item' => __('Add New News Item'),
		'edit_item' => __('Edit News Item'),
		'new_item' => __('New News Item'),
		'view_item' => __('View News Item'),
		'search_items' => __('Search News'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'has_archive' => 'news',
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'news' , $args );
	flush_rewrite_rules();
}

function save_news(){
  global $post;
  
$post_id = $post->ID; 

// to prevent metadata or custom fields from disappearing... 
if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
return $post_id; 
 
update_post_meta($post_id, "notes", $_POST["notes"]);
update_post_meta($post_id, "contact", $_POST["contact"]);
}


function admin_inits(){
  add_meta_box("news_meta", "Media Information", "news_meta", "news", "normal", "low");
}
 
function news_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  $notes = $custom["notes"][0];
  $contact = $custom["contact"][0];
  ?>
 <p><label>Notes for editors:</label><br />
  <textarea cols="70" rows="7" name="notes"><?php echo $notes; ?></textarea></p>
  <p><label>Additional contacts for media:</label><br />
  <textarea cols="70" rows="5" name="contact"><?php echo $contact; ?></textarea></p>
  <?php
}



// Custom Posts Tenders

add_action('init', 'tenders_register');
add_action("admin_init", "admin_inits2");
add_action('save_post', 'save_tenders');


function tenders_register() {
 
	$labels = array(
		'name' => _x('Tenders', 'post type general name'),
		'singular_name' => _x('Tender', 'post type singular name'),
		'add_new' => _x('Add New', 'Tender Item'),
		'add_new_item' => __('Add New Tender Item'),
		'edit_item' => __('Edit Tender Item'),
		'new_item' => __('New Tender Item'),
		'view_item' => __('View Tender Item'),
		'search_items' => __('Search Tenders'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'has_archive' => 'cpi-tenders',
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'tenders' , $args );
	flush_rewrite_rules();
}

function save_tenders(){
  global $post;
  
$post_id = $post->ID; 

// to prevent metadata or custom fields from disappearing... 
if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
return $post_id; 
 
update_post_meta($post_id, "additionalinfo", $_POST["additionalinfo"]);
update_post_meta($post_id, "enddate", $_POST["enddate"]);
}


function admin_inits2(){
  add_meta_box("tenders_meta", "Additional Information", "tenders_meta", "tenders", "normal", "low");
}
 
function tenders_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  $additionalinfo = $custom["additionalinfo"][0];
  $enddate = $custom["enddate"][0];
  ?>
  <p><label>Tender's End Date (format: 02/07/2011) :</label><br />
  <textarea cols="30" rows="1" name="enddate"><?php echo $enddate; ?></textarea></p>
  <p><label>Additional Information:</label><br />
  <textarea cols="70" rows="10" name="additionalinfo"><?php echo $additionalinfo; ?></textarea></p>
 
  <?php
}







// Custom Posts Jobs

add_action('init', 'jobs_register');
add_action("admin_init", "admin_inits3");
add_action('save_post', 'save_jobs');

register_taxonomy("job-fields", array("jobs"), array("hierarchical" => true, "label" => "Job Fields", "singular_label" => "Job Field", "rewrite" => true));

function jobs_register() {
 
	$labels = array(
		'name' => _x('Jobs', 'post type general name'),
		'singular_name' => _x('Job', 'post type singular name'),
		'add_new' => _x('Add New', 'Job Post'),
		'add_new_item' => __('Add New Job Post'),
		'edit_item' => __('Edit Job Post'),
		'new_item' => __('New Job Post'),
		'view_item' => __('View Job Post'),
		'search_items' => __('Search Jobs'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'has_archive' => 'jobs',
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'jobs' , $args );
	flush_rewrite_rules();
}

function save_jobs(){
  global $post;
  
$post_id = $post->ID; 

// to prevent metadata or custom fields from disappearing... 
if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
return $post_id; 
 
update_post_meta($post_id, "refrence", $_POST["refrence"]);
update_post_meta($post_id, "salary", $_POST["salary"]);
update_post_meta($post_id, "employmenttype", $_POST["employmenttype"]);
update_post_meta($post_id, "enddate", $_POST["enddate"]);
update_post_meta($post_id, "location", $_POST["location"]);
}

function admin_inits3(){
  add_meta_box("jobs_meta", "Additional Information", "jobs_meta", "jobs", "normal", "low");
}
 
function jobs_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  $refrence = $custom["refrence"][0];
  $salary = $custom["salary"][0];
  $employmenttype = $custom["employmenttype"][0];
  $location = $custom["location"][0];
  $enddate = $custom["enddate"][0];
  ?>
  <p><label>Job Refrence No.:</label><br />
  <textarea cols="40" rows="1" name="refrence"><?php echo $refrence; ?></textarea></p>
  <p><label>Job Salary:</label><br />
  <textarea cols="75" rows="1" name="salary"><?php echo $salary; ?></textarea></p>
  <p><label>Employment Type (Permanent, Part Time etc):</label><br />
  <textarea cols="75" rows="1" name="employmenttype"><?php echo $employmenttype; ?></textarea></p>
  <p><label>Location:</label><br />
  <textarea cols="75" rows="1" name="location"><?php echo $location; ?></textarea></p>
  <p><label>Job's Deadline (format: 02/07/2011) :</label><br />
  <textarea cols="30" rows="1" name="enddate"><?php echo $enddate; ?></textarea></p>
 
  <?php
}

//Job count

function wt_get_category_count($input = '') {
global $wpdb;
if($input == '')
{
$category = get_the_category();
return $category[0]->category_count;
}
elseif(is_numeric($input))
{
$SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->term_taxonomy.term_id=$input";
return $wpdb->get_var($SQL);
}
else
{
$SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->terms.slug='$input'";
return $wpdb->get_var($SQL);
}
}







// Bread Crumbs

function cpi_breadcrumbs() {
 
  $delimiter = '&raquo;';
  $current = 'class="breadCurrent">'; // tag before the current crumb
 
  if ( !is_home() && !is_front_page() || is_paged() ) {
 
    global $post;
    $homeLink = get_bloginfo('url');
   
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE));
      echo $current . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<li><li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li></li>';
      echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li>';
	  echo '<li><a href="" ' . $current . get_the_time('d') . '</a></li>';
 
    } elseif ( is_month() ) {
      echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>';
	  echo '<li><a href="" ' . $current . get_the_time('F') . '</a></li>';
 
    } elseif ( is_year() ) {
	  echo '<li><a href="" ' . $current . get_the_time('Y') . '</a></li>';
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->name . '</a></li>';
        echo '<li><a href="" ' . $current . ShortenText(get_the_title()) . '</a></li>';
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE);
        echo '<li><a href="" ' . $current . ShortenText(get_the_title()) . '</a></li>';
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
	  echo '<li><a href="" ' . $current . $post_type->labels->name . '</a></li>';
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE);
      echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
      echo '<li><a href="" ' . $current . ShortenText(get_the_title()) . '</a></li>';
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo '<li><a href="" ' . $current . ShortenText(get_the_title()) . '</a></li>';
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ';
      echo '<li><a href="" ' . $current . ShortenText(get_the_title()) . '</a></li>';
 
    } elseif ( is_search() ) {
      echo '<li><a href="" ' . $current .  get_search_query() . '</a></li>';
       
    } elseif ( is_tag() ) {
      echo '<li><a href="" ' . 'Posts tagged "' . single_tag_title('', false) . '"</a></li>';
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo '<li><a href="" ' . $current . 'Articles posted by ' . $userdata->display_name . '</a></li>';
       
    } elseif ( is_404() ) {
      echo '<li><a href="" ' . $current . 'Error 404' . '</a></li>';
    }
  }
} // end cpi_breadcrumbs()



// Gravity forms tender drop down
add_filter("gform_pre_render", "populate_dropdown");

//Note: when changing drop down values, we also need to use the gform_admin_pre_render so that the right values are displayed when editing the entry.
add_filter("gform_admin_pre_render", "populate_dropdown");

function populate_dropdown($form){

    //Only populating drop down for form id 1
    if($form["id"] != 1)
       return $form;
	
	//Argument for custom post type tenders
	$args = array( 'post_type' => 'tenders' );

    //Reading posts for "Business" category;
    $posts = get_posts( $args );

    //Creating drop down item array.
    $items = array();

    //Adding initial blank value.
    $items[] = array("text" => "", "value" => "");

    //Adding post titles to the items array
    foreach($posts as $post)
        $items[] = array("value" => $post->post_title, "text" => $post->post_title);

    //Adding items to field id 1. Replace 1 with your actual field id. You can get the field id by looking at the input name in the markup.
    foreach($form["fields"] as &$field)
        if($field["id"] == 1){            
            $field["choices"] = $items;
        }

    return $form;
}


// Gravity forms tender drop down
add_filter("gform_pre_render", "populate_job_dropdown");

//Note: when changing drop down values, we also need to use the gform_admin_pre_render so that the right values are displayed when editing the entry.
add_filter("gform_admin_pre_render", "populate_job_dropdown");

function populate_job_dropdown($form){

    //Only populating drop down for form id 1
    if($form["id"] != 2)
       return $form;
	
	//Argument for custom post type tenders
	$args = array( 'post_type' => 'jobs' );

    //Reading posts for "Business" category;
    $posts = get_posts( $args );

    //Creating drop down item array.
    $items = array();

    //Adding initial blank value.
    $items[] = array("text" => "", "value" => "");

    //Adding post titles to the items array
    foreach($posts as $post)
        $items[] = array("value" => $post->post_title, "text" => $post->post_title);

    //Adding items to field id 1. Replace 1 with your actual field id. You can get the field id by looking at the input name in the markup.
    foreach($form["fields"] as &$field)
        if($field["id"] == 1){            
            $field["choices"] = $items;
        }

    return $form;
}


// Add icons to custom posts in the admin interface

add_action( 'admin_head', 'cpt_icons' );
function cpt_icons() {
    ?>
    <style type="text/css" media="screen">
    #menu-posts-casestudy .wp-menu-image {
            background: url(<?php bloginfo('template_url') ?>/-/images/icon/case-study-icon.png) no-repeat 6px -17px !important;
        }
    #menu-posts-news .wp-menu-image {
            background: url(<?php bloginfo('template_url') ?>/-/images/icon/news-icon.png) no-repeat 6px -17px !important;
        }
    #menu-posts-jobs .wp-menu-image {
            background: url(<?php bloginfo('template_url') ?>/-/images/icon/jobs-icon.png) no-repeat 6px -17px !important;
        }
    #menu-posts-tenders .wp-menu-image {
            background: url(<?php bloginfo('template_url') ?>/-/images/icon/tenders-icon.png) no-repeat 6px -17px !important;
        }
	#menu-posts-casestudy:hover .wp-menu-image, 
	#menu-posts-casestudy.wp-has-current-submenu .wp-menu-image,
	#menu-posts-news:hover .wp-menu-image, 
	#menu-posts-news.wp-has-current-submenu .wp-menu-image,
	#menu-posts-jobs:hover .wp-menu-image, 
	#menu-posts-jobs.wp-has-current-submenu .wp-menu-image,
	#menu-posts-tenders:hover .wp-menu-image, 
	#menu-posts-tenders.wp-has-current-submenu .wp-menu-image {
            background-position:6px 7px!important;
        }
    </style>

<?php } ?>