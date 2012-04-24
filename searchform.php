<?php
/**
 * The template for displaying search forms in the CPI INNOVATOR THEME
 */
?>
	
	<form action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" method="get" id="searchform" name="searchform">
  		<label class="hideit" for="s">Search</label>
  		<input type="text" name="s" id="s" value="search site" /> 
   		<button class="search-button" type="submit">Search</button>
	</form>
