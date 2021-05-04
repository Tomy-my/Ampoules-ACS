// scrip ajax no refresh page au moment de l'envoie des données du formulaire
function sendData()
{
  var date = document.getElementById("date").value;
  var upstairs = document.getElementById("upstairs").value;
  var position = document.getElementById("position").value;
  var price = document.getElementById("price").value;
  $.ajax({
    type: 'post',
    url: 'controller/formulaire.php',
    data: {
      date:date,
      upstairs:upstairs,
      position:position,
      price:price
    },
    success: function (response) {
      $('#res').html("");
    }
  });
    
  return false;
}


// Template du boutton number url : https://www.cssscript.com/animated-input-spinner-pure-javascript-csscss3/
(function() {
    'use strict';
  
    function ctrls() {
      var _this = this;
  
      this.counter = 0;
      this.els = {
        decrement: document.querySelector('.ctrl__button--decrement'),
        counter: {
          container: document.querySelector('.ctrl__counter'),
          num: document.querySelector('.ctrl__counter-num'),
          input: document.querySelector('.ctrl__counter-input')
        },
        increment: document.querySelector('.ctrl__button--increment')
      };
  
      this.decrement = function() {
        var counter = _this.getCounter();
        var nextCounter = (_this.counter > 0) ? --counter : counter;
        _this.setCounter(nextCounter);
      };
  
      this.increment = function() {
        var counter = _this.getCounter();
        var nextCounter = (counter < 11) ? ++counter : counter;
        _this.setCounter(nextCounter);
      };
  
      this.getCounter = function() {
        return _this.counter;
      };
  
      this.setCounter = function(nextCounter) {
        _this.counter = nextCounter;
      };
  
      this.debounce = function(callback) {
        setTimeout(callback, 100);
      };
  
      this.render = function(hideClassName, visibleClassName) {
        _this.els.counter.num.classList.add(hideClassName);
  
        setTimeout(function() {
          _this.els.counter.num.innerText = _this.getCounter();
          _this.els.counter.input.value = _this.getCounter();
          _this.els.counter.num.classList.add(visibleClassName);
        }, 100);
  
        setTimeout(function() {
          _this.els.counter.num.classList.remove(hideClassName);
          _this.els.counter.num.classList.remove(visibleClassName);
        }, 200);
      };
  
      this.ready = function() {
        _this.els.decrement.addEventListener('click', function() {
          _this.debounce(function() {
            _this.decrement();
            _this.render('is-decrement-hide', 'is-decrement-visible');
          });
        });
  
        _this.els.increment.addEventListener('click', function() {
          _this.debounce(function() {
            _this.increment();
            _this.render('is-increment-hide', 'is-increment-visible');
          });
        });
  
        _this.els.counter.input.addEventListener('input', function(e) {
          var parseValue = parseInt(e.target.value);
          if (!isNaN(parseValue) && parseValue >= 0) {
            _this.setCounter(parseValue);
            _this.render();
          }
        });
  
        _this.els.counter.input.addEventListener('focus', function(e) {
          _this.els.counter.container.classList.add('is-input');
        });
  
        _this.els.counter.input.addEventListener('blur', function(e) {
          _this.els.counter.container.classList.remove('is-input');
          _this.render();
        });
      };
    };
  
    // init
    var controls = new ctrls();
    document.addEventListener('DOMContentLoaded', controls.ready);
  })();


// Bloquer des caractères 
  function verif(evt) {
    var keyCode = evt.which ? evt.which : evt.keyCode;
    var accept = '0123456789.';
    if (accept.indexOf(String.fromCharCode(keyCode)) >= 0) {
        return true;
    } else {
        return false;
    }
}


//popUp
function myFunction() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}


// Merci Nina !!
// Lummière qui s'allume à l'envoie des données
let monBouton = document.querySelector(".send");
let monElement = document.querySelector(".amp i");
monBouton.addEventListener("click", function() {
monElement.style.color = "#b51eff";
monElement.style.transition = "all 1s cubic-bezier(1,1.07,.81,.01) 0s";

  setTimeout(function() {
    monElement.style.color = "#354052";
    monElement.style.transition = "all 0.7s ease";
    }, 6000);
})





// Help price
let help = document.querySelector("h1 i");
let ghost = document.querySelector("#ghost");
help.addEventListener("click", function() {
ghost.style.marginTop = "-45px";
ghost.style.opacity = "1";
ghost.style.transition = "all 1s ease";

  setTimeout(function() {
    ghost.style.opacity = "0";
    ghost.style.marginTop = "-10px";
    ghost.style.transition = "all 1s ease";
    }, 3000);
})

