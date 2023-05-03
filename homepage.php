<?php
require_once "siteLinkControl.php";
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta charset="utf-8" />
  <title></title>
  <meta name="description" content="" />
  <meta name="keywords" contetent="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chome=1" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;500&display=swap" rel="stylesheet" />
  <!-- font-family: 'Fira Sans', sans-serif; -->

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet" />
  <!-- font-family: 'PT Serif', serif; italic400-->

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;600&display=swap" rel="stylesheet" />
  <!-- font-family: 'Oswald', sans-serif; Oswald300 600-->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
  <!-- font-family: 'Amatic SC', cursive;-->

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="homepage.css" />
  <link rel="stylesheet" href="element-Menu.css" />
  <link rel="stylesheet" href="element-Footer.css" />

  <link rel="preload" href="img/logo/png/CWV0.png" as="image" />
</head>

<body id="bodyID">

  <div id="loadScreen">
    <div id="logoContainer">
      <div id="cogContainer">
        <svg height="100%" width="100%" viewbox="0 0 540 540" preserveAspectRatio="xMidYMax meet">
          <path id="pathCogOut" stroke="rgb(186, 108, 51, 1)" fill="rgb(136, 68, 11, 1)" stroke-width="2" height="100%" d="m 89.999581,10.230244 c 14.396309,-0.06544 15.705069,2.552082 17.013839,5.169602 1.30874,2.617518 1.30874,11.77884 1.30874,11.77884 4.56635,1.016043 8.96698,2.745137 13.14256,5.442997 0,0 6.478,-6.478032 9.25429,-7.403463 2.77632,-0.925433 5.55261,-1.850868 15.68606,8.375168 10.22601,10.133492 9.30061,12.909791 8.37517,15.686092 -0.92544,2.7763 -7.40344,9.254319 -7.40344,9.254319 2.51043,3.947339 4.39949,8.281741 5.44448,13.142254 0,0 9.16135,0 11.77888,1.309037 2.61751,1.308745 5.23502,2.617519 5.1696,17.013871 0.0654,14.396379 -2.55209,15.705149 -5.1696,17.013889 -2.61753,1.30878 -11.77883,1.30878 -11.77883,1.30878 -1.01602,4.56632 -2.74514,8.96696 -5.44315,13.1428 0,0 6.47786,6.47824 7.4033,9.25454 0.92543,2.77629 1.85087,5.55261 -8.37517,15.68608 -10.13347,10.22608 -12.90975,9.3006 -15.68605,8.3752 -2.77629,-0.92542 -9.25429,-7.4035 -9.25429,-7.4035 -3.94736,2.51045 -8.28173,4.39955 -13.14224,5.4445 0,0 0,9.16136 -1.30903,11.77892 -1.30875,2.61751 -2.61753,5.23504 -17.013839,5.1696 -14.396349,0.0654 -15.705097,-2.55209 -17.01387,-5.1696 -1.308747,-2.61756 -1.308747,-11.77886 -1.308747,-11.77886 -4.566347,-1.01602 -8.966987,-2.74512 -13.142773,-5.44314 0,0 -6.478294,6.47788 -9.254586,7.4033 -2.776295,0.92544 -5.552587,1.85088 -15.686054,-8.37514 -10.226001,-10.1335 -9.300587,-12.90982 -8.375119,-15.68612 0.925412,-2.77628 7.403412,-9.25431 7.403412,-9.25431 -2.510426,-3.94736 -4.39952,-8.28173 -5.444426,-13.14224 0,0 -9.161361,-2.5e-4 -11.778854,-1.30901 -2.61752,-1.30876 -5.23504,-2.61755 -5.1696,-17.013905 -0.06544,-14.396372 2.55208,-15.705116 5.1696,-17.013891 2.617493,-1.308745 11.7788,-1.308745 11.7788,-1.308745 1.016053,-4.566324 2.745119,-8.967015 5.443148,-13.142819 0,0 -6.477895,-6.478261 -7.403309,-9.254571 -0.92544,-2.7763 -1.85088,-5.55259 8.375148,-15.686087 10.133467,-10.226034 12.90976,-9.300599 15.686053,-8.375168 2.776294,0.925433 9.254321,7.403465 9.254321,7.403465 3.947332,-2.510434 8.281706,-4.399525 13.142453,-5.44433 0,0 5.06e-4,-9.161235 1.309253,-11.778753 1.308773,-2.61752 2.617521,-5.235042 17.01387,-5.169602" />
          <path id="pathCogIn" stroke="rgb(186, 108, 51, 1)" fill="rgb(13,13,13,1)" stroke-width="2" d="m 90,55.147572 c 19.24847,-10e-7 34.85243,15.603963 34.85243,34.852428 0,19.24847 -15.60396,34.85243 -34.85243,34.85243 C 70.751535,124.85243 55.147571,109.24847 55.147572,90 55.147572,70.751536 70.751536,55.147572 90,55.147572" />
        </svg>
      </div>
      <div id="cog2Container">
        <div id="cw0" class="cogwheel2"></div>
        <div id="cw1" class="cogwheel2"></div>
        <div id="cw2" class="cogwheel2"></div>
        <div id="cw3" class="cogwheel2"></div>
        <div id="cw4" class="cogwheel2"></div>
        <div id="cw5" class="cogwheel2"></div>
        <div id="cw6" class="cogwheel2"></div>
        <div id="cw7" class="cogwheel2"></div>
      </div>
    </div>
  </div>
  <image style="display: none"></image>

  <?php
  require_once "element-Menu.php";
  ?>

  <div id="container" class="container part_margin" style="margin-top: 5vh;">
    <div id="part-intro" class="">
      <div id="screen1Back" class="d-none d-md-block"></div>
      <div id="screen1Front"></div>
      <div id="introTextDiv" class="d-none d-md-block Standard-Font position-absolute bottom-0">
        <div id="introTextTheme" class="Standard-Font">CandleClaw</div>
        <div id="introText" class="Standard-Font">Jesteśmy grupą zajmującą produkcją oraz malowaniem figurek na zlecenie, za równo fantsy jak i sci-fi.</div>
      </div>
      <div id="introTextDiv-v2" class="d-block d-md-none Standard-Font position-absolute top-0">
        <div id="introTextTheme" class="Standard-Font">CandleClaw</div>
        <div id="introText" class="Standard-Font">Jesteśmy grupą zajmującą produkcją oraz malowaniem figurek na zlecenie, za równo fantsy jak i sci-fi.</div>
      </div>
    </div>

    <div id="part-showcase" class="part_margin">
      <div id="showcaseImgs" class="d-none d-lg-block">
        <div id="showcaseLine">
          <div id="ScI0" class="showcaseImg"></div>
          <div id="ScI1" class="showcaseImg"></div>
          <div id="ScI2" class="showcaseImg"></div>
          <div id="ScI3" class="showcaseImg"></div>
        </div>
        <div class="showcaseCover"></div>
        <div id="showcaseController">
          <div id="ScM0" class="dotMark ScMON"></div>
          <div id="ScM1" class="dotMark"></div>
          <div id="ScM2" class="dotMark"></div>
          <div id="ScM3" class="dotMark"></div>
        </div>
      </div>
      <div id="showcaseTextDiv" class="d-none d-lg-block">
        <div id="" class="showcaseTextTheme Standard-Font">Projekty</div>
        <div id="" class="showcaseText Standard-Font">Tu zobaczysz kilka naszych pokazowych projektów, a w Galeri możesz obejrzeć naszą całą kolekcje.</div>
        <a href="<?= $websiteLink; ?>/galery.php">
          <div id="" class="showcaseGalleryButton Standard-Font">Galeria</div>
        </a>
      </div>
      <div id="showcaseTextDiv-v2" class="d-block d-lg-none">
        <div id="" class="showcaseTextTheme Standard-Font">Projekty</div>
        <div id="" class="showcaseText Standard-Font">Tu zobaczysz kilka naszych pokazowych projektów, a w Galeri możesz obejrzeć naszą całą kolekcje.</div>
        <a href="<?= $websiteLink; ?>/galery.php">
          <div id="" class="showcaseGalleryButton Standard-Font">Galeria</div>
        </a>
      </div>
    </div>

    <div id="part-discord" class="part_margin">
      <div id="con3BG"></div>
      <div id="con3BG1"></div>
      <div id="con3BG2"></div>
      <div id="discord-content">
        <div id="disDiv">
          <div id="disBox" class="d-none d-xl-block">
            <div id="disBG"></div>
            <div id="disPopupShadow"></div>
            <div id="disPopup">
              <a href="<?= $websiteLink; ?>/discord.php" target="_blank">
                <div id="disPopupBR">
                  <div id="disPopupBRText">Połącz</div>
                </div>
              </a>
              <div id="disPopupBL">
                <div id="disPopupBLText">Anuluj</div>
              </div>
            </div>
            <div id="disPlaceHolder">PLACE HOLDER</div>
          </div>

          <div id="disTextDiv" class="d-none d-xl-block">
            <div class="disTextTheme Standard-Font">Nasz Discord</div>
            <div class="disText Standard-Font">
              Potrzebujesz więcej informacji na temat naszych projektów albo chcesz dowiedzieć się trochę więcej o naszej grupie?
              <br><br>
              Dołacz do nas na discord!
            </div>
            <a href="<?= $websiteLink; ?>/discord.php">
              <div class="disButton Standard-Font">Serwer Discord</div>
            </a>
          </div>

          <div id="disTextDiv-v2" class="d-block d-xl-none">
            <div class="disTextTheme Standard-Font">Nasz Discord</div>
            <div class="disText Standard-Font">
              Potrzebujesz więcej informacji na temat naszych projektów albo chcesz dowiedzieć się trochę więcej o naszej grupie?
              <br><br>
              Dołacz do nas na discord!
            </div>
            <a href="<?= $websiteLink; ?>/discord.php">
              <div class="disButton Standard-Font">Serwer Discord</div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div id="part-contact" class="part_margin row">
      <div id="contactTextDiv">
        <div id="contactTextTheme" class="Standard-Font">Kontakt</div>
        <div id="contactText" class="Standard-Font">Możliwe sposoby skontaktowania się z nami</div>
      </div>
      <div id="socialCards" class="row">
        <div class="col-12 col-lg-6">
          <div id="card-Kemir" class="socialCard" style="position: relative;">
            <div class="cardAvatar"></div>
            <div class="cardInfo">
              <div class="cardDiscord Standard-Font Card-Font">Kemir#XXXX</div>
              <div class="cardEmail Standard-Font Card-Font">Kemir@fakeEmail.com</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div id="card-Portoli" class="socialCard" style="position: relative;">
            <div class="cardAvatar"></div>
            <div class="cardInfo">
              <div class="cardDiscord Standard-Font Card-Font">Portoli#XXXX</div>
              <div class="cardEmail Standard-Font Card-Font">Portoli@fakeEmail.com</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  require_once "element-Footer.php";
  ?>

  <svg style="display:none">
    <defs>
      <filter id="blur">
        <feTurbulence baseFrequency="0.02" numOctaves="3" seed="0" />
        <feDisplacementMap in="SourceGraphic" in2="noise" scale="1" result="wave" />
        <feGaussianBlur in="wave" stdDeviation="10" result="blur" />
      </filter>
      <filter id="shake0">
        <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" seed="0" />
        <feDisplacementMap id="displacemant" in="SourceGraphic" in2="noise" scale="3" result="wave" />
      </filter>
      <filter id="shake1">
        <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" seed="1" />
        <feDisplacementMap id="displacemant" in="SourceGraphic" in2="noise" scale="3" result="wave" />
      </filter>
      <filter id="shake2">
        <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" seed="2" />
        <feDisplacementMap id="displacemant" in="SourceGraphic" in2="noise" scale="2.5" result="wave" />
      </filter>
      <filter id="shake3">
        <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" seed="3" />
        <feDisplacementMap id="displacemant" in="SourceGraphic" in2="noise" scale="4" result="wave" />
      </filter>
    </defs>
  </svg>

  <script language="JavaScript" type="text/javascript" src="jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="module" src="homepage.js"></script>
  <!-- Code injected by live-server -->
  <script type="text/javascript">
    // <![CDATA[  <-- For SVG support
    if ("WebSocket" in window) {
      (function() {
        function refreshCSS() {
          var sheets = [].slice.call(document.getElementsByTagName("link"));
          var head = document.getElementsByTagName("head")[0];
          for (var i = 0; i < sheets.length; ++i) {
            var elem = sheets[i];
            head.removeChild(elem);
            var rel = elem.rel;
            if (
              (elem.href && typeof rel != "string") ||
              rel.length == 0 ||
              rel.toLowerCase() == "stylesheet"
            ) {
              var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, "");
              elem.href =
                url +
                (url.indexOf("?") >= 0 ? "&" : "?") +
                "_cacheOverride=" +
                new Date().valueOf();
            }
            head.appendChild(elem);
          }
        }
        var protocol =
          window.location.protocol === "http:" ? "ws://" : "wss://";
        var address =
          protocol + window.location.host + window.location.pathname + "/ws";
        var socket = new WebSocket(address);
        socket.onmessage = function(msg) {
          if (msg.data == "reload") window.location.reload();
          else if (msg.data == "refreshcss") refreshCSS();
        };
        console.log("Live reload enabled.");
      })();
    }
    // ]]>
  </script>
</body>

</html>