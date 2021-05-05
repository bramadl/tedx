<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background: #101010;
    }
    
    #line-svg {
      position: fixed;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      height: 100%;
      stroke-width: 1rem;
      stroke-linecap: round;
      stroke-linejoin: round;
      border: 1px solid white;
    }

    div.draw-line-height {
      /* feel free to change height */
      position: relative;
      height: 500vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>
  <div class="draw-line-height">
    <svg id="line-svg" width="110" height="1449" viewBox="0 0 110 1449" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path id="line-path" d="M1 1C37.1667 38 109.5 135.5 109.5 229.5C109.5 347 1 469.5 1 672.5C1 875.5 109.5 910 109.5 1018.5C109.5 1127 1 1222 1 1448.5" stroke="white" />
    </svg>
  </div>
  <script>
    // Get a reference to the <path>
    var path = document.querySelector('#line-path');

    // Get length of path... ~577px in this case
    var pathLength = path.getTotalLength();

    // Make very long dashes (the length of the path itself)
    path.style.strokeDasharray = pathLength + ' ' + pathLength;

    // Offset the dashes so the it appears hidden entirely
    path.style.strokeDashoffset = pathLength;

    // Jake Archibald says so
    // https://jakearchibald.com/2013/animated-line-drawing-svg/
    path.getBoundingClientRect();

    // When the page scrolls...
    window.addEventListener("scroll", function(e) {

      // What % down is it? 
      // https://stackoverflow.com/questions/2387136/cross-browser-method-to-determine-vertical-scroll-percentage-in-javascript/2387222#2387222
      // Had to try three or four differnet methods here. Kind of a cross-browser nightmare.
      var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

      // Length to offset the dashes
      var drawLength = pathLength * scrollPercentage;

      // Draw in reverse
      path.style.strokeDashoffset = pathLength - drawLength;

      // When complete, remove the dash array, otherwise shape isn't quite sharp
      // Accounts for fuzzy math
      if (scrollPercentage >= 0.99) {
        path.style.strokeDasharray = "none";

      } else {
        path.style.strokeDasharray = pathLength + ' ' + pathLength;
      }

    });
  </script>
</body>

</html>