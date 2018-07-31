
import $ from 'jquery';



// function space
let headerSize = () => {
  var headerWidth = $('#header').innerWidth(),
      logoWidth = $('#logo-header').innerWidth(),
      menuWidth = $('#menu-header ul').innerWidth();
  if(headerWidth < logoWidth + menuWidth) {
    $('#header').attr('class', 'overflow');
  } else if (headerWidth > logoWidth + menuWidth) {
    $('#header').attr('class', '');
  }
};



$(document).ready(() => {

  // after loading
  setTimeout(() => $('#whitesail').fadeOut(800), 250);
  headerSize();

  // at all resizing
  $(window).resize(() => {
    headerSize();
  });

});
