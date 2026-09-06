$(function () {
  $('[data-toggle="popover"]').popover()
})

$(window).on('load', function(){
  $('#loading-mask').fadeOut();
});

$(document).ready(function() {

  var window_height = $(window).height();
  var website_height = $('.all_content').height();

  if(website_height <= window_height) {
    $('.all_content').addClass('all_content_middle');
  }

  $(window).resize(function() {
    window_height = $(window).height();
    website_height = $('.all_content').height();

    $('.all_content').removeClass('all_content_middle');

    if(website_height <= window_height) {
      $('.all_content').addClass('all_content_middle');
    }
  });

});
