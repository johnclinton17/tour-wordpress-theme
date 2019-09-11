jQuery( function ( $ ) {
    'use strict';
    // here for each comment reply link of wordpress
    $( '.comment-reply-link' ).addClass( 'btn btn-primary' );

    // here for the submit button of the comment reply form
    $( '#commentsubmit' ).addClass( 'btn btn-primary' );

    // The WordPress Default Widgets
    // Now we'll add some classes for the wordpress default widgets - let's go

    // the search widget
    $( '.widget_search input.search-field' ).addClass( 'form-control' );
    $( '.widget_search input.search-submit' ).addClass( 'btn btn-default' );

    $( '.widget_rss ul' ).addClass( 'media-list' );

    $( '.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul' ).addClass( 'nav' );

    $( '.widget_recent_comments ul#recentcomments' ).css( 'list-style', 'none').css( 'padding-left', '0' );
    $( '.widget_recent_comments ul#recentcomments li' ).css( 'padding', '5px 15px');

    $( 'table#wp-calendar' ).addClass( 'table table-striped');

    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass('open');
    });

    // slick slider

     $('.package-slider').slick({dots: false,infinite: true,arrows: true,speed: 1000,slidesToShow: 2,slidesToScroll: 1,autoplay: true,responsive: [
        {
          breakpoint: 993,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        }
      ]});
     $('.customer-slider').slick({dots: false,infinite: true,arrows: true,speed: 1000,slidesToShow: 2,slidesToScroll: 1,autoplay: true,responsive: [{
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        }
      ]});

     $(".wpcf7-tel").keypress(function(event) {return /\d/.test(String.fromCharCode(event.keyCode));});

    $(window).scroll(function() {if ($(this).scrollTop() >= 100) { $('#return-to-top').fadeIn(200); } else { $('#return-to-top').fadeOut(200); }});

    $('#return-to-top').click(function() { $('body,html').animate({ scrollTop : 0 }, 500); });


    $(function() {
      $('.name input,.city input').keydown(function(e) {
        if (e.shiftKey || e.ctrlKey || e.altKey) {
          e.preventDefault();
        } else {
          var key = e.keyCode;
          if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
            e.preventDefault();
          }
        }
      });
    });

    // header fixed
     $(window).scroll(function(){if($(window).scrollTop() >= 100) {$('.navbar-static-top').addClass('fixed');} else {$('.navbar-static-top').removeClass('fixed');}});

});


function openNav() {jQuery('#mySidenav').css('right', '0');}
function closeNav() {jQuery('#mySidenav').css('right', '-100%');}
