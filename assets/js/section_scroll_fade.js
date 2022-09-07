$(document).ready(function(){
  function init_section_scroll_fade_list() {
    var index = 0;
    var section_list = [];
    $('.section-scroll-fade').each(function(){
      section_list[index] = { object: $(this), top: $(this).offset().top };
      index++;
    });
    return section_list;
  }
  
  function init_section_scroll_fade() {
    var section_list = init_section_scroll_fade_list();
    var screen_height = $(window).height();
    $.each(section_list, function(index, section_info){
      $(window).scroll(function () {
        if($(this).scrollTop() + screen_height - 200 > section_info.top) {
          section_info.object.animate({ opacity: 1 }, { duration: 600, easing: 'swing'});
        }
      });
    });
  }
  
  init_section_scroll_fade();
  $(window).resize(function(){
    init_section_scroll_fade();
  });
});