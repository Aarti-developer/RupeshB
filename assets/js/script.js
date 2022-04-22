// ========================================================================= //
// Scroll to Top Script
// ========================================================================= //
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#scroll").fadeIn();
    } else {
      $("#scroll").fadeOut();
    }
  });
  $("#scroll").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      600
    );
    return false;
  });
});

// Swiper JS

var swiper = new Swiper(".mySwiper", {
  navigation: {
      nextEl: ".swiper-next-button",
      prevEl: ".swiper-prev-button"
  },
  effect: "fade",
  loop: "infinite",
  pagination: {
      el: ".swiper-pagination",
      type: "fraction",
  }
});
