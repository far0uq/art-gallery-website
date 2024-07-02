$(window).scroll(function () {
  if ($(window).scrollTop() >= 25) {
    $("#menu").addClass("fixed");
    $("#menu").css("height", "130px");
    $("#header > #menu > h1").addClass("scroll_h1");
    $("#header > #menu > h1").css("font-size", "50px");
    $("#header > #menu ul").css("margin", "2% 14.6% 0px 0px");
  } else {
    $("#menu").removeClass("fixed");
    $("#menu").css("height", "160px");
    $("#header > #menu > h1").removeClass("scroll_h1");
    $("#header > #menu > h1").css("font-size", "68px");
    $("#header > #menu > h1").css("margin", "1.5% 0px 1% 14.6%");
    $("#header > #menu ul").css("margin", "2.9% 14.6% 0px 0px");
  }
});
