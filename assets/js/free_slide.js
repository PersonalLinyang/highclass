/* 
 * JQueryプラグイン：free_slide
 * 効果：指定の要素を希望の方向からスライドインする
 * 利用パターン：
 *   1.指定の要素をスライドインする：init_free_slide_show(object, direction, speed)
 *       object: 対象になる要素のJQueryセレクター
 *       direction: スライドインする方向、「数値 + 'deg'」で指定
 *       speed: スライドインする速度、数値で指定、大きければ大きいほどスライド速度が速い
 *       object: 対象になる要素のJQueryセレクター
 *   2.スクロールする際以下条件の要素を超えるとスライドインする
 *       class: free-slide-show-target
 *       data-direction: スライドインする方向、数値で指定、指定しないと上から下へ
 *       data-speed: スライドインする速度、数値で指定、大きければ大きいほどスライド速度が速い
 */

function ready_for_free_slide_show(object, direction) {
  object.css('--percent', '0%');
  object.css('-webkit-mask-image', 'linear-gradient(' + direction + ',#000 0,#000 var(--percent),transparent var(--percent),transparent 100%)');
  object.css('mask-image', 'linear-gradient(' + direction + ',#000 0,#000 var(--percent),transparent var(--percent),transparent 100%)');
}

function free_slide_show(object, speed) {
  let c = 0;
  function draw(){
    if(c <= 100) {
      c = c + speed;
      object.css('--percent', c + '%');
      requestAnimationFrame(draw);
    }
  }
  requestAnimationFrame(draw);
}

function init_free_slide_show(object, direction, speed) {
  ready_for_free_slide_show(object, direction);
  free_slide_show(object, speed);
}

function init_scroll_free_slide_show_list() {
  var index = 0;
  var target_list = [];
  $('.free-slide-show-target').each(function(){
    var direction = '180deg';
    if($(this).data('direction')) {
      direction = $(this).data('direction') + 'deg';
    }
    var speed = 1;
    if($(this).data('speed')) {
      speed = Number($(this).data('speed'));
    }
    target_list[index] = { object: $(this), top: $(this).offset().top, direction: direction, speed: speed };
    index++;
  });
  return target_list;
}

function init_scroll_free_slide_show() {
  var target_list = init_scroll_free_slide_show_list();
  var screen_height = $(window).height();
  $.each(target_list, function(index, target){
    ready_for_free_slide_show(target.object, target.direction);
    target.object.removeClass('animated');
    $(window).scroll(function () {
      if($(this).scrollTop() + screen_height - 200 > target.top) {
        if(!target.object.hasClass('animated')) {
          free_slide_show(target.object, target.speed);
          target.object.addClass('animated');
        }
      }
    });
  });
}

$(document).ready(function(){
  init_scroll_free_slide_show();
  $(window).resize(function(){
    init_scroll_free_slide_show();
  });
});