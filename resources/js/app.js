// @ts-nocheck
require('./bootstrap');

require('./plugins/custom-cursor');
require('./plugins/gsap.js');
require('./plugins/locomotiveScroll');

require('./modules/teaser');
require('./modules/speaker');
require('./modules/archetype');

// console.clear();

const $ = (el) => document.querySelector(el)
const hamburger = $('._tedx_hamburger')
const close = $('#close')
hamburger.addEventListener('click', openMenu)
close.addEventListener('click', closeMenu)

function openMenu () {
  const menuWrapper = $('._tedx_menu_wrapper')
  const separator = menuWrapper.querySelector('.separator')
  const links = menuWrapper.querySelectorAll('._tedx_link_wrapper a')
  const sublinks = menuWrapper.querySelectorAll('._tedx_sub_links')
  const hasMenuOpen = menuWrapper.classList.contains('menu-open')

  gsap.set(menuWrapper, {
    opacity: 0,
    pointerEvents: 'none'
  })

  const menuOpen = gsap
  .timeline({ paused: true })
  .to(
    "._tedx_menu_wrapper",
    {
      opacity: 1,
      pointerEvents: 'all',
      duration: 1,
      ease: 'sine.inOut'
    }
  )
  .from(
    sublinks,
    {
      opacity: 0,
      y: 64,
      duration: 1.4,
      ease: 'power2.inOut'
    },
    '-=4'
  )
  .from(
    separator,
    {
      height: 0,
      opacity: 0,
      duration: 1.4,
      ease: 'sine.inOut'
    },
    '<'
  )
  .from(
    links,
    {
      y: '100%',
      duration: 1,
      ease: 'power2.inOut',
      stagger: {
        amount: .6
      }
    },
    '-=1'
  )

  if (hasMenuOpen) {
    menuWrapper.classList.toggle('menu-open')
    menuOpen.reverse()
  } else {
    menuWrapper.classList.toggle('menu-open')
    menuOpen.play()
  }
}

function closeMenu () {
  const menuWrapper = $('._tedx_menu_wrapper')
  const separator = menuWrapper.querySelector('.separator')
  const links = menuWrapper.querySelectorAll('._tedx_link_wrapper a')
  const sublinks = menuWrapper.querySelectorAll('._tedx_sub_links')
  const hasMenuOpen = menuWrapper.classList.contains('menu-open')

  gsap.set(menuWrapper, {
    opacity: 0,
    pointerEvents: 'none'
  })

  const menuOpen = gsap
  .timeline({ paused: true })
  .to(
    links,
    {
      y: '100%',
      duration: 1,
      ease: 'power2.inOut',
      stagger: {
        amount: .6
      }
    },
    '-=1'
  )
  .to(
    separator,
    {
      height: 0,
      opacity: 0,
      duration: 1.4,
      ease: 'sine.inOut'
    },
    '<'
  )
  .to(
    sublinks,
    {
      opacity: 0,
      y: 64,
      duration: 1.4,
      ease: 'power2.inOut'
    },
    '-=4'
  )
  .to(
    "._tedx_menu_wrapper",
    {
      opacity: 0,
      pointerEvents: 'none',
      duration: 1,
      ease: 'sine.inOut'
    }
  )

  if (hasMenuOpen) {
    menuWrapper.classList.toggle('menu-open')
    menuOpen.reverse()
  } else {
    menuWrapper.classList.toggle('menu-open')
    menuOpen.play()
  }
}