// @ts-nocheck
require("./bootstrap");

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

const options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.8
}

const scaleCallback = (entries, self) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const image = entry.target.querySelector('img')
      const title = entry.target.querySelector('._tedx_partner_profile_wrapper')
      const links = title.querySelectorAll('li')

      gsap.to(
        image,
        {
          scale: 1.15,
          duration: 2,
          ease: 'power2.inOut'
        }
      )

      const tl = gsap.timeline({ ease: 'power2.out' })
      tl.to(
        title,
        {
          opacity: 1,
          duration: 1.4
        }
      ).from(
        links,
        {
          y: '100%',
          opacity: 0,
          duration: .6,
          stagger: {
            amount: .8
          }
        },
        '<'
      )

      self.unobserve(entry.target)
    }
  })
}

const observer = new IntersectionObserver(scaleCallback, options)

const partnerContainers = document.querySelectorAll('.tedx_section_image_partners_content')
partnerContainers.forEach(container => {
  observer.observe(container)
})