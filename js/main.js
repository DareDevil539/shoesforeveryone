$("document").ready(function() {
  $(".t-but").click(function(event) {
    event.preventDefault;
    $(this).toggleClass("t-but-active");
    if ($(this).hasClass("t-but-active")) {
      $(".header-hidden").css("height", "200px");
      $(".menu-hidden, .m-h-item, .m-h-item a").css("opacity", "1");
      $(".menu-bar").css("margin-top", "200px");
    } else {
      $(".header-hidden").css("height", "0");
      $(".menu-hidden, .m-h-item, .m-h-item a").css("opacity", "0");
      $(".menu-bar").css("margin-top", "0");
    }
  });

  $(".menu .menu-itm").mouseover(function() {
    $(this).children().css("color", "#212121")
  });

  $(".menu .menu-itm").mouseout(function() {
    $(this).children().css("color", "#fff")
  });

  $(".menu-hidden .m-h-item").mouseover(function() {
    $(this).children().css("color", "#212121")
  });

  $(".menu-hidden .m-h-item").mouseout(function() {
    $(this).children().css("color", "#fff")
  });
});