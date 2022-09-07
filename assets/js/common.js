$(document).ready(function(){
  $('.scroll-link').click(function(){
    var target = $(this).data('target');
    var target_top = $('#' + target).offset().top - 20;
    $('html,body').animate({scrollTop:target_top});
    return false;
  });
});