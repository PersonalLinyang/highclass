$(document).ready(function(){
  function init_section_scroll_slide_list() {
    var index = 0;
    var section_list = [];
    $('.section-scroll-slide').each(function(){
      section_list[index] = { object: $(this), cover: $(this).find('.section-scroll-slide-cover'), top: $(this).offset().top, direction: $(this).data('direction') };
      index++;
    });
    return section_list;
  }
  
  function init_section_scroll_slide() {
    var section_list = init_section_scroll_slide_list();
    var screen_height = $(window).height();
    $.each(section_list, function(index, section_info){
      $(window).scroll(function () {
        if($(this).scrollTop() + screen_height - 200 > section_info.top) {
          section_info.cover.hide("slide", {direction: section_info.direction}, 600);
        }
      });
    });
  }
  
  init_section_scroll_slide();
  $(window).resize(function(){
    init_section_scroll_slide();
  });
});