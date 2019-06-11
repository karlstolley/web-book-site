//Site JavaScript

$(document).ready(function() {
  $('body').addClass('hasjs');
  rpkwidescreen();
  $(window).resize(rpkwidescreen);
  rpkaudio();
  });

function rpkwidescreen() {
    var rpkwidth = $(window).width();
    if(rpkwidth>1100) { $('body').addClass('widescreen'); }
    else { $('body').removeClass('widescreen'); }
}

function rpkaudio() {
  AudioPlayer.setup("js/audio-player/player.swf", {  
    width: 290
  });
  $("a[href$=mp3]").each(function(index) {
    $(this).attr("id","audio"+index);
    AudioPlayer.embed("audio"+index, {soundFile: $(this).attr("href") });
    });
}
