$(function() {
  //   $(".slider ul li:not(:first)").hide();
  var sure = 1000;
  var toplamli = $(".slider ul li").length;
  var liWidth = 830;
  var topWidth = liWidth * toplamli;
  //   alert(topWidth);
  $(".slider ul").css("width", topWidth + "px");
  var liDeger = 0;
  $("a.onceki").click(function() {
    if (liDeger > 0) {
      liDeger--;
      yeniWidth = liWidth * liDeger;
      $(".slider ul").animate({ marginLeft: "-" + yeniWidth + "px" }, 500);
    }
    return false;
  });
  $("a.sonraki").click(function() {
    if (liDeger < toplamli - 1) {
      liDeger++;
      yeniWidth = liWidth * liDeger;
      $(".slider ul").animate({ marginLeft: "-" + yeniWidth + "px" }, 500);
    } else {
      liDeger = 0;
      $(".slider ul").animate({ marginLeft: "0" }, 500);
    }
    return false;
  });
  $.Slider = function() {
    if (liDeger < toplamli - 1) {
      liDeger++;
      yeniWidth = liWidth * liDeger;
      $(".slider ul").animate({ marginLeft: "-" + yeniWidth + "px" }, 500);
    } else {
      liDeger = 0;
      $(".slider ul").animate({ marginLeft: "0" }, 500);
    }
  };
  var don = setInterval("$.Slider()", sure);

  $("#slider").click(function() {
    $.Slider();
  });

  $("#slider").hover(
    function() {
      clearInterval(don);
    },
    function() {
      don = setInterval("$.Slider()", sure);
    }
  );
});
