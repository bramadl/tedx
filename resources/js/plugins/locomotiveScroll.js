// @ts-nocheck
const scroller = new LocomotiveScroll({
  el: document.querySelector('[data-scroll-container]'),
  smooth: true
})

gsap.registerPlugin(ScrollTrigger)

scroller.on('scroll', ScrollTrigger.update)

ScrollTrigger.scrollerProxy(
  '._tedx_video_teaser', {
      scrollTop(value) {
          return arguments.length ?
          scroller.scrollTo(value, 0, 0) :
          scroller.scroll.instance.scroll.y
      },
      getBoundingClientRect() {
          return {
              left: 0, top: 0, 
              width: window.innerWidth,
              height: window.innerHeight
          }
      }
  }
)

ScrollTrigger.create({
  trigger: '._tedx_video_mask',
  scroller: '._tedx_video_teaser',
  start: 'top+=30% 50%',
  end: 'bottom-=40% 50%',
  animation: gsap.to('._tedx_video_mask', {backgroundSize: '120%'}),
  scrub: 2
})

ScrollTrigger.addEventListener('refresh', () => scroller.update())

ScrollTrigger.refresh()