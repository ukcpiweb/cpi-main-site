<div id="tax-drill-down">
<label for="studyfilter">Filter by type:</label>
<select id="studyfilter" name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
 <option>Select Option</option> 
 <option value="<?php bloginfo('url');?>/case-studies/">All Business Types</option> 
 <?php 
  $categories=  get_categories('taxonomy=casestudytype'); 
  foreach ($categories as $category) {
  	$option = '<option value="'. bloginfo('url') .'/casestudytype/'.$category->category_nicename.'">';
	$option .= $category->cat_name;
	$option .= ' ('.$category->category_count.')';
	$option .= '</option>';
	echo $option;
  }
 ?>
</select>
</div>

<div id="tax-drill-down">
<label for="studyfilter2">Filter by technology:</label>
<select id="studyfilter2" name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
 <option>Select Option</option> 
 <option value="<?php bloginfo('url');?>/case-studies/">All Technologies</option> 
 <?php 
  $categories=  get_categories('taxonomy=technology-casestudy'); 
  foreach ($categories as $category) {
  	$option = '<option value="'. bloginfo('url') .'/technology-casestudy/'.$category->category_nicename.'">';
	$option .= $category->cat_name;
	$option .= ' ('.$category->category_count.')';
	$option .= '</option>';
	echo $option;
  }
 ?>
</select>
</div>