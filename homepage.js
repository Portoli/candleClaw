"use strict";
window.onbeforeunload = function () {
  window.scrollTo(0, 0);
};

$(document).ready(function () {
  $("body").css("overflow-y", "hidden");

  document.getElementById('bodyID').scrollIntoView();
  let animaStop = false;
  let proc = 0;
  let procSize = 0;
  let aniType = 0;
  let aniChange = 0;
  let sizeFlag = false;
  let cogBreaking = false;
  let cogBreakNr = 0;
  let cogTiming = [600, 400, 200, 80, 40, 10, 10];

  var imgs = document.images,
    len = imgs.length,
    counter = 0;

  console.log(len);
  [].forEach.call(imgs, function (img) {
    if (img.complete) incrementCounter();
    else img.addEventListener("load", incrementCounter, false);
  });

  function incrementCounter() {
    counter++;
    if (counter === len) {
      console.log("All images loaded!");
      aniChange = 1;
    }
  }

  function logoAnimation() {
    if (aniType == 0) {
      proc += 4;
      pathCogIn.style.strokeDashoffset =
        pathCogInLength - (pathCogInLength * proc) / 1000;

      pathCogOut.style.strokeDashoffset =
        pathCogOutLength - (pathCogOutLength * proc) / 1000;

      if (aniChange == 1 && proc % 1000 == 0 && (proc / 1000) % 2 == 1) {
        aniType = 1;
        proc = 0;
        pathCogIn.style.fill = "rgb(13, 13, 13, 1)";
      }
    }
    if (aniChange == 1 && procSize < 500) {
      procSize += 2;
      let vSize = 100 + 100 * easeInOutCubic(procSize / 500);
      $("#logoContainer").css(
        "transform",
        "translate(-50%,-50%) scale(" + vSize + "%)"
      );
      let strokeW = 0.5 + 1.5 * (1 - easeInOutCubic(procSize / 500));
      $("#pathCogOut").css("stroke-width", strokeW);
      $("#pathCogIn").css("stroke-width", strokeW);
      if (procSize == 500) sizeFlag = true;
    }
    if (sizeFlag && animaStop == false) {
      setTimeout(() => {
        $("#cogContainer").css("opacity", 0);
        $("#cw0").css("opacity", 1);
        cogBreaking = true;
        cogBreakingF();
      }, 100);
      animaStop = true;
    }
    setTimeout(function () {
      if (!animaStop) logoAnimation();
    }, 5);
  }
  function cogBreakingF() {
    cogBreakNr += 1;
    $("#cw" + cogBreakNr).css(
      "opacity",
      1
    );
    if (cogBreakNr > 0) {
      $("#cw" + (cogBreakNr - 1)).css(
        "opacity",
        0
      );
    }
    setTimeout(() => {
      if (cogBreaking && cogBreakNr < 7) cogBreakingF();
      if (cogBreakNr == 7) {
        setTimeout(() => {
          $("#loadScreen").css("opacity", 0);
          $("#logoContainer").css("opacity", 0);
          setTimeout(() => {
            $("#loadScreen").css("display", "none");
            $("body").css("overflow-y", "scroll");
          }, 500);
        }, 500);
      }
    }, cogTiming[cogBreakNr - 1]);
  }

  logoAnimation();

  $(window).on("scroll", function () {

    let scrollHeight = Math.max(
      document.body.scrollHeight, document.documentElement.scrollHeight,
      document.body.offsetHeight, document.documentElement.offsetHeight,
      document.body.clientHeight, document.documentElement.clientHeight
    );

    var scrollProp =
      $(window).scrollTop() /
      ($("#container").height());
    var scrollProc = Math.floor(scrollProp * 1000);

    if (scrollProc > 40) {
      let shiftProc1 = 10 - (30 * (scrollProc - 400)) / 1000;
      let shiftProc2 = 25 - (80 * (scrollProc - 400)) / 1000;
      $("#con3BG1").css("top", shiftProc1 + "%");
      $("#con3BG2").css("top", shiftProc2 + "%");
      $("#discord-content").css("top", shiftProc2 + "%");

      //console.log(shiftProc1);
    }
  });

  $('.dotMark').on('click', function (event) {
    let shiftSc = '-' + ($(this)[0].id[3] * 100) + '%';
    $('#showcaseLine').css('left', shiftSc);
    $('.dotMark').removeClass('ScMON');
    $(this).toggleClass('ScMON');
  });
});

let pathCogOut = document.getElementById("pathCogOut");
let pathCogOutLength = pathCogOut.getTotalLength();

pathCogOut.style.strokeDasharray = pathCogOutLength + " " + pathCogOutLength;
pathCogOut.style.strokeDashoffset = pathCogOutLength;

let pathCogIn = document.getElementById("pathCogIn");
let pathCogInLength = pathCogIn.getTotalLength();

pathCogIn.style.strokeDasharray = pathCogInLength + " " + pathCogInLength;
pathCogIn.style.strokeDashoffset = pathCogInLength;

const mouse = {
  x: 0,
  y: 0,
  radius: Math.floor(window.innerHeight / 5),
};

function easeInOutCubic(x) {
  return x < 0.5 ? 4 * x * x * x : 1 - Math.pow(-2 * x + 2, 3) / 2;
}
