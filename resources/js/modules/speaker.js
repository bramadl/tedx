// @ts-nocheck
const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.9
};

let revealCallback = (entries, self) => {
  entries.forEach(entry => {
    let container = entry.target;
    let img = entry.target.querySelector("img");
    let titleContainer = entry.target.querySelector('._tedx_speaker_title')
    let avatars = document.querySelectorAll('._tedx_speaker_avatar')

    const easeInOut = "power3.out";
    const revealAnim = gsap.timeline({ ease: easeInOut });

    if (entry.isIntersecting) {
      revealAnim.set(container, {
        visibility: "visible"
      });
      revealAnim.fromTo(
        container,
        {
          clipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)",
          webkitClipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)"
        },
        {
          clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
          webkitClipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
          duration: 1,
          ease: easeInOut
        }
      );
      revealAnim.from(img, 4, {
        scale: 1.4,
        ease: easeInOut,
        delay: -1
      });
      revealAnim.from(titleContainer, {
        width: 0,
        duration: 2.4,
        ease: easeInOut
      }, '-=3.6')
      revealAnim.fromTo(avatars, {
        x: 16,
        opacity: 0,
      }, {
        x: 0,
        opacity: 1,
        duration: 1.4,
        ease: easeInOut,
        stagger: {
          amount: .6
        }
      }, '-=')
      self.unobserve(entry.target);
    }
  });
};

let revealObserver = new IntersectionObserver(revealCallback, options);

document.querySelectorAll(".reveal").forEach(reveal => {
  revealObserver.observe(reveal);
});

const speakers = {
  angelina_jolie: {
    url: 'https://images.unsplash.com/photo-1516726817505-f5ed825624d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80',
    title: 'Peran Acting Di Dunia Industri'
  },
  karen_elina: {
    url: 'https://images.unsplash.com/photo-1503104834685-7205e8607eb9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80',
    title: 'Mengguncang Dunia Dengan Tulisan'
  },
  jane_wong: {
    url: 'https://images.unsplash.com/photo-1526413232644-8a40f03cc03b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80%20634w',
    title: 'Makeup Universal, Universal Makeup ?'
  }
}
const speakerAvatars = document.querySelectorAll('._tedx_speaker_avatar')
speakerAvatars.forEach(avatar => {
  avatar.addEventListener('click', () => {
    const speakerProfile = document.querySelector('._tedx_speaker_profile')
    speakerProfile.querySelector('img').src = speakers[avatar.dataset.target].url
    speakerProfile.querySelector('h1').innerHTML = speakers[avatar.dataset.target].title

    const container = document.querySelector('.reveal')
    const img = container.querySelector("img");
    const titleContainer = container.querySelector('._tedx_speaker_title')

    const easeInOut = "power3.out";
    const revealAnim = gsap.timeline({ ease: easeInOut });

    revealAnim.fromTo(img, 4, {
      scale: 1.2
    }, {
      scale: 1,
      ease: easeInOut,
    });
  })
})