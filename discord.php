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
  <link rel="stylesheet" href="discord.css" />
  <link rel="stylesheet" href="element-Menu.css" />
  <link rel="stylesheet" href="element-Footer.css" />

  <link rel="preload" href="img/logo/png/CWV0.png" as="image" />
</head>

<body>

  <?php
  require_once "element-Menu.php";
  ?>

  <div id="container" class="container">
    <div id="discordDiv" class="row col-md-12 justify-content-md-center">
      <div class="col-sm-12 col-lg-12 mb-12 p-3">
        <div id="discordText" style="">
          FAKE DISCORD
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
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- Code injected by live-server -->
  <script type="text/javascript">
  </script>
</body>

</html>