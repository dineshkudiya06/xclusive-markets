(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 30) {
      $(".header__menu").addClass("bg-light");
      $(".show___block").addClass("text__menu");
      $(".btn-style2").addClass("btn-style-color");
    } else {
      $(".header__menu").removeClass("bg-light");
      $(".show___block").removeClass("text__menu");
      $(".btn-style2").removeClass("btn-style-color");
    }
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],
  });

  $(".show___block").click(function (e) {
    $(this).siblings(".drop__menu").toggle();
    $(".drop__menu").not($(this).siblings()).hide();
    e.stopPropagation();
  });
  $(".fa-bars-staggered").click(function () {
    $(this).toggleClass("fa-xmark");
    $(".moblie__menu").toggleClass("moblie__menu__show");
  });

  $(".menu__icon__show").click(function (e) {
    $(this).siblings(".mobile__dropdown__menu").toggle();
    $(".mobile__dropdown__menu").not($(this).siblings()).hide();
    e.stopPropagation();
  });
})(jQuery);
