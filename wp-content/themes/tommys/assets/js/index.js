import $ from 'jquery';


$(document).ready(() => {

  // after loading
  setTimeout(() => $('#whitesail').fadeOut(800), 250);

  // resize menu
  const menuWidth = $('#menu-header ul').innerWidth();
  const logoWidth = $('#logo-header').innerWidth();
  let headerSize = () => {
    var headerWidth = $('#header').innerWidth();
    if(headerWidth < logoWidth + menuWidth) {
      $('#header').attr('class', 'overflow');
    } else if (headerWidth > logoWidth + menuWidth) {
      $('#header').attr('class', '');
      $('#header').css('height', 80);
    }
  };
  headerSize();
  $(window).resize(() => {
    headerSize();
  });


  console.log($(document).height());
  // article all time centred
  if ($(document).height() < $(window).height()) {
    console.log('tttt');
    var heightArticle = $('.single-article').innerHeight();
    var heightMargin = ( $(window).height() - heightArticle ) / 2;
    $('.single-article').css('transform', 'translateY(' + heightMargin + 'px)');
  }


  // sandwitch click
  $('#header').css('height', 80);
  $('#sandwich').click( () => {
    $('#header').toggleClass('open');
    var height = ($('#menu-header ul li').length * 38) + 50;
    if ( $('#header').hasClass('open') ) {
      $('#header').css('height', 80 + height);
    } else if ( !$('#header').hasClass('open') && $('#header').hasClass('overflow') ) {
      $('#header').css('height', 80);
      // $('#header #menu-header ul').css('height', height);
    } else if ( !$('#header').hasClass('open') && !$('#header').hasClass('overflow') ){
      $('#header').css('height', 80);
    }
  });


  // header scroll
  var scrollTop = $(window).scrollTop();
  var lastScrollTop = scrollTop;
  $(window).scroll( () => {
    if (lastScrollTop < 400) {
      $('#header').css('margin-top', '0px');
    } else if ($(window).scrollTop() > lastScrollTop) { // plus bas
      if($('#header').hasClass('open')) {
        $('#header').toggleClass('open');
        $('#header').css('height', 80);
      }
      $('#header').css('margin-top', '-80px');
    } else if ($(window).scrollTop() < lastScrollTop) { // plus haut
      console.log('on monte on affiche le header');
      $('#header').css('margin-top', '0px');
    }
    lastScrollTop = $(window).scrollTop();
  });

  // article thumbnails squarred alltime
  $('.thumbnail').css('height', $('.thumbnail').width() + 'px');
  $(window).resize(() => {
    $('.thumbnail').css('height', $('.thumbnail').width() + 'px');
  });
});
