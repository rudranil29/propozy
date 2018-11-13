/**
 * @file
 * Embed YouTube videos on Click.
 */
(function ($) {
  function youtubechannel_setvideo(href) {
    youtubeid = href.replace("#","");
    jQuery('#youtubechannel-frame').attr('src','http://www.youtube.com/embed/' + youtubeid);
  }

$( document ).ready(function() {
      if (jQuery('#youtubechannel-list a:first').length) {
        youtubechannel_setvideo(jQuery('#youtubechannel-list a:first').attr('href'));
        jQuery('#youtubechannel-list a').click(function(e) {
          youtubechannel_setvideo(jQuery(this).attr('href'));
          return false;
        });
      }
});
}(jQuery));
