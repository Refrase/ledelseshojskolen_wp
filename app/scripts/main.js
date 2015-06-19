$(document).ready(function() {

'use strict';

	// Opdatér aktivt link i nav med .active state
	$( '.nav a' ).on( "click" , function(){
    $( '.nav' ).find( '.active' ).removeClass( 'active' );
    $(this).parent().addClass( 'active' );
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

	// Luk dropdown responsive nav, når der trykkes på link
	$( '.navbar-nav a' ).click(function() {
	    var navbarToggle = $( '.navbar-toggle' );
	    if ( navbarToggle.is( ':visible' ) ) {
	        navbarToggle.trigger( 'click' );
	    }
	});
	// ... og når man klikker udenfor dropdown-menuen
	$(document).on('click',function(){
	  var navbarToggle = $( '.navbar-toggle' );
	  if ( navbarToggle.is( ':visible' ) ) {
			$( '.collapse' ).collapse( 'hide' );
		}
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

	// Timeline (tidlhoj)
	$('.tl-punkt').click(function() {
   	// Hide/show relevant indhold
   	// Hent id på på prik der trykkes på
   	var clickedId = $(this).attr('id');
   	// Skjul alle content blokke
   	var tlpContAll = $('.tl-cont, .tidlhoj-pic, .tidlhoj-pic_overlay');
   	tlpContAll.hide();
   	// Vis content blok alt efter hvilken der trykkes på
   	if (clickedId === 'tl-p1') {
			$('.tl-p1-contpic').show();
			$('.tl-p1-cont').fadeIn(400);
			$('.tl-p1-contpic-overl').toggle('slide');
   	} else if (clickedId === 'tl-p2') {
			$('.tl-p2-contpic').show();
			$('.tl-p2-cont').fadeIn(400);
			$('.tl-p2-contpic-overl').toggle('slide');
   	} else if (clickedId === 'tl-p3') {
			$('.tl-p3-contpic').show();
			$('.tl-p3-cont').fadeIn(400);
			$('.tl-p3-contpic-overl').toggle('slide');
   	}
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











});