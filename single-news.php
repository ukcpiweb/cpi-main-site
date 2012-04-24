<?php
/*
 * The template for displaying a news items in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
	
	<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h2><a class="cpi-button" href="<?php bloginfo('url'); ?>/news/">News</a> <?php echo $terms = get_the_term_list( $post->ID, 'technology-news', '', ', ', ''); ?></h2></span>

</div>

	

	<section class="box-container news-item" id="postPage">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div id="meta">
	<div id="date"><strong><?php the_time('jS F Y') ?></strong> Last updated: <?php the_modified_time('jS F Y');?> </div>
	<div id="share">
			<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_email"></a>
<a class="addthis_button_linkedin"></a>
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_google_plusone" g:plusone:count="false"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f8fd85e198820c8"></script>
<!-- AddThis Button END -->
	</div>
	</div>
	
	<h1><?php the_title(); ?></h1>

	<div class="figure">
		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?>
	</div>

	<?php the_content(); ?>

		<?php if ( get_post_meta($post->ID, 'contact', true) ) : ?>
			<div class="trigger"><h2><a href="#">Notes to Editors</a></h2></div> 
	<div class="toggle_container">

				<h3>Contacts</h3>
				<?php echo get_post_meta($post->ID, 'contact', true); ?>
				<?php if ( get_post_meta($post->ID, 'notes', true) ) : ?>
					<h3>Notes</h3>
					<?php echo get_post_meta($post->ID, 'notes', true); ?>
				<?php endif; ?>	

	</div> 
			<?php endif; ?>
			
		<?php the_related(); ?>
	
	
	<?php edit_post_link( __( 'Edit News Item' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    </section>
    
    <aside>
    
    	<?php include 'reuse/recent-news-sidebar.php'; ?>    
    	
    	<div class="aside-box aside-right">
    	
			<div class="twitterBox">
				<h3>Twitter</h3>
				<div class="tweet"></div>
				<a class="cpi-button" href="http://twitter.com/ukcpi">Follow CPI on Twitter</a>
			</div>
	</div>
    <div class="aside-box aside-right">
        	<h3>Want to find out more?</h3><br/>
    	<h2>Marketing Contact</h2>
		Matthew Herbert<br/>
		<script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=" +
"x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f(\"ufcnitnof x({)av" +
" r,i=o\\\"\\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!15{)rt{y+xx=l;=+;" +
"lc}tahce({)}}of(r=i-l;1>i0=i;--{)+ox=c.ahAr(t)i};erutnro s.buts(r,0lo;)f}\\" +
"\"(0)11\\\\,s\\\"}wfl#}|nQR }roSc26\\\\0t\\\\\\\\\\\\6;01\\\\\\\\13\\\\05\\" +
"\\03\\\\\\\\25\\\\04\\\\00\\\\\\\\20\\\\0<\\\\5]00\\\\\\\\24\\\\00\\\\03\\\\"+
"\\\\33\\\\02\\\\03\\\\\\\\14\\\\0!\\\\HU2503\\\\\\\\02\\\\01\\\\00\\\\\\\\0" +
"4\\\\0n\\\\\\\\\\\\02\\\\0/\\\\7A00\\\\\\\\719)(05802\\\\\\\\:w5<7>02\\\\\\" +
"\\4s01\\\\\\\\+r8!\\\"\\\\\\\\\\\\i>3j03\\\\\\\\ek1=4+Q15{03\\\\\\\\LOw_30\\"+
"\\0~\\\\vf\\\\tG\\\\TQMZ^[23\\\\0F\\\\JE06\\\\0N\\\\FV\\\\tH\\\\aWmT7{17\\\\"+
"\\\\~n7rroa~r`77\\\\1+\\\\77\\\\1{\\\\dbfmU(a5wc#l=c\\\"\\\\\\\\\\\\3V02\\\\"+
"\\\\20\\\\06\\\\03\\\\\\\\16\\\\00\\\\02\\\\\\\\\\\\n0\\\\00\\\\\\\\1X00\\\\"+
"\\\\32\\\\06\\\\02\\\\\\\\37\\\\04\\\\00\\\\\\\\23\\\\00\\\\00\\\\\\\\\\\\n" +
"\\\\\\\\(\\\"}fo;n uret}r);+)y+^(i)t(eAodrCha.c(xdeCoarChomfrg.intr=So+7;12" +
"%=;y=2y*))+y10(1i>f({i+)i+l;i<0;i=r(foh;gten.l=x,l\\\"\\\\\\\"\\\\o=i,r va)" +
"{,y(x fontincfu)\\\"\")"                                                     ;
while(x=eval(x));
//-->
//]]>
</script>
<br/>
		<b>Marketing Manager</b><br/><br/>

		<h2>Media and PR Contact</h2>

		Gareth Charlton<br/>
<script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=" +
"x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f(\"ufcnitnof x({)av" +
" r,i=o\\\"\\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!29{)rt{y+xx=l;=+;" +
"lc}tahce({)}}of(r=i-l;1>i0=i;--{)+ox=c.ahAr(t)i};erutnro s.buts(r,0lo;)f}\\" +
"\"(3)\\\\,7\\\"01\\\\\\\\03\\\\0t\\\\\\\\\\\\30\\\\02\\\\02\\\\\\\\21\\\\0O" +
"\\\\02\\\\00\\\\02\\\\\\\\EF6J00\\\\\\\\VNtF\\\\\\\\WHNajpnqrz6Z77\\\\1b\\\\"+
"fpUr2/kSe{77\\\\17\\\\17\\\\\\\\mj77\\\\1C\\\\w%mmth37\\\\06\\\\03\\\\\\\\2" +
"5\\\\05\\\\02\\\\\\\\17\\\\04\\\\02\\\\\\\\25\\\\00\\\\03\\\\\\\\U523\\\\05" +
"\\\\03\\\\\\\\33\\\\05\\\\00\\\\\\\\25\\\\04\\\\00\\\\\\\\34\\\\04\\\\01\\\\"+
"\\\\K!06\\\\00\\\\00\\\\\\\\\\\\tn\\\\\\\\\\\\G#^807\\\\0r\\\\\\\\\\\\24\\\\"+
"06\\\\}*7~00\\\\\\\\yw%! ?=%27\\\\0q\\\\8#3+00\\\\\\\\2l00\\\\\\\\32\\\\0n\\"+
"\\\\\\\\\\3u %!.2777\\\\1R\\\\^Q22\\\\0R\\\\ZJ25\\\\0\\\\\\\\\\\\\\\\C\\\\Z" +
"u\\\\\\\\\\\\\\\\]FNBNF02\\\\0C\\\\L^FZ7A03\\\\\\\\WKHNrAA<}!77\\\\1k\\\\7p" +
")w;6}|{u7g17\\\\\\\\%{g~jmfsgk\\\"\\\\f(;} ornture;}))++(y)^(iAtdeCoarchx.e" +
"(odrChamCro.fngriSt+=;o27=1y%){++;i<l;i=0(ior;fthnglex.l=\\\\,\\\\\\\"=\\\"" +
",o iar{vy)x,f(n ioctun\\\"f)\")"                                             ;
while(x=eval(x));
//-->
//]]>
</script>
<br/>
		<b>Marketing Communications Executive</b><br/><br/>
<a href="<?php bloginfo('url'); ?>/contact" class="cpi-button">More Contact Information</a>
</div>

    </aside>
	
<?php get_footer(); ?>
	
