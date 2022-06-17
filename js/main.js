/* home animation */

/* Mountains animation */
let imgOne = document.getElementById('imgOne');
let imgTwo = document.getElementById('imgTwo');
let imgThree = document.getElementById('imgThree');
let imgFour = document.getElementById('imgFour');
let title = document.getElementById('title');
let subtitle = document.getElementById('subtitle');

window.addEventListener('scroll', function(){
  var value = window.scrollY;

  imgOne.style.top = value * 0.5 + 'px';
  imgTwo.style.top = value * 0.5 + 'px';
  imgThree.style.top = value * 0.15 + 'px';
  imgFour.style.top = value * 0.15 + 'px';
  title.style.top = value * 1 + 'px';
  subtitle.style.top = value * 1 + 'px';
})


/* Animation on reload */
ScrollReveal().reveal('.myName', { interval: 16, reset: true, delay: 300 });
ScrollReveal().reveal('.btn', { interval: 16, reset: true, delay: 300 });
ScrollReveal().reveal('.title', { interval: 16, reset: true, delay: 400 });
ScrollReveal().reveal('.subtitle', { interval: 16, reset: true, delay: 300 });

/* other animation */