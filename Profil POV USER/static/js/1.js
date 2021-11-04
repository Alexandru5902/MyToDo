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

function handleScroll() {
  // do something on scroll
  var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
  if ((rootElement.scrollTop / scrollTotal) > TOGGLE_RATIO) {
    //show button
    scrollToTopBtn.classList.add("showBtn")
  } else {
    //hide button
    scrollToTopBtn.classList.remove("showBtn")
  }
}

function scrollToTop() {
  //scroll to top logic
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 800, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
  });
}
scrollToTopBtn.addEventListener("click", scrollToTop)
document.addEventListener("scroll", handleScroll)

/* Aicea oleak de smecherie */

function GetCrypto(){
const api = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false';
const bitcointext = document.getElementById('bitcoin-text');
const bitcoinprice = document.getElementById('bitcoin-price');
const ehtereumprice = document.getElementById('ethereum-price');
const ethereumtext = document.getElementById('ethereum-text');
const litecointext = document.getElementById('litecoin-text');
const litecoinprice = document.getElementById('litecoin-price');
const polkadottext = document.getElementById('polkadot-text');
const polkadotprice = document.getElementById('polkadot-price');

fetch(api)
.then(res => res.json())
.then(data => {
  console.log(data);
  data.map((crypto) => {
    if(crypto.id === 'bitcoin'){
      bitcointext.innerHTML = `<img src="crypto/iconite/bitcoin.svg" class="bitcoin" /> Bitcoin`;
      bitcoinprice.innerHTML = `$ ${crypto.current_price}`;
    }
    else if(crypto.id === 'ethereum'){
      ethereumtext.innerHTML = `<img src="crypto/iconite/ethereum.svg" class="ethereum" /> Ethereum`;
      ehtereumprice.innerHTML = `$ ${crypto.current_price}`;
    }
    else if(crypto.id === 'litecoin'){
      litecointext.innerHTML = `<img src="crypto/iconite/litecoin.svg" class="litecoin" /> Litecoin`;
      litecoinprice.innerHTML = `$ ${crypto.current_price}`;
    }
    else if(crypto.id === 'polkadot'){
      polkadottext.innerHTML = `<img src="crypto/iconite/coin.svg" class="polkadot" /> Polkadot`;
      polkadotprice.innerHTML = `$ ${crypto.current_price}`;
    }
  })
});
}


GetCrypto();


$("#contact .form .submit").click(function () {

  let nume  = $(this).siblings("input[name='nume']").val();
  let email  = $(this).siblings("input[name='email']").val();
  let telefon  = $(this).siblings("input[name='telefon']").val();
  let mesaj  = $(this).siblings("textarea[name='mesaj']").val();

  if (nume != "" || email != "" || telefon != "" || mesaj != "") {
    $.ajax({

      url: "sendMail.php",
      method: "post",
      data: {nume: nume, email: email, telefon: telefon, mesaj: mesaj},
      success: function (data) {

        if (data.search("Mesajul tau a fost primit. Iti vom raspunde ASAP.") != -1) {

          alert("Mesajul tau a fost primit. Iti vom raspunde ASAP.")

        }else if (data.search("Ai trimis deja un mesaj") != -1) {
          
          alert("Ai trimis deja un mesaj");

        }else {

          alert("A aparut o problema");

        }
        

      }

    })
  }else {

    alert("Toate campurile sunt obligatorii");

  }

});

$(document).ready(function(){
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

