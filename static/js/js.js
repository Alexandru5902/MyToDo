window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 12 || document.documentElement.scrollTop > 12) {
        document.getElementById("navbar-scroll").style.background = "#002B63";
    } 
    else {
        document.getElementById("navbar-scroll").style.background = "transparent";

    }
}



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
function myFunction() {
  document.getElementById("myDropdown-v2").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  
  if (!event.target.matches('.dropbtn-v2')) {
    var dropdowns = document.getElementsByClassName("dropdown-content-v2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
