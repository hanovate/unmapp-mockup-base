/* Move menu to top in collapse state.
 ***********************/
sizeStatus = 'big';
breakpt = 752;

if ($(window).width() < breakpt) {
	moveMenu();
} else {
	sizeStatus = 'big';
}

$(document).ready(function() {
	moveMenu();
	// run initial to see if screen is small already
	$(window).resize(function() {
		moveMenu();
	});
	// enable mobile menu toggle button
	 $("button.menu-toggle.navbar-toggle").click(function() {
          $("#mobile-menu").toggleClass('in');
    });
});

function moveMenu() {
	currentSize = $(window).width();
	if (currentSize < breakpt && sizeStatus == 'big') {

		$('.navbar-collapse').each(function(index) {
			$(this).addClass('menu' + index);
			$(this).parent().addClass('menu' + index + '-parent');
			$(this).detach().appendTo('#mobile-menu');
			sizeStatus = 'small';
			$(this).find('a.dropdown-toggle').attr('data-toggle', 'no-dropdown');
		});
	} else if (currentSize > breakpt && sizeStatus == 'small') {

		$('#mobile-menu .navbar-collapse').each(function(index) {
			$(this).removeClass('menu' + index);
			$(this).detach().appendTo('.menu' + index + '-parent');
			$(this).parent().removeClass('menu' + index + '-parent');
			sizeStatus = 'small';
			$(this).find('a.dropdown-toggle').attr('data-toggle', 'dropdown');
		});

		sizeStatus = 'big';
	}
}

/* Dropdown menu edge detection
 *******************************/
function edgeDetect(e) {
      $(e).removeClass('edge');
	  var elm = $('ul:first', e);
	  if (elm.hasClass('edge')){
	  	var off = elm.removeClass('edge').offset().addClass('edge');
	  } else {
	  	var off = elm.offset();
	  }
	  var l = off.left;

	  var w = elm.width();
	  var docW = $("#page").width();
	  var isEntirelyVisible = (l + w <= docW);

	  if (!isEntirelyVisible) {
		$(e).addClass('edge');
	  }
}

$(function() {
	$(".dropdown-menu li").has("ul").hover(function(e) {
		edgeDetect(this);
	});
});

/********** Support Touch Behavior for Horz menu on larger screens ********/
$(function() {
	$('#horiz-nav .dropdown >.dropdown-toggle').on("touchstart", function (e) {
	    e.preventDefault();
	    'use strict'; //satisfy code inspectors
	    $(this).dropdown("toggle");
	});

	$('#horiz-nav .dropdown-submenu > .dropdown-toggle').on("touchstart", function (e) {
	    e.preventDefault();
	    $(this).parent('.dropdown-submenu').toggleClass("open");
	    edgeDetect($(this).parent("li"));
	});
 });

/********** Sticky Horizontal Nav ********/
$(function() {
// grab the initial top offset of the navigation on first scoll
	$(window).one('scroll', function(){
        sticky_navigation_offset_top = $('#nav').offset().top;
    });
   $(window).resize(function(){
        sticky_navigation_offset_top = $('#nav').removeClass('stickynav').offset().top;
        sticky_navigation();
    });
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_navigation();
	});
	// our function that decides if the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top

		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) {
			$('#nav').addClass('stickynav');

		} else {
			$('#nav').removeClass('stickynav');
		}
	};
});

/********** UNM Panel  *******/
/* Add UNM Panel Container */
function addPanel() {
	jQuery("body").append('<div id="unm_panel" class="hidden-xs hidden-sm"><div class="container"></div></div>');
	jQuery("#toolbar-nav").append('<li class="unm_panel_open hidden-sm"><a href="#unm_panel">more <span class="caret"></span></a></li>');

	jQuery('.unm_panel_open').click(function(event) {
		event.preventDefault();
		$('.unm_panel_open .caret').toggleClass("up");
		$("#unm_panel").slideToggle('slow');
	});
}

var panel_url = '//webcore.unm.edu/json.php?content=v2/unm-panel.html';

/* Loading JSON objects using JSON */
$(function($) {

  if(panel_url){
		$.getJSON(panel_url).done(function(data) {
			addPanel();
			$("#unm_panel .container").append(data.content);
		}).fail(function(xhr, err, exception, status) {
			console.log('Error data:', err);
			console.log(status + " " + exception);
			console.log("readyState: " + xhr.readyState + "\nstatus: " + xhr.status + "\nresponseText: " + xhr.responseText);
		});
	}
});


/**********Load Lobo Alerts  *******/
/* Loading JSON objects using JSONP */
var loboalerts_url = '//webcore.unm.edu/v2/loboalerts.json';
$(function($) {
  if(loboalerts_url){
	$.getJSON(loboalerts_url).done(function(data) {
		if (data.alert != 'none') {
			$(".navbar-unm").after('<div id="loboalert" class="alert alert-danger row"><span class="fa fa-warning col-md-1"> </span><div class="content col-md-11"></div></div>');
			$("#loboalert .content").append('<hgroup><h2>' + data.alert + '</h2><h3>' + data.date + '</h3></hgroup>');
			$("#loboalert .content").append('<p>' + data.details);
			if (data.link) $("#loboalert .content").append('  <a href="' + data.link + '">Read More</a>');
			$("#loboalert .content").append('</p>');
		}
	}).fail(function(xhr, err, exception, status) {
		console.log('Error data:', err);
		console.log(status + " " + exception);
		console.log("readyState: " + xhr.readyState + "\nstatus: " + xhr.status + "\nresponseText: " + xhr.responseText);
	});
  }
});

/********** Scroll to Top *******/
$(function($) {
	$("#totop").click(function() {
		$("html, body").animate({
			scrollTop : 0
		}, "slow");
		return false;
	});
	$(window).scroll(function() {
		if ($(window).scrollTop() > 200) {
			$('#totop').fadeIn();
		} else {
			$('#totop').fadeOut();
		}
	});
});