// @ts-nocheck
// You can change global variables here:
var radius; // how big of the radius
var autoRotate = true; // auto rotate or not
var rotateSpeed = -100; // unit: seconds/360 degrees
var imgWidth; // width of images (unit: px)
var imgHeight; // height of images (unit: px)
if (window.innerWidth < 576) { 
  radius = 180
  imgWidth = 60
  imgHeight = 90
}
else if (window.innerWidth < 768) { 
  radius = 480
  imgWidth = 90
  imgHeight = 120
}
else if (window.innerWidth < 996) { 
  radius = 260
  imgWidth = 120
  imgHeight = 150
}
else { 
  radius = 320;
  imgWidth = 150
  imgHeight = 180
}


// Link of background music - set 'null' if you dont want to play background music
var bgMusicURL = null && 'https://api.soundcloud.com/tracks/143041228/stream?client_id=587aa2d384f7333a886010d5f52f302a';
var bgMusicControls = true; // Show UI music control

/*
     NOTE:
       + imgWidth, imgHeight will work for video
       + if imgWidth, imgHeight too small, play/pause button in <video> will be hidden
       + Music link are taken from: https://hoangtran0410.github.io/Visualyze-design-your-own-/?theme=HauMaster&playlist=1&song=1&background=28
       + Custom from code in tiktok video  https://www.facebook.com/J2TEAM.ManhTuan/videos/1353367338135935/
*/

// ===================== start =======================
var odrag = document.getElementById('drag-container');
var ospin = document.getElementById('spin-container');

if (odrag && ospin) {
  // animation start after 1000 miliseconds
  setTimeout(init, 0);

  var aImg = ospin.getElementsByTagName('img');
  var aVid = ospin.getElementsByTagName('video');
  var aEle = [...aImg, ...aVid]; // combine 2 arrays
  
  const archetype = {
    dreamer: `Seseorang yang idealis dan tanpa kompromi, kalian menikmati seni populer dengan memilih-milih. Sebagian besar waktu kalian habis dalam angan-angan yang kalian buat sendiri. Mungkin kalian sering berpikir bahwa budaya yang patut diapresiasi adalah budaya yang memiliki “substansi”. Namun substansi memiliki makna yang berbeda bagi setiap orang, dan seringkali untuk terkoneksi lebih baik kalian harus menurunkan standar.`,
    lover: `Segala yang ada di dunia ini memiliki unsur romantisme bagi kalian, hidup bukan hanya semata menjalani dari hari ke hari namun mengapresiasi keindahan sederhana yang ditawarkan oleh kehidupan. Cinta dapat ditemukan dimana saja, filosofi ini tercermin dalam preferensi kalian dalam mengkonsumsi budaya populer. Koneksi menurut kalian adalah mencintai dan dicintai, bukan hanya dalam konteks hubungan romantis namun juga ke aspek hidup yang lain.`,
    hero: `Bagi kalian karakter utama dalam hidup adalah diri kalian sendiri, tentu tidak salah untuk mencintai dan mengapresiasi diri sendiri. Dalam bermasyarakat kalian memiliki ideal yang kuat dan tahu apa yang kalian inginkan. Menjadi protagonis dalam kehidupan kalian sendiri bukan merupakan hal yang kalian hindari, persepsi diri menjadi salah satu hal yang esensial dalam berkoneksi dengan sesama. Bagaimana seseorang bisa mencari koneksi apabila ia tidak mengenal dirinya sendiri?`,
    jester: `Hidup bagi kalian ditentukan oleh seberapa banyak kenikmatan yang kalian dapat. Kalian tidak pemilih dan mengkonsumsi apa yang dapat memberi kalian kepuasan. Tidak memiliki preferensi khusus dan mengikuti arus bukan berarti kalian terombang-ambing namun kalian memilih untuk berkoneksi dengan lebih banyak orang lewat selera yang tidak spesifik. Hidup hanya sekali dan tidak salah untuk melewati nya dengan mengkonsumsi dan menikmati sebanyak mungkin dan seluas mungkin.`
  }
  
  aEle.forEach(element => {
    element.addEventListener('click', (e) => {
      const targetArchetype = e.target.dataset.archetype
      const textArchetype = archetype[targetArchetype]
      document.getElementById('archetypeText').innerHTML = `${targetArchetype.toUpperCase()} <br><br> ${textArchetype}`
    })
  })
  
  // Size of images
  ospin.style.width = imgWidth + "px";
  ospin.style.height = imgHeight + "px";
  
  // Size of ground - depend on radius
  var ground = document.getElementById('ground');
  ground.style.width = radius * 3 + "px";
  ground.style.height = radius * 3 + "px";
  
  function init(delayTime) {
    for (var i = 0; i < aEle.length; i++) {
      aEle[i].style.transform = "rotateY(" + (i * (360 / aEle.length)) + "deg) translateZ(" + radius + "px)";
      aEle[i].style.transition = "transform 1s";
      aEle[i].style.transitionDelay = delayTime || (aEle.length - i) / 4 + "s";
    }
  }
  
  function applyTranform(obj) {
    // Constrain the angle of camera (between 0 and 180)
    if(tY > 180) tY = 180;
    if(tY < 0) tY = 0;
  
    // Apply the angle
    obj.style.transform = "rotateX(" + (-tY) + "deg) rotateY(" + (tX) + "deg)";
  }
  
  function playSpin(yes) {
    ospin.style.animationPlayState = (yes?'running':'paused');
  }
  
  var sX, sY, nX, nY, desX = 0,
      desY = 0,
      tX = 0,
      tY = 10;
  
  // auto spin
  if (autoRotate) {
    var animationName = (rotateSpeed > 0 ? 'spin' : 'spinRevert');
    ospin.style.animation = `${animationName} ${Math.abs(rotateSpeed)}s infinite linear`;
  }
  
  // add background music
  if (bgMusicURL) {
    document.getElementById('music-container').innerHTML += `
  <audio src="${bgMusicURL}" ${bgMusicControls? 'controls': ''} autoplay loop>    
  <p>If you are reading this, it is because your browser does not support the audio element.</p>
  </audio>
  `;
  }
  
  // setup events
  odrag.onpointerdown = function (e) {
    clearInterval(odrag.timer);
    e = e || window.event;
    var sX = e.clientX,
        sY = e.clientY;
  
    this.onpointermove = function (e) {
      e = e || window.event;
      var nX = e.clientX,
          nY = e.clientY;
      desX = nX - sX;
      desY = nY - sY;
      tX += desX * 0.1;
      tY += desY * 0.1;
      applyTranform(odrag);
      sX = nX;
      sY = nY;
    };
  
    this.onpointerup = function (e) {
      odrag.timer = setInterval(function () {
        desX *= 0.95;
        desY *= 0.95;
        tX += desX * 0.1;
        tY += desY * 0.1;
        applyTranform(odrag);
        playSpin(false);
        if (Math.abs(desX) < 0.5 && Math.abs(desY) < 0.5) {
          clearInterval(odrag.timer);
          playSpin(true);
        }
      }, 17);
      this.onpointermove = this.onpointerup = null;
    };

    // customScroll()
  
    return true;
  };
}

function customScroll () {
  const cursor = document.querySelector('#cursor');
  const cursorCircle = cursor.querySelector('.cursor__circle');

  const mouse = { x: -100, y: -100 }; // mouse pointer's coordinates
  const pos = { x: 0, y: 0 }; // cursor's coordinates
  const speed = 0.1; // between 0 and 1

  const updateCoordinates = e => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
  }

  window.addEventListener('mousemove', updateCoordinates);

  function getAngle(diffX, diffY) {
    return Math.atan2(diffY, diffX) * 180 / Math.PI;
  }

  function getSqueeze(diffX, diffY) {
    const distance = Math.sqrt(
      Math.pow(diffX, 2) + Math.pow(diffY, 2)
    );
    const maxSqueeze = 0.15;
    const accelerator = 1500;
    return Math.min(distance / accelerator, maxSqueeze);
  }


  const updateCursor = () => {
    const diffX = Math.round(mouse.x - pos.x);
    const diffY = Math.round(mouse.y - pos.y);
    
    pos.x += diffX * speed;
    pos.y += diffY * speed;
    
    const angle = getAngle(diffX, diffY);
    const squeeze = getSqueeze(diffX, diffY);
    
    const scale = 'scale(' + (1 + squeeze) + ', ' + (1 - squeeze) +')';
    const rotate = 'rotate(' + angle +'deg)';
    const translate = 'translate3d(' + pos.x + 'px ,' + pos.y + 'px, 0)';

    cursor.style.transform = translate;
    cursorCircle.style.transform = rotate + scale;
  };

  function loop() {
    updateCursor();
    requestAnimationFrame(loop);
  }

  requestAnimationFrame(loop);
}