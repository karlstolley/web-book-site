//Site JavaScript

$(document).ready(function() {
  $('body').addClass('hasjs');
  rpkwidescreen();
  $(window).resize(rpkwidescreen);
  addLineNumbersToAllGists();
  });

function rpkwidescreen() {
    var rpkwidth = $(window).width();
    if(rpkwidth>1100) { $('body').addClass('widescreen'); }
    else { $('body').removeClass('widescreen'); }
}

/* Gist line number hacks by scrooloose https://gist.github.com/454771 */

function addLineNumbersToAllGists() {
  $('.gist').each( function() {
      _addLineNumbersToGist('#' + $(this).attr('id'));
  });
}

function addLineNumbersToGist(id) {
  _addLineNumbersToGist('#gist-' + id);
}

function _addLineNumbersToGist(css_selector) {
  $(document).ready( function() {
    $(css_selector + ' .line').each(function(i, e) {
      $(this).prepend(
        $('<div/>').css({
          'float' : 'left',
          'width': '30px',
          'font-weight' : 'bold',
          'color': '#808080'
        }).text(++i)
      );
    });
  });
}