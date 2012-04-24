// START Document Ready Function
$(document).ready(function(){


// Lightbox    
$("a[rel^='prettyPhoto']").prettyPhoto({
	theme: 'facebook'
});


// Tender Fetch Ajax Posts
$.ajaxSetup({cache:false});
				$("#tenderMenu li a").click(function(){
					var post_id = $(this).attr("rel")
					$("#your_post_here").html("loading...");
					$('div.tenderAlert').hide();
					$("#your_post_here").load("http://www.uk-cpi.com/ajax-tenders/",{id:post_id});
					return false;
					});
					
// Tender Fetch Ajax Posts
$.ajaxSetup({cache:false});
				$("#careersMenu li a").click(function(){
					var post_id = $(this).attr("rel")
					$("#your_post_here").html("loading...");
					$('div.tenderAlert').hide();
					$("#your_post_here").load("http://www.uk-cpi.com/ajax-careers/",{id:post_id});
					return false;
					});


// Accordion Menu

//Hide (Collapse) the toggle containers on load
	$(".toggle_container").hide(); 

	//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
	$(".trigger").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow");
		return false; //Prevent the browser jump to the link anchor
	});


// Initialise Tweet for Footer

$(".tweet").tweet({
            username: "ukcpi",
            join_text: "auto",
            count: 1,
            auto_join_text_default: "we said,", 
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading recent tweet...",
            template: "{text} - {retweet_action}"
        });

// Onclick inputbox clear for short search
$('#s').focus(function() {
		
	if($(this).val()=="search site"){
		$(this).val("");
	}
    }).blur(function(){
		if($(this).val()==""){
		$(this).val("search site");
	}
});

 
// Scroll page to the top
	$('a.scrollToTop').click(function(){
	$('html, body').animate({scrollTop:0}, 'slow');
 	return false;
 	});

// Newsletter reveal
var fieldExample = $('#mce-EMAIL');
$('div.newsletterExtend').css({
    "position":"absolute",
    "left":"0",
    "top":"102px"
});

fieldExample.focus(function() {
    var div = $('div.newsletterExtend').show();
    $(document).bind('focusin.newsletterExtend click.newsletterExtend',function(e) {
        if ($(e.target).closest('.newsletterExtend, #mce-EMAIL').length) return;
        $(document).unbind('.newsletterExtend');
        div.fadeOut('medium');
    });
});
$('div.newsletterExtend').hide();

// Report Coda annual-report

var $panels = $('#annual-report .scrollContainer > div');
var $container = $('#annual-report .scrollContainer');

// if false, we'll float all the panels left and fix the width 
// of the container
var horizontal = true;

// float the panels left if we're going horizontal
if (horizontal) {
  $panels.css({
    'float' : 'left',
    'position' : 'relative' // IE fix to ensure overflow is hidden
  });
  
  // calculate a new width for the container (so it holds all panels)
  $container.css('width', $panels[0].offsetWidth * $panels.length);
}

// collect the scroll object, at the same time apply the hidden overflow
// to remove the default scrollbars that will appear
var $scroll = $('#annual-report .scroll').css('overflow', 'hidden');


// apply our left + right buttons
$scroll
  .before('<img class="scrollButtons left" src="http://alpha.uk-cpi.com/wp-content/themes/CPI/-/images/scroll_left.png" />')
  .after('<img class="scrollButtons right" src="http://alpha.uk-cpi.com/wp-content/themes/CPI/-/images/scroll_right.png" />');

// handle nav selection
function selectNav() {
  $(this)
    .parents('ul:first')
      .find('a')
        .removeClass('selected')
      .end()
    .end()
    .addClass('selected');
}

$('#annual-report .scroll-page-no').find('a').click(selectNav);

// go find the navigation link that has this target and select the nav
function trigger(data) {
  var el = $('#annual-report .scroll-page-no').find('a[href$="' + data.id + '"]').get(0);
  selectNav.call(el);
}

if (window.location.hash) {
  trigger({ id : window.location.hash.substr(1) });
} else {
  $('ul.scroll-page-no a:first').click();
}

// offset is used to move to *exactly* the right place, since I'm using
// padding on my example, I need to subtract the amount of padding to
// the offset.  Try removing this to get a good idea of the effect
var offset = parseInt((horizontal ? 
  $container.css('paddingTop') : 
  $container.css('paddingLeft')) 
  || 0) * -1;


var scrollOptions = {
  target: $scroll, // the element that has the overflow
  
  // can be a selector which will be relative to the target
  items: $panels,
  
  navigation: '.scroll-page-no a',
  
  // selectors are NOT relative to document, i.e. make sure they're unique
  prev: 'img.left', 
  next: 'img.right',
  
  // allow the scroll effect to run both directions
  axis: 'xy',
  
  onAfter: trigger, // our final callback
  
  offset: offset,
  
  // duration of the sliding effect
  duration: 500,
  
  // easing - can be used with the easing plugin: 
  // http://gsgd.co.uk/sandbox/jquery/easing/
  easing: 'swing'
};

// apply serialScroll to the annual-report - we chose this plugin because it 
// supports// the indexed next and previous scroll along with hooking 
// in to our navigation.
$('#annual-report').serialScroll(scrollOptions);

// now apply localScroll to hook any other arbitrary links to trigger 
// the effect
$.localScroll(scrollOptions);

// finally, if the URL has a hash, move the annual-report in to position, 
// setting the duration to 1 because I don't want it to scroll in the
// very first page load.  We don't always need this, but it ensures
// the positioning is absolutely spot on when the pages loads.
scrollOptions.duration = 1;
$.localScroll.hash(scrollOptions);


}); // End Document Ready Function
