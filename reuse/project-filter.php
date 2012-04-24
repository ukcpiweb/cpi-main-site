<div id="tax-drill-down">
<label for="projectfilter">Filter by:</label>
<select id="projectfilter" name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
 <option>Select Option</option> 
 <option value="<?php bloginfo('url');?>/projects/">All Technologies</option> 
 <?php 
  $categories=  get_categories('taxonomy=technology-project'); 
  foreach ($categories as $category) {
  	$option = '<option value="'. bloginfo('url') .'/technology-project/'.$category->category_nicename.'">';
	$option .= $category->cat_name;
	$option .= ' ('.$category->category_count.')';
	$option .= '</option>';
	echo $option;
  }
 ?>
</select>
</div>