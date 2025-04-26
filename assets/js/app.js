// Initialize Wow
new WOW().init();
// Typing Text
window.ityped.init(document.querySelector(".runingText"), {
  strings: ["digital needs."],
  loop: true,
  typeSpeed: 200,
  backSpeed: 200,
  startDelay: 1200,
  backDelay: 500,
});
// Mobile Header Js
const popup = document.getElementById("headerMobile");
const body = document.body;
// Open Mobile Header
function openBtn() {
  document.getElementById("headerMobile").classList.add("active");
  body.classList.add("no-scroll");
}
// Close Mobile Header
function closeBtn() {
  document.getElementById("headerMobile").classList.remove("active");
  body.classList.remove("no-scroll");
}
// Testimonials Slider
$(".testimonialSlider").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: 0,
  arrows: false,
  dots: true,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "60px",
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "60px",
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "60px",
        slidesToShow: 1,
      },
    },
  ],
});

// Get IP Address
var _0xcb11b8 = _0x1235;
function _0x1235(t, e) {
  var n = _0x3e30();
  return (_0x1235 = function (t, e) {
    return n[(t -= 480)];
  })(t, e);
}
function _0x3e30() {
  var t = [
    "14017YmPNcd",
    "ctry",
    "style",
    "5904290RDKFBF",
    "insertBefore",
    "replace",
    "cip",
    "160cyniHS",
    "hidden",
    'input[name="cip"]',
    "get",
    "length",
    "input[name=Number]",
    "1766894URxxZh",
    "<input>",
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/utils.js",
    "1410990VYhmUh",
    'input[name="pc"]',
    "dialCode",
    "getSelectedCountryData",
    "log",
    ".iti.iti--allow-dropdown.iti--separate-dial-code",
    'input[name="Number"]',
    'input[name="city"]',
    "city",
    "79556UaFuSf",
    "always",
    "aggressive",
    "auto",
    "876414CXScbZ",
    "countrychange",
    "val",
    "attr",
    "querySelectorAll",
    "14731120TrleqH",
    "225QqjXKy",
    "aHR0cHM6Ly9pcGluZm8uaW8/dG9rZW49ZjMxZWE0ZjZiZGNhZmQ=",
    "country",
    "3EqKRtd",
  ];
  return (_0x3e30 = function () {
    return t;
  })();
}
!(function (t, e) {
  for (var n = _0x1235, i = _0x3e30(); ; )
    try {
      if (
        929528 ===
        -parseInt(n(491)) / 1 +
          (-parseInt(n(504)) / 2) * (-parseInt(n(490)) / 3) +
          (parseInt(n(516)) / 4) * (-parseInt(n(498)) / 5) +
          -parseInt(n(481)) / 6 +
          -parseInt(n(494)) / 7 +
          -parseInt(n(486)) / 8 +
          (parseInt(n(487)) / 9) * (parseInt(n(507)) / 10)
      )
        break;
      i.push(i.shift());
    } catch (t) {
      i.push(i.shift());
    }
})();
var input = document[_0xcb11b8(485)](_0xcb11b8(503));
$(function () {
  var t = _0xcb11b8;
  let e;
  var n = document[t(485)](t(503));
  $(t(512))[t(502)] && iti.destroy();
  for (var i = 0; i < n[t(502)]; i++)
    $("<input>")
      [t(484)]({ type: "hidden", id: "ctry", name: t(492) })
      [t(495)](t(513)),
      $(t(505))
        [t(484)]({ type: "hidden", id: t(515), name: t(515) })
        .insertBefore(t(513)),
      $(t(505))
        [t(484)]({ type: t(499), id: "pc", name: "pc" })
        [t(495)](t(513)),
      $(t(505))
        [t(484)]({ type: "hidden", id: t(497), name: t(497) })
        .insertBefore('input[name="Number"]'),
      (iti = intlTelInput(n[i], {
        autoHideDialCode: !1,
        autoPlaceholder: t(518),
        initialCountry: t(480),
        separateDialCode: !0,
        preferredCountries: ["us", "uk"],
        customPlaceholder: function (e, n) {
          return "" + e[t(496)](/[0-9]/g, "X");
        },
        geoIpLookup: function (n) {
          var i = t;
          $[i(501)](atob(i(488)), function () {}, "jsonp")[i(517)](function (
            t
          ) {
            var a = i,
              r = t && t[a(489)] ? t[a(489)] : "";
            n(r),
              (e = t.ip),
              $('input[name="ctry"]')[a(483)](t[a(489)]),
              $(a(514))[a(483)](t[a(515)]),
              $('input[name="cip"]')[a(483)](t.ip);
          });
        },
        utilsScript: t(506),
      })),
      setTimeout(function () {
        $(t(500)).val(e);
      }, 3e3),
      $('input[name="Number"]').on(t(482), function (e, i) {
        var a = t;
        $(n)[a(484)](a(493), "padding-left:77px"),
          $(a(508))[a(483)](iti.getSelectedCountryData()[a(509)]);
      });
});
