$("document").ready(function() {
  $(".t-but").click(function() {
    $(".menu-bar").toggleClass("menu-bar-slide");
    $(".header-hidden").toggleClass("header-slide");
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