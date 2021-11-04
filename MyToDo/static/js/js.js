
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 12 || document.documentElement.scrollTop > 12) {
    document.getElementById("navbar-scroll").style.background = "rgba(0, 0, 0, 0.9)";
  } else {
    document.getElementById("navbar-scroll").style.top = "0px";
    document.getElementById("navbar-scroll").style.background = "rgba(0, 0, 0, 0)";
  }
}

var scrollToTopBtn = document.querySelector(".scrollToTopBtn")
var rootElement = document.documentElement
var TOGGLE_RATIO = 0.80
$(document).ready(function(){
  
  var hamburger = document.getElementsByClassName("hamburger");
    for (var i = 0; i < hamburger.length; i++) {
        hamburger[i].addEventListener('click', function() {
        this.classList.toggle("is-active");
        }, false);
      }
  (function() {
  var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
                              window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  window.requestAnimationFrame = requestAnimationFrame;
  })();

  $('.hamburger').on('click', () => {
      $('.nav-list .nav').slideToggle();
      $('.nav-list .nav').addClass("show-nav");
  });
  $('.hamburger').click(function(){
      $('nav').toggleClass("background");
  });
  
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

$(document).ready(function(){
  $(".footer-container .owl-carousel").owlCarousel({
    loop:true,
    autoplay:true,
    slideBy: 7,
    margin: 20,
    dots: true,
    nav: false,
    items:5,
    responsive:{
        0:{
            items:2
        },
        400:{
            items:3
        },
        600:{
            items:4
        },
        800:{
            items:5
        },
        1000:{
            items:6
        },
        1400:{
            items:7
        }
    }
  
  });
});

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
