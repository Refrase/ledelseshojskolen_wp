$(document).ready(function() {

'use strict';

	// Opdatér aktivt link i nav med .active state
	$(".nav a").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
	});

	// Luk dropdown responsive nav, når der trykkes på link
	$('navbar a').click(function() {
		var navbarToggle = $('.navbar-toggle');
		if (navbarToggle.is(':visible')) {
			navbarToggle.trigger('click');
		}
	});

	// Animér scroll til #-link
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

	// Fuldskærmsvideo
	$(function(){
	  $('#videoIntro').css({
	  	width: $(window).innerWidth() + 'px',
	  	height: $(window).innerWidth()*0.56 + 'px'
	  });

	  // Behold fuld skærm ved ændring af vinduestr.
	  $(window).resize(function(){
	    $('#videoIntro').css({
	    	width: $(window).innerWidth() + 'px',
	    	height: $(window).innerWidth()*0.56 + 'px'
	    });
	  });
	});

	// Sæt billedes højde = dets loadede bredde
	// var cw = $('.faelskab_billeder li').width();
	// $('.faelskab_billeder li').css({'height':cw+'px'});

	// Share-buttons i footer - dans på hover
	$('.footer-btm-right li').on('mouseenter', function(){
		$('.fa', this).animate({bottom: '+=4px'}, 200);
	}).on('mouseleave click', function(){
		$('.fa', this).animate({bottom: '-=4px'}, 400);
	});

	// Timeline (tidlhoj)
	// Få x-placering af den prik der trykkes på (%)
	$('.tl-punkt').click(function() {
		// Returnerer positionen for det klikkede (top og left)
   	var clickedPos = $(this).position();
   	// Få left-positionen
   	var clickedX = clickedPos.left;
   	// Tag højde for trekantens bredde
   	var adjustClickedX = clickedX - 22;
   	// Flyt trekant derhen
   	$('.timeline-now').animate({
   		left: adjustClickedX
   	});
   	// Hide/show relevant indhold
   	// Hent id på på prik der trykkes på
   	var clickedNum = $(this).attr('id');
   	// Skjul alle content blokke
   	var tlpContAll = $('.tl-p1-cont, .tl-p1-contpic, .tl-p2-cont, .tl-p2-contpic, .tl-p3-cont, .tl-p3-contpic');
   	tlpContAll.hide();
   	// Hvis content blok alt efter hvilken der trykkes på
   	if (clickedNum === 'tl-p1') {
			$('.tl-p1-cont, .tl-p1-contpic').fadeIn();
   	} else if (clickedNum === 'tl-p2') {
			$('.tl-p2-cont, .tl-p2-contpic').fadeIn();
   	} else if (clickedNum === 'tl-p3') {
			$('.tl-p3-cont, .tl-p3-contpic').fadeIn();
   	}
	});











});