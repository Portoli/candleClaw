<?php
require_once "siteLinkControl.php";
$fileLink = $_SERVER['REQUEST_URI'];
$fileNO = 0;

switch ($fileLink) {
  case "/candleClaw/galery.php":
    $fileNO = 1;
    break;
  case "/candleClaw/contact.php":
    $fileNO = 3;
    break;
}
?>
<div id="menuContainer">
  <div id="menuBar">
    <div id="menuLogoContainer">
      <div id="menuLogo"></div>
      <div id="menuLogoLine"></div>
      <div id="menuLogoName">
        <a href="<?= $websiteLink; ?>/homepage.php">
          <div id="logoText" class="Standard-Font d-none d-sm-block">CandleClaw</div>
          <div id="logoText" class="Standard-Font d-block d-sm-none">CClaw</div>
        </a>
      </div>
    </div>
    <div id="menuOptionsDiv">
      <a href="<?= $websiteLink; ?>/galery.php">
        <div class="Standard-Font option-Font d-none d-md-block" <?= $fileNO == 1 ? 'style="text-decoration: underline;"' : ""; ?>>Galeria</div>
      </a>
      <a href="<?= $websiteLink; ?>/galery.php">
        <div class="icon-Galery menu-Icon option-Font d-block d-md-none" <?= $fileNO == 1 ? 'style="filter:grayscale(100%);"' : ""; ?>></div>
      </a>
      <a href="<?= $websiteLink; ?>/discord.php">
        <div class="Standard-Font option-Font d-none d-md-block">Discord</div>
      </a>
      <a href="<?= $websiteLink; ?>/discord.php">
        <div class="icon-Discord menu-Icon option-Font d-block d-md-none"></div>
      </a>
      <a href="<?= $websiteLink; ?>/contact.php">
        <div class="Standard-Font option-Font d-none d-md-block" <?= $fileNO == 3 ? 'style="text-decoration: underline;"' : ""; ?>>Kontakt</div>
      </a>
      <a href="<?= $websiteLink; ?>/contact.php">
        <div class="icon-Contact menu-Icon option-Font d-block d-md-none" <?= $fileNO == 3 ? 'style="filter:grayscale(100%);"' : ""; ?>></div>
      </a>
    </div>
  </div>
</div>