jQuery(document).ready(function($) {
  $(".case-text").click(function() {
    $(this)
      .next(".hs-pop-up-wrapper")
      .addClass("hs-pop-up-show");
  });

  $(".close-modal").click(function() {
    $(this)
      .parentsUntil(".case")
      .removeClass("hs-pop-up-show");
  });

  $(".case-banner--content-text").click(function() {
    
    $(this)
      .next(".hs-pop-up-wrapper").addClass("hs-pop-up-show");
  });

  $("#scroll-btn").click(function() {
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $("#scroll-dest").offset().top
      },
      600
    );
  });

  var openMenuBtn = $("#drop-down-btn-open");
  var closeMenuBtn = $("#drop-down-btn-close");
  var menu = $("#mob-nav");

  openMenuBtn.click(function() {
    openMenuBtn.addClass("hide-button");
    openMenuBtn.removeClass("show-button");
    closeMenuBtn.addClass("show-button");
    closeMenuBtn.removeClass("hide-button");
    menu.animate({ bottom: "0" });
  });

  closeMenuBtn.click(function() {
    openMenuBtn.addClass("show-button");
    openMenuBtn.removeClass("hide-button");
    closeMenuBtn.addClass("hide-button");
    closeMenuBtn.removeClass("show-button");
    // menu.slideUp();
    menu.animate({ bottom: "100vh" });
  });

  // Show Leadership Member Bio

  $(".leadership-member--bio").hide();
  $(".leadership-member--bio-btn-close").hide();

  $(".leadership-member--bio-btn").click(function() {
    var span = $(this).find("span");
    if (span.text() === "+") {
      span.text("-");
    } else {
      span.text("+");
    }

    $(this)
      .siblings(".leadership-member--bio")
      .slideToggle("slow", function() {});
  });
});
