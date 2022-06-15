var rellax = new Rellax('.parallax')

gsap.from('.myName', {
  opacity: 0,
  duration: 3,
  delay: 0.5,
  y: 30,
  ease: 'expo.out'
})

gsap.from('.btns', {
  opacity: 0,
  duration: 3,
  delay: 0.7,
  y: 35,
  ease: 'expo.out',
  stagger: 0.2
})

/*Text*/
gsap.from('.subtitle', {
  opacity: 0,
  duration: 3,
  delay: 1.3,
  y: 35,
  ease: 'expo.out'
})

gsap.from('.title', {
  opacity: 0,
  duration: 3,
  delay: 1.1,
  y: 35,
  ease: 'expo.out'
})

const sr = ScrollReveal({
  duration: 2500,
  reset: true
})
