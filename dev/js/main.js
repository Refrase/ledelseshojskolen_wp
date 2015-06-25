jQuery(document).ready(function($) {

'use strict';

	// Opdatér aktivt link i nav med .active state
	$( '.nav a' ).on( 'click' , function() {
    $( '.nav' ).find( '.active' ).removeClass( 'active' );
    $(this).parent().addClass( 'active' );
	});

	// Fjern aktivt stadie for links ved tryk på 'Ledelseshøjskolen'
	$( '.navbar-brand' ).on( 'click' , function() {
    $( '.nav' ).find( '.active' ).removeClass( 'active' );
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

	// MailChimp for WP plugin: Tilmeldingsformular
	$('.mc4wp-form').addClass('form-nhojsktilm form-horizontal');
	$('.mc4wp-alert, .mc4wp-success').addClass('tilmelding-besked');
	$('.tilmelding-besked').insertAfter('.mc4wp-form h3');

	// MailChimp for WP plugin: Checkbox
	// Hidden inputs take on value of visible inputs, for the mc4wp-plugins checkbox functionality to work (subscription to an additional list (here: Medlemskab)). Hidden inputs created in form-markup in the Mailchimp for WP plugin in wp-admin.
	$('#TILMFORN').change(function() { $('#mc4wp-TILMFORN').val( $('#TILMFORN').val() ); });
	$('#TILMEFTERN').change(function() { $('#mc4wp-TILMEFTERN').val( $('#TILMEFTERN').val() ); });
	$('#mc4wp_email').change(function() { $('#mc4wp-EMAIL').val( $('#mc4wp_email').val() ); });
	$('#TILMORG').change(function() { $('#mc4wp-TILMORG').val( $('#TILMORG').val() ); });
	$('#TILMBESK').change(function() { $('#mc4wp-TILMBESK').val( $('#TILMBESK').val() ); });

	// Timeline (tidlhoj)
	$('.tl-punkt').click(function() {
   	// Hide/show relevant indhold
   	// Hent id på på prik der trykkes på
   	var clickedId = $(this).attr('id');
   	// Skjul alle content blokke
   	var tlpContAll = $('.tl-cont, .tidlhoj-pic_overlay');
   	tlpContAll.hide();
   	// Vis content blok alt efter hvilken der trykkes på
   	if (clickedId === 'tl-p1') {
			$('.tl-p1-cont').show(0);
   	} else if (clickedId === 'tl-p2') {
			$('.tl-p2-cont').show(0);
   	} else if (clickedId === 'tl-p3') {
			$('.tl-p3-cont').show(0);
   	}
   	$('.tidlhoj-pic_overlay').toggle('slide');
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