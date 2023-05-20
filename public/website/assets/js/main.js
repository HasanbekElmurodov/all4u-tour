(function ($) {
  "use strict";

  // Dropdown on mouse hover
  $(document).ready(function () {
    function toggleNavbarMethod() {
      if ($(window).width() > 992) {
        $(".navbar .dropdown")
          .on("mouseover", function () {
            $(".dropdown-toggle", this).trigger("click");
          })
          .on("mouseout", function () {
            $(".dropdown-toggle", this).trigger("click").blur();
          });
      } else {
        $(".navbar .dropdown").off("mouseover").off("mouseout");
      }
    }
    toggleNavbarMethod();
    $(window).resize(toggleNavbarMethod);
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Date and time picker
  $(".date").datetimepicker({
    format: "L",
  });
  $(".time").datetimepicker({
    format: "LT",
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    margin: 30,
    dots: true,
    loop: true,
    center: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });
})(jQuery);

// My codes

function preloader() {
  $(() => {
    setInterval(() => {
      let p = $(".preloader");
      p.css("opacity", 0);
      setInterval(() => p.remove(), parseInt(p.css("--duration")) * 1000);
    }, 1000);
  });
}
preloader();

var elementPosition = $("#other_places_cities").offset();

var body = document.querySelector("body");
// Get the modal
var modal = document.getElementById("recall-modal");

// Get the button that opens the modal
var btn = document.getElementById("recall-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
function openModal() {
  var body = document.querySelector("body");
  // Get the modal
  var modal = document.getElementById("recall-modal");
  modal.style.display = "block";
  body.style.overflow = "hidden";
}
// btn.onclick = function () {
// var body = document.querySelector("body");
// Get the modal
// var modal = document.getElementById("recall-modal");
// modal.style.display = "block";
// body.style.overflow = "hidden";
// };

// When the user clicks on <span> (x), close the modal
// span.onclick = function () {
//   modal.style.display = "none";
//   body.style.overflow = "inherit";
// };

function closeModal() {
  modal.style.display = "none";
  body.style.overflow = "initial";
}

// When the user clicks on the Yes button, perform the recall action

function confirmCall() {
  var body = document.querySelector("body");
  var modal = document.getElementById("recall-modal");
  modal.style.display = "none";
  body.style.overflow = "initial";
}

// var confirmBtn = document.getElementById("confirm-recall");
// confirmBtn.onclick = function () {
// perform recall action here
// modal.style.display = "none";
// };

// Accordion for Tour Page
$(function () {
  //BEGIN
  $(".accordion_title").on("click", function (e) {
    e.preventDefault();
    var $this = $(this);

    if (!$this.hasClass("accordion-active")) {
      $(".accordion_content").slideUp(400);
      $(".accordion_title").removeClass("accordion-active");
      $(".accordion_arrow").removeClass("accordion_rotate");
    }

    $this.toggleClass("accordion-active");
    $this.next().slideToggle();
    $(".accordion_arrow", this).toggleClass("accordion__rotate");
  });
  //END
});
