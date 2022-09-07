$(document).ready(function(){
  $('.front-animation-play').click(function(){
    $(this).hide();
    $('.front-animation-video').find('video').get(0).play();
    $('.front-animation-video').find('video').attr('controls', '');
  });
  
  $(window).scroll(function () {
    var width_window = $(window).width();
    var scroll_top = $(this).scrollTop();
    if(window.matchMedia('(min-width: 768px)').matches) {
      header_position_change_pc();
    }
  });
  
  function header_position_change_pc() {
    var width_window = $(window).width();
    if ($(window).scrollTop() > width_window / 1366 * 750) {
      $('.header').css('position', 'fixed').css('top', 0);
    } else {
      $('.header').css('position', 'absolute').css('top', (75000 / 1366) + 'vw');
    }
  }
  
  $(window).resize(function(){
    $('.header-logo').removeClass('active');
    $('.header-menu').removeClass('active');
    $('.header-navi-sp').hide();
    $('html').css('overflow','visible');
    $(window).off('.noScroll');
    
    var width_window = $(window).width();
    if(window.matchMedia('(min-width: 768px)').matches) {
      header_position_change_pc();
    } else {
      $('.header').css('position', 'fixed').css('top', 0);
    }
  })
  
  $('.header-menu').click(function(){
    if($(this).hasClass('active')) {
      $('.header-logo').removeClass('active');
      $(this).removeClass('active');
      $('.header-navi-sp').slideUp('slow');
      $('html').css('overflow','visible');
      $(window).off('.noScroll');
    } else {
      $('.header-logo').addClass('active');
      $(this).addClass('active');
      $('.header-navi-sp').slideDown('slow');
      $('html').css('overflow','hidden');
      $(window).on('touchmove.noScroll', function(e) {
          e.preventDefault();
      });
    }
  });
  
  $('.header-navi-sp').find('.scroll-link').click(function(){
    var target = $(this).data('target');
    var target_top = $('#' + target).offset().top - 20;
    $('html,body').scrollTop(target_top);
    $('.header-logo').removeClass('active');
    $('.header-menu').removeClass('active');
    $('.header-navi-sp').slideUp('slow');
    $('html').css('overflow','visible');
    $(window).off('.noScroll');
  });
  
  init_free_slide_show($('.front-mv-title-area'), '135deg', 2);
  
  function init_front_trouble_item_image_list() {
    var index = 0;
    var target_list = [];
    $('.front-trouble-item-image').each(function(){
      var direction = '90deg';
      if($(this).hasClass('right')) {
        direction = '270deg';
      }
      target_list[index] = { object: $(this), top: $(this).offset().top, direction: direction };
      index++;
    });
    return target_list;
  }
  
  function init_front_trouble_item_image_show() {
    var target_list = init_front_trouble_item_image_list();
    var screen_height = $(window).height();
    $.each(target_list, function(index, target){
      ready_for_free_slide_show(target.object.find('.front-trouble-item-image-dark'), target.direction);
      ready_for_free_slide_show(target.object.find('.front-trouble-item-image-shadow'), target.direction);
      ready_for_free_slide_show(target.object.find('.front-trouble-item-image-floatimage'), target.direction);
      target.object.removeClass('animated');
      $(window).scroll(function () {
        if($(this).scrollTop() + screen_height - 200 > target.top) {
          if(!target.object.hasClass('animated')) {
            let front_trouble_item_image_c = 0;
            let front_trouble_item_image_d = 0;
            let front_trouble_item_image_e = 0;
            function draw(){
              if(front_trouble_item_image_c <= 100) {
                front_trouble_item_image_c = front_trouble_item_image_c + 6;
                target.object.find('.front-trouble-item-image-dark').css('--percent', front_trouble_item_image_c + '%');
                requestAnimationFrame(draw);
              } else if(front_trouble_item_image_d <= 100) {
                front_trouble_item_image_d = front_trouble_item_image_d + 6;
                target.object.find('.front-trouble-item-image-shadow').css('--percent', front_trouble_item_image_d + '%');
                requestAnimationFrame(draw);
              } else if(front_trouble_item_image_e <= 100) {
                front_trouble_item_image_e = front_trouble_item_image_e + 6;
                target.object.find('.front-trouble-item-image-floatimage').css('--percent', front_trouble_item_image_e + '%');
                requestAnimationFrame(draw);
              }
            }
            requestAnimationFrame(draw);
            target.object.addClass('animated');
          }
        }
      });
    });
  }
  
  init_front_trouble_item_image_show();
  $(window).resize(function(){
    init_front_trouble_item_image_show();
  });
  
  function init_front_case_info_list() {
    var index = 0;
    var target_list = [];
    $('.front-case-info').each(function(){
      var direction_image = '90deg';
      var direction_info = '270deg';
      if($(this).find('.front-case-image').hasClass('right')) {
        direction_image = '270deg';
        direction_info = '90deg';
      }
      target_list[index] = { object: $(this), top: $(this).offset().top, direction_image: direction_image, direction_info: direction_info };
      index++;
    });
    return target_list;
  }
  
  function init_front_case_info_show() {
    var target_list = init_front_case_info_list();
    var screen_height = $(window).height();
    $.each(target_list, function(index, target){
      ready_for_free_slide_show(target.object.find('.front-case-image'), target.direction_image);
      ready_for_free_slide_show(target.object.find('.front-case-name'), target.direction_info);
      ready_for_free_slide_show(target.object.find('.front-case-name-inner'), target.direction_info);
      target.object.removeClass('animated');
      $(window).scroll(function () {
        if($(this).scrollTop() + screen_height - 200 > target.top) {
          if(!target.object.hasClass('animated')) {
            let front_case_info_c = 0;
            let front_case_info_d = 0;
            let front_case_info_e = 0;
            function draw(){
              front_case_info_e = front_case_info_e + 2;
              target.object.find('.front-case-image').css('--percent', front_case_info_e + '%');
              if(front_case_info_c <= 100) {
                front_case_info_c = front_case_info_c + 4;
                target.object.find('.front-case-name').css('--percent', front_case_info_c + '%');
                requestAnimationFrame(draw);
              } else if(front_case_info_d <= 100) {
                front_case_info_d = front_case_info_d + 4;
                target.object.find('.front-case-name-inner').css('--percent', front_case_info_d + '%');
                requestAnimationFrame(draw);
              }
            }
            requestAnimationFrame(draw);
            target.object.addClass('animated');
          }
        }
      });
    });
  }
  
  init_front_case_info_show();
  $(window).resize(function(){
    init_front_case_info_show();
  });
});