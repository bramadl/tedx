// @ts-nocheck
const aboutContainer = document.querySelectorAll('._tedx_about_ted_content_container')

if (aboutContainer.length) {
  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.2
  };
  
  let revealCallback = (entries, self) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const container = entry.target
        const title = container.querySelectorAll('._tedx_title_alt h1 p span')
        title.forEach(item => item.innerHTML = item.textContent.replace(/\S/g, "<span class='letter'>$&</span>"))
        
        const letters = container.querySelectorAll('.letter')
        const text = container.querySelector('._tedx_text p')
        const background = container.querySelector('.background')
        const link = container.querySelectorAll('._tedx_link')

        const tl = gsap.timeline({ ease: 'power2.inOut' })
        tl
        .fromTo(
          container,
          {
            opacity: 0,
            x: -64
          },
          {
            opacity: 1,
            x: 0
          }
        )
        .from(
          letters,
          {
            opacity: 0,
            y: '100%',
            stagger: {
              amount: .6
            },
            duration: 1
          }
        )
        .from(
          background,
          {
            width: 0,
            duration: .6,
            ease: 'power2.inOut'
          },
          '-='
        )
        .from(
          text,
          {
            opacity: 0,
            x: -64
          },
          '<'
        )
        .from(
          link,
          {
            opacity: 0,
            width: 0
          }
        )

        self.unobserve(container)
      }
    });
  };

  const observer = new IntersectionObserver(revealCallback, options)

  aboutContainer.forEach(container => {
    observer.observe(container)
  })
}