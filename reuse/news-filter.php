<div id="tax-drill-down">
<label for="newsfilter">Filter by:</label>
<select id="newsfilter" name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
 <option>Select Option</option> 
 <option value="<?php bloginfo('url');?>/news/">All News</option> 
 <?php 
  $categories=  get_categories('taxonomy=technology-news'); 
  foreach ($categories as $category) {
  	$option = '<option value="'. bloginfo('url') .'/technology-news/'.$category->category_nicename.'">';
	$option .= $category->cat_name;
	$option .= ' ('.$category->category_count.')';
	$option .= '</option>';
	echo $option;
  }
 ?>
</select>
</div>