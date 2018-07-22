$("document").ready(function() {
  $(".menu .menu-itm").mouseover(function() {
    $(this).children().css("color", "#333")
  });

  $(".menu .menu-itm").mouseout(function() {
    $(this).children().css("color", "#efefef")
  });
});