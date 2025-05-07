$(function () {
  sliderInit();
  lenisSetup();
  replaceHash();
  if ($(".runingText").length > 0) {
    typingText();
  }
  mobileHeader();
  Fancybox.bind();
})

function sliderInit() {
  var testimonialSlider = new Swiper('.testimonialSlider', {
    loop: true,
    autoplay: true,
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      1199: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      576: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      280: {
        slidesPerView: 1,
        spaceBetween: 10,
      }
    },
  });
}

function lenisSetup() {
  const lenis = new Lenis({
    duration: 1.5,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smooth: true,
    mouseMultiplier: 1,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      lenis.scrollTo(this.getAttribute("href"));
    });
  });
  lenis.scrollTo("top");
}

function replaceHash() {
  document.querySelectorAll("a").forEach((a) => {
    let href = a.getAttribute("href");
    a.href = href ?
      href.startsWith("#") && href.endsWith("#") ?
      href.replace("#", "javascript:void(0)") :
      href :
      "javascript:void(0)";
  });
}

// Typing Text
function typingText() {
  window.ityped.init(document.querySelector(".runingText"), {
    strings: ["Digital Services.", "Legal Solutions.", "Book Publishing", "Amazon Growth", "Brand Protection", "Website Design & Development"],
    loop: true,
    typeSpeed: 200,
    backSpeed: 200,
    startDelay: 1200,
    backDelay: 500,
  });
}

// Mobile Header
function mobileHeader() {
  const popup = document.getElementById("headerMobile");
  const body = document.body;
  const openButton = document.getElementById("openMenu"); // ID of the hamburger menu button
  const closeButton = document.getElementById("closeMenu"); // ID of the close button

  function openBtn() {
    popup.classList.add("active");
    body.classList.add("no-scroll");
  }

  function closeBtn() {
    popup.classList.remove("active");
    body.classList.remove("no-scroll");
  }

  // Attach event listeners to buttons
  openButton.addEventListener("click", openBtn);
  closeButton.addEventListener("click", closeBtn);
}