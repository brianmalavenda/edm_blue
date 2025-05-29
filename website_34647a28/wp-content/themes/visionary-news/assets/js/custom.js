jQuery(function ($) {
  /* -----------------------------------------
    Preloader
    ----------------------------------------- */
  $("#preloader").delay(1000).fadeOut();
  $("#loader").delay(1000).fadeOut("slow");

  /* -----------------------------------------
    rtl
    ----------------------------------------- */
  var isRTL = $("html").attr("dir") === "rtl";

  /* -----------------------------------------
    Marquee Ticker
    ----------------------------------------- */
  function configureMarqueeDirection() {
      const isRtl = $("body").hasClass("rtl");
      const direction = isRtl ? "right" : "left";

      $(".marquee").marquee({
          speed: 30,
          duration: 1000,
          gap: 0,
          delayBeforeStart: 0,
          direction: direction,
          duplicated: true,
          pauseOnHover: true,
          startVisible: true,
          easing: "linear",
      });
  }
  // Call the function to configure the marquee direction
  configureMarqueeDirection();

  /* -----------------------------------------
    Toggle Button
    ----------------------------------------- */
  $(".menu-toggle").click(function () {
      $(this).toggleClass("show");
  });

  /* -----------------------------------------
    Keyboard Navigation
    ----------------------------------------- */
  $(window).on("load resize", function () {
      if ($(window).width() < 992) {
        $(".main-navigation")
        .find("li")
        .last()
        .bind("keydown", function (e) {
            if (e.which === 9) {
              e.preventDefault();
              $("#masthead").find(".menu-toggle").focus();
          }
      });
    } else {
        $(".main-navigation").find("li").unbind("keydown");
    }
});
  
  var primary_menu_toggle = $("#masthead .menu-toggle");
  primary_menu_toggle.on("keydown", function (e) {
      var tabKey = e.keyCode === 9;
      var shiftKey = e.shiftKey;
      
      if (primary_menu_toggle.hasClass("show")) {
        if (shiftKey && tabKey) {
          e.preventDefault();
          $(".main-navigation").toggleClass("toggled");
          primary_menu_toggle.removeClass("show");
      }
  }
});
  
  $(".header-search-wrap")
  .find(".search-submit")
  .bind("keydown", function (e) {
    var tabKey = e.keyCode === 9;
    if (tabKey) {
      e.preventDefault();
      $(".search-icon").focus();
  }
});
  
  $(".search-icon").on("keydown", function (e) {
      var tabKey = e.keyCode === 9;
      var shiftKey = e.shiftKey;
      if ($(".header-search-wrap").hasClass("show")) {
        if (shiftKey && tabKey) {
          e.preventDefault();
          $(".header-search-wrap").removeClass("show");
          $(".search-icon").focus();
      }
  }
});

  /* -----------------------------------------
  Header Search Bar 
  ----------------------------------------- */
  var searchWrap = $(".header-search-wrap");
  $(".search-icon").click(function (e) {
      e.preventDefault();
      searchWrap.toggleClass("show");
      searchWrap.find("input.search-field").focus();
  });
  $(document).click(function (e) {
      if (!searchWrap.is(e.target) && !searchWrap.has(e.target).length) {
          $(".header-search-wrap").removeClass("show");
      }
  });

  /* -----------------------------------------
    Scroll To Top
    ----------------------------------------- */
  function updateProgressCircle() {
      const progressBar = $(".scroll-progress-circle-bar");
      const progressContainer = $(".scroll-progress-container");
      const totalScrollableHeight = $(document).height() - $(window).height();
      const scrolled = $(window).scrollTop();
      const progress = Math.min(
          (scrolled / totalScrollableHeight) * 283,
          283
          );

      // Update progress bar stroke offset
      progressBar.css("stroke-dashoffset", 283 - progress);

      progressContainer.toggleClass("show", scrolled > 400);
  }

  function scrollToTop() {
      $("html, body").animate({ scrollTop: 0 }, 300); // Smooth animation
  }

  $(document).ready(function () {
      $(".scroll-progress-container").on("click", scrollToTop);

      // Update progress circle on page load and on scroll/resize
      updateProgressCircle();
      $(window).on("scroll resize", updateProgressCircle);
  });
});