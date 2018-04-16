$(function() {
    //   $(".slider ul li:not(:first)").hide();
    var sure = 1000;
    var toplamli = $(".sliderDikey ul li").length;
    var liHeight = 360;
    var topHeight = liHeight * toplamli;
    //   alert(topHeight);
    $(".sliderDikey ul").css("height", topHeight + "px");
    var liDeger = 0;
    $("a.oncekiDik").click(function() {
      if (liDeger > 0) {
        liDeger--;
        yeniHeight = liHeight * liDeger;
        $(".sliderDikey ul").animate({ marginTop: "-" + yeniHeight + "px" }, 1500);
      }
      return false;
    });
    $("a.sonrakiDik").click(function() {
      if (liDeger < toplamli - 1) {
        liDeger++;
        yeniHeight = liHeight * liDeger;
        $(".sliderDikey ul").animate({ marginTop: "-" + yeniHeight + "px" }, 1500);
      } else {
        liDeger = 0;
        $(".sliderDikey ul").animate({ marginTop: "0" }, 500);
      }
      return false;
    });
    $.Slider2 = function() {
      if (liDeger < toplamli - 1) {
        liDeger++;
        yeniHeight = liHeight * liDeger;
        $(".sliderDikey ul").animate({ marginTop: "-" + yeniHeight + "px" }, 1500);
      } else {
        liDeger = 0;
        $(".sliderDikey ul").animate({ marginTop: "0" }, 500);
      }
      return false;
    };
    var don = setInterval("$.Slider2()", sure);
  
    $("#slider2").click(function() {
      $.Slider2();
    });
  
    $("#slider2").hover(
      function() {
        clearInterval(don);
      },
      function() {
        don = setInterval("$.Slider2()", sure);
      }
    );
  });
  