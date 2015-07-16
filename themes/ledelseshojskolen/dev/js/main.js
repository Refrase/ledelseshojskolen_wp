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
	// Make mc4wp-alert dismissible with Bootstrap classes
	var mailChimpAlert = $('.mc4wp-alert, .mc4wp-success');
	mailChimpAlert.addClass('tilmelding-besked alert alert-dismissible fade in');
	mailChimpAlert.attr( 'role', 'alert' );
	var alertDismissBtn = $( '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>' );
	mailChimpAlert.prepend( alertDismissBtn );

	// MailChimp for WP plugin: Checkbox
	// Hidden inputs take on value of visible inputs, for the mc4wp-plugins checkbox functionality to work (subscription to an additional list (here: Medlemskab)). Hidden inputs created in form-markup in the Mailchimp for WP plugin in wp-admin.
	$('#TILMFORN').change(function() { $('#mc4wp-TILMFORN').val( $('#TILMFORN').val() ); });
	$('#TILMEFTERN').change(function() { $('#mc4wp-TILMEFTERN').val( $('#TILMEFTERN').val() ); });
	$('#mc4wp_email').change(function() { $('#mc4wp-EMAIL').val( $('#mc4wp_email').val() ); });
	$('#TILMORG').change(function() { $('#mc4wp-TILMORG').val( $('#TILMORG').val() ); });
	$('#TILMBESK').change(function() { $('#mc4wp-TILMBESK').val( $('#TILMBESK').val() ); });

	/* ----- Fællesskabet ----- */

	// Fade info om medlem ind, når musen holdes over (fade ud når den fjernes)
	var showMemberInfo = function( group, meta ) {
		$( document ).on({
			mouseenter: function() {
				$( meta, this ).stop().fadeIn();
			},
			mouseleave: function() {
				$( meta, this ).stop().fadeOut();
			}
		}, group);
	}

	showMemberInfo( '.adv-board_medlem', '.adv-board_medlem-meta' );
	showMemberInfo( '.lh-grp_medlem', '.lh-grp_medlem-meta' );

	/* ----- / Fællesskabet ----- */

	// Timeline (tidlhoj)
	// Load acitve farve på nr. 2 prik
	$('#tl-p2').css({ fill: '#32281e' });

	$('.tl-punkt').click(function() {
   	// Hide/show relevant indhold
   	// Hent id på på prik der trykkes på
   	$('.tl-punkt').css({ fill: '#faf5f0' });
   	$(this).css({ fill: '#32281e' });
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

	// Pull list of members from MailChimp list: '... Medlemskab'
	// $( '.btn-medlemmer' ).click( function(e) {
	// 	e.preventDefault();
	// 	// URL
	// 	var mailChimpListAPI = 'https://us11.api.mailchimp.com/schema/3.0/Lists/Members/Instance.json?jsoncallback=?';
	// 	// Data
	// 	var mcOptns = { merge_fields[2] };
	// 	// Success
	// 	function displayMembers(data) {
	// 		var memberHTML = '<ul>';
	// 		$.each( data.members, function (i, member) {
	// 			memberHTML += '<li>';
	// 			memberHTML += 'member.TILMFORN';
	// 			memberHTML += '</li>';
	// 		});
	// 		memberHTML += '</ul>';
	// 		$('#faelskabMembers').html( memberHTML );
	// 	}
	// 	// URL, data, success used in here
	// 	$.ajax({
	// 		type: 'GET',
	// 		url: mailChimpListAPI,
	// 		data: mcOptns,
	// 		cache: false,
	// 		dataType: 'jsonp',
	// 		contentType: 'application/json; charset=utf-8',
	// 		beforeSend: function (xhr) {
	// 			xhr.setRequestHeader('Authorization', 'apikey 3d1a476aac188b529e6e1db4661f60c8-us11');
	// 		},
	// 		success: displayMembers,
	// 		error: function(){
	// 			console.log(data);
	// 		}
	// 	});
	// });

	// MIG -> lists/dff377c9e8/members/3e5c75018418104d0fbbebd4a53a42ad

	// "rel": "members",
	// "href": "https://us11.api.mailchimp.com/3.0/lists/dff377c9e8/members",
	// "method": "GET",
	// "targetSchema": "https://us11.api.mailchimp.com/schema/3.0/Lists/Members/Collection.json?jsoncallback=?"





});