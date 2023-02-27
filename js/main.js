$(document).ready(function () {
  // Loader
  $(window).on("load", function () {
    $(".loader-overlay").delay(2000).fadeOut("slow");
  });

  // Fixed navbar
  $(window).scroll(function () {
    var sticky = $(".navbar-main"),
      scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass("navbar-fixed");
    else sticky.removeClass("navbar-fixed");
  });

  // ===== Scroll to Top ====
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {
      // If page is scrolled more than 50px
      $("#return-top").fadeIn(200); // Fade in the arrow
    } else {
      $("#return-top").fadeOut(200); // Else fade out the arrow
    }
  });

  // Return to top
  $("#return-top").click(function () {
    // When arrow is clicked
    $("body,html").animate(
      {
        scrollTop: 0, // Scroll to top of body
      },
      500
    );
  });

  //jQuery for page scrolling feature - requires jQuery Easing plugin
  $(function () {
    $("a.page-scroll").bind("click", function (event) {
      var $anchor = $(this);
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: $($anchor.attr("href")).offset().top,
          },
          1500,
          "easeInOutExpo"
        );
      event.preventDefault();
    });
  });

  $("#carousel-procedure").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    navText: "",
    lazyLoad: false,
    autoplay: true,
    autoplayTimeout: 4000,
    center: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 3,
        margin: 10,
      },
      1200: {
        items: 3,
        margin: 10,
      },
    },
  });

  // images parallax
  $(".parallax-effect").parallax();

  // INCLUDE JQUERY & JQUERY UI 1.12.1
  $(function () {
    $("#datepicker").datepicker({
      dateFormat: "dd-mm-yy",
      duration: "300",
    });
  });

  //--------------------- end of document ready
});

//scroll;
$(".testi-scroll").mCustomScrollbar({
  scrollButtons: { enable: true },
  theme: "light-thick",
  scrollbarPosition: "outside",
  callbacks: {
    onInit: function () {
      var ths = $(this);
      $(this).data("mCS").opt.callbacks.onTotalScrollOffset = Math.abs(
        this.mcs.content.innerHeight() -
          (ths.position().top + ths.outerHeight(true))
      );
    },
    onTotalScroll: function () {
      /* your callback */
    },
    alwaysTriggerOffsets: false,
  },
});
