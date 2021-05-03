// @ts-nocheck
const tl = gsap.timeline()

const letters = document.querySelectorAll('._tedx_title h1 p span')
letters.forEach(letter => {
  letter.innerHTML = letter.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
})

tl
.from('._tedx_hero_asset_container img', {
  opacity: 0,
  width: '150%',
  height: '150%',
  duration: 1.4,
  rotate: '15deg',
  ease: 'power2.inOut',
})
.from('._tedx_hero_asset .close', {
  opacity: 0,
  scale: 0,
  duration: 1,
  ease: 'power2.inOut'
}, '-=1.2')
.from('._tedx_hero_asset .line-container svg', {
  height: 0,
  duration: 2,
  ease: 'power2.inOut'
}, '-=1.4')
.from('._tedx_hero_asset .line-container .text', {
  width: 0,
  opacity: 0,
  duration: 1,
  ease: 'power2.inOut'
})

tl.from('._tedx_hero_icons a', {
  opacity: 0,
  x: 16,
  duration: .6,
  ease: 'power2.inOut',
  stagger: {
    amount: .6
  }
}, '-=1.4')

tl
.from('._tedx_title h1 p span .letter', {
  opacity: 0,
  y: '100%',
  stagger: {
    amount: .4,
  },
  duration: .6,
  ease: 'power2.inOut',
}, '-=1.4')
.from('._tedx_title .background', {
  width: 0,
  duration: .6,
  ease: 'power2.inOut'
}, '-=.4')
.from('._tedx_register_cta', {
  opacity: 0,
  duration: .6,
  ease: 'power2.inOut'
}, '-=.4')
.from('._tedx_subtitle h2', {
  width: 0,
  opacity: 0,
  duration: 1,
  ease: 'power2.inOut'
}, '-=.6')

