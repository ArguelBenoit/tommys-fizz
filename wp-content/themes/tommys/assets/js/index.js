import $ from 'jquery';
import Rellax from 'rellax';


$(document).ready(() => {


  // after loading
  setTimeout(() => $('#whitesail').fadeOut(800), 250);


  // a clicked animations
  $('a').click( e => {
    let href = e.currentTarget.attributes.href.value;
    if (href[1] === '#' && location.search === '') {
      let hrefToId = href.substring(1, href.length);
      let topDiv = $(hrefToId).position().top - 80; // 80 = header height
      $('html, body').animate({ scrollTop: topDiv }, 'slow');
    } else {
      $('#whitesail').fadeIn(600);
      setTimeout( () => window.location.href = href, 800);
    }
    e.preventDefault();
  });


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
    if (lastScrollTop < 100) {
      $('#header').css('margin-top', '0px');
    } else if ($(window).scrollTop() > lastScrollTop) { // plus bas
      if($('#header').hasClass('open')) {
        $('#header').toggleClass('open');
        $('#header').css('height', 80);
      }
      $('#header').css('margin-top', '-80px');
    } else if ($(window).scrollTop() < lastScrollTop) { // plus haut
      $('#header').css('margin-top', '0px');
    }
    lastScrollTop = $(window).scrollTop();
  });


  // Underline categ menu
  $('.menu-category div ul').find('li').filter( (i, e) => {
    if (window.activeCategory === e.childNodes[0].innerHTML) {
      document.getElementById(e.id).style['border-bottom'] = '1px solid #47517d';
    }
  });



  // article and team thumbnails squar alltime
  $('.thumbnail').css('height', $('.thumbnail').width() + 'px');
  $('.people-container .img').css('height', $('.people-container .img').width() + 'px');
  $(window).resize(() => {
    $('.thumbnail').css('height', $('.thumbnail').width() + 'px');
    $('.people-container .img').css('height', $('.people-container .img').width() + 'px');
  });



  // ouverture des deux sections pro et particuliers
  var particulierOpen = false;
  var professionnelsOpen = false;
  var heightParticulier = $('#prestations-particuliers .container').innerHeight() + 'px';
  var heightProfessionnels = $('#prestations-professionnels .container').innerHeight() + 'px';
  $('#button-prestations-particuliers').click(() => {
    if (!particulierOpen && !professionnelsOpen) {
      $('html, body').animate({ scrollTop: $('#prestations-particuliers').position().top }, 500);
      particulierOpen = true;
      $('#prestations-particuliers').css('height', heightParticulier);
    } else if (particulierOpen && !professionnelsOpen) {
      particulierOpen = false;
      $('#prestations-particuliers').css('height', '0px');
    } else if (!particulierOpen && professionnelsOpen) {
      $('html, body').animate({ scrollTop: $('#prestations-particuliers').position().top }, 500);
      particulierOpen = true;
      professionnelsOpen = false;
      $('#prestations-professionnels').css('height', '0px');
      setTimeout(() => {
        $('#prestations-particuliers').css('height', heightParticulier);
      },750);
      setTimeout(() => {
        $('#prestations-particuliers').css('height', 'inherit');
      },1500);
    }
  });
  $('#button-prestations-professionnels').click(() => {
    if (!professionnelsOpen && !particulierOpen) {
      $('html, body').animate({ scrollTop: $('#prestations-particuliers').position().top }, 500);
      professionnelsOpen = true;
      $('#prestations-professionnels').css('height', heightProfessionnels);
    } else if (professionnelsOpen && !particulierOpen) {
      professionnelsOpen = false;
      $('#prestations-professionnels').css('height', '0px');
    } else if (!professionnelsOpen && particulierOpen) {
      $('html, body').animate({ scrollTop: $('#prestations-particuliers').position().top }, 500);
      particulierOpen = false;
      professionnelsOpen = true;
      $('#prestations-particuliers').css('height', '0px');
      setTimeout(() => {
        $('#prestations-professionnels').css('height', heightProfessionnels);
      }, 500);
      setTimeout(() => {
        $('#prestations-professionnels').css('height', 'inherit');
      },1500);
    }
  });


  // parallax LandingPage
  if($('.rellax').length) {
    new Rellax('.rellax', {});
  }

  // logos partenaires LandingPage
  var moreLeftValue = 400;
  var leftValue = -20;
  $('#landingpage-prev').click(() => {
    leftValue = -20;
    $('#container-img-wrapper').css('margin-left', '-20px');
    $('#landingpage-prev').css('display', 'none');
    $('#landingpage-next').css('display', 'inherit');
  });
  $('#landingpage-next').click(() => {
    // console.log(leftValue, -$('#container-img-wrapper').innerWidth());
    if(leftValue > -$('#container-img-wrapper').innerWidth()) {
      leftValue = leftValue - moreLeftValue;
      $('#container-img-wrapper').css('margin-left', leftValue + 'px');
      $('#landingpage-prev').css('display', 'inherit');
    } else {
      $('#landingpage-next').css('display', 'none');
    }
  });
});
