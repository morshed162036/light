// wayponts js

$(function () {

  $('.campus_slide').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true
});

//mixitup

$(document).ready(function(){
  var mixer = mixitup('#mix-wrapper');

  $('.filter').on('click', function(){
      var filterValue = $(this).attr('data-filter');
      mixer.filter(filterValue);
  });
});

    //sidebar
    $('.feat-btn').click(function () {
        $('sidebar_menu ul .feat-show').toggleClass("show");
        $('sidebar_menu ul .first').toggleClass("rotate");
      });
      $('.serv-btn').click(function () {
        $('sidebar_menu ul .serv-show').toggleClass("show1");
        $('sidebar_menu ul .second').toggleClass("rotate");
      });
      $('sidebar_menu ul li').click(function () {
        $(this).addClass("active").siblings().removeClass("active");
      });


  //counter
    $('.countup').counterUp({
        time: 5000
    });

});
