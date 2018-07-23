$("document").ready(function() {
  if ($(window).width() >= '735') {
    $(".menu-itm").removeClass("hidden-h");
    $(".t-but").addClass("hidden-h");
  } else {
    $(".menu-itm").addClass("hidden-h");
    $(".t-but").removeClass("hidden-h");
    $(".header-hidden").addClass("hidden-h");
  }

  var box = $('.header-hidden');
  $('.t-but').on('click', function() {
    if (box.hasClass('hidden-h')) {
      box.removeClass('hidden-h');
      setTimeout(function() {
        box.removeClass('hidden-v');
      }, 40);
    } else {
      box.addClass('hidden-v');
      box.one('transitionend', function(e) {
        box.addClass('hidden-h');
      });
    }
  });

  $(".menu .menu-itm").mouseover(function() {
    $(this).children().css("color", "#333")
  });

  $(".menu .menu-itm").mouseout(function() {
    $(this).children().css("color", "#efefef")
  });

  $(".menu-hidden .m-h-item").mouseover(function() {
    $(this).children().css("color", "#333")
  });

  $(".menu-hidden .m-h-item").mouseout(function() {
    $(this).children().css("color", "#efefef")
  });
});