// @ts-nocheck
const options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.8
}

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translate(-50%, -50%)';
    } else {
      entry.target.style.opacity = '0';
      entry.target.style.transform = 'translate(-50%, -40%)';
    }
  })
}, options)

const videoTeaser = document.querySelector('._tedx_video_text')
observer.observe(videoTeaser)