// @ts-nocheck
require("./bootstrap");

// Required Plugins
require("./plugins/custom-cursor");
require("./plugins/locomotiveScroll");

// Home Page
require("./modules/menu");
require("./modules/hero");
require("./modules/teaser");
require("./modules/speaker");
require("./modules/archetype");

// About Page
require("./modules/about");

// Partners Page
require('./modules/partners')

const playVideoButton = document.querySelector('.open-video-player')
const closeVideoButton = document.querySelector('.close-video-player')
const videoPlayer = document.querySelector('#videoPlayer')

playVideoButton.addEventListener('click', () => {
  const timeline = gsap.timeline()

  timeline
  .to(
    videoPlayer,
    {
      opacity: 1,
      scale: 1,
      y: 0,
      pointerEvents: 'all',
      duration: 1.2,
      ease: 'power2.inOut'
    }
  )
  .to(
    closeVideoButton,
    {
      opacity: 1,
      duration: 1,
      ease: 'power.out'
    }
  )
})

closeVideoButton.addEventListener('click', () => {
  const video = videoPlayer.querySelector('video')
  
  const timeline = gsap.timeline()

  timeline
  .to(
    closeVideoButton,
    {
      opacity: 0,
      duration: 1,
      ease: 'power2.inOut'
    }
  )
  .to(
    videoPlayer,
    {
      opacity: 0,
      scale: 0,
      y: '100%',
      pointerEvents: 'none',
      duration: 1.2,
      ease: 'power2.inOut',
      onComplete: () => {
        video.pause()
        video.currentTime = 0
      }
    }
  )
})