// video embed on the homepage
jQuery(document).ready(function() {
    var hasPlayed = 0;
    jQuery('.icon-play-button').click(function() {
        jQuery('.video-overlay-content').addClass('hidden');
        jQuery('.autoplay-thumb').addClass('hidden');

        var videoEmbed = jQuery('.video-embed').get(0);
        if( jQuery('.video-embed-wrapper').hasClass('video-cover') ) {
            jQuery('.video-embed-wrapper').removeClass('video-cover');
        }
        jQuery(this).css('display', 'none');
        if( hasPlayed == 0 ) {
            if ( videoEmbed.paused) {
                hasPlayed = 1;
                videoEmbed.play();
                  setTimeout(() => {
                      if( !videoEmbed.controls ) {
                        videoEmbed.controls = true; 
                      }
                  }, 1000)
            } 
        }
      });
});