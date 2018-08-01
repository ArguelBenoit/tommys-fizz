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
    var height = ($('#menu-header ul li').length * 38) + 40;
    if ( $('#header').hasClass('open') ) {
      $('#header').css('height', 80 + height);
    } else if ( !$('#header').hasClass('open') && $('#header').hasClass('overflow') ) {
      $('#header').css('height', 80);
    } else if ( !$('#header').hasClass('open') && !$('#header').hasClass('overflow') ){
      $('#header').css('height', 80);
    }
  });

});
