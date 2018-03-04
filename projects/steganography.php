<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "screenshots.php";
  $imageList[0] = "images/steg1.png";
  $imageList[1] = "images/steg2.png";
  $imageList[2] = "images/steg3.png";
  $altList[0] = "Steganography - Embed View";
  $altList[1] = "Steganography - Embed View";
  $altList[2] = "Steganography - Extract View";
  $projectID = "steganography";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Steganography</title>
</head>

<body>

<?php
  include_once("../analyticstracking.php");
  include_once("../nav.php");
?>

<div class="container">
  <div class="row">
    <div id="contents" class="col s12 m10 l10 m-t-2">

      <div class="section">
        <div class="row center">
          <h3><strong>Steganography Embedder and Extractor</strong></h3>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="Java">Java</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> December 2016 - January 2017</p>
        <p>Steganography tool for hiding and extracting files within PNG files.
          Uses the least significant bit algorithm to embed message files. Analyses
          the available space within the carrier image. Detects the extracted
          file's MIME type.</p>
        <div class="chip github-chip"><a class="project-link" href="https://github.com/KyleGough/png-steganography" target="_blank"><img src="images/github-icon.png" alt="Github Logo">Github</a></div>
        <div class="chip"><a class="project-link" href="projects.php">View All Projects</a></div>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>
      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Embed any file type within PNG image files.</li>
          <li>Extract hidden files from PNG image files.</li>
          <li>Uses Least Significant Bit algorithms (1 bit or 2 bits).</li>
          <li>Analyses potential space in the carrier image that can contain a message file.</li>
          <li>Changes only the least significant bit of the carrier images, so changes are not detectable by the human eye.</li>
        </ul>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[1], $altList[1]); ?>

      <div class="divider"></div>

      <?php generateScreenshots($imageList, $altList); ?>

      <?php include "pager.php"; ?>

    </div>
    <div class="col hide-on-small-only m2 l2">
      <div id="side-contents" data-target="contents">
        <ul class="section table-of-contents center">
          <li><a href="#overview">Overview</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#screenshots">Screenshots</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include "../footer.php"; ?>

</body>
</html>
