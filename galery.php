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
  <link rel="stylesheet" href="galery.css" />
  <link rel="stylesheet" href="element-Menu.css" />
  <link rel="stylesheet" href="element-Footer.css" />

  <link rel="preload" href="img/logo/png/CWV0.png" as="image" />
</head>

<body>

  <?php
  require_once "element-Menu.php";
  ?>

  <div id="container" class="container">
    <img id="galeryBackImg" src="img/background/Galery1.png" alt="">

    <div id="galeryTextDiv" class="">
      <div id="galeryTextTheme" class="Standard-Font">Galeria</div>
      <div id="galeryText" class="Standard-Font">Nasza baza zdjęć zawierająca wszystkie nasze przeszłe projekty</div>
    </div>
    <div id="galery" class="row col-md-12 justify-content-md-center" data-masonry='{"percentPosition": true}'>
      <?php
      $imgArr = array();
      $dirName = "img/galery/";
      $images = glob($dirName . "*.png");
      foreach ($images as $image) {
        $imgArr[] = $image;
      }
      $picName = array();
      $picNO = array();
      for ($j = 0; $j < 9; $j++) {
        $i = 0;
        while (isset($imgArr[$i])) {
          preg_match("/(?<=-).*(?=\.)/i", $imgArr[$i], $picName);
          preg_match("/(?<=Z).*(?=-)/i", $imgArr[$i], $picNO);
      ?>
          <div class="cardDiv col-sm-6 col-md-4 col-lg-3 mb-3 py-3">
            <img src="<?= $imgArr[$i]; ?>" class="card img-fluid">
            <div class="cardHoverInfo">
              <h1 class="imgNames">
                <?= $picName[0] . "#" . $picNO[0]; ?>
              </h1>
            </div>
          </div>
      <?php
          $i++;
        }
      }
      ?>
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
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="module" src="galery.js"></script>

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