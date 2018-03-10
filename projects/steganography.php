<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
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

<main>
<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4 center">
        <h3><strong>Steganography Embedder and Extractor</strong></h3>
        <div class="row center m-t-2">
          <div class="chip language-chip" data-language="C#">C#</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <p><strong>Date:</strong> December 2016 - January 2017</p>
        <p>Supports 20 sorting algorithms and 18 types of start data. Options to view
          and compare two algorithms simultaneously, change size of the datasets,
          range of numbers in the dataset and delay. Provides real-time visualisation
          of the movement of data and swapping of elements in the datasets. This
          software can serve as a learning tool for people who want to understand how
          different sorting algorithms operate and in what circumstances one algorithm
          may be a better choice. The statistics provide an in-depth evaluation of how
          well an algorithm has performed on the unsorted data. Served as a learning
          tool for myself for understanding different sorting algorithms and their
          applications due to their characteristics.</p>
        <div class="chip github-chip"><a class="project-link" href="https://github.com/KyleGough/png-steganography" target="_blank"><img src="images/github-icon.png" alt="Github Logo">Github</a></div>
      </div>
    </div>
  </div>
</div>


<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s6 m-v-4">
        <?php generateImage($imageList[0], $altList[0]); ?>
      </div>
      <div class="col s6 m-v-4">
        <?php generateImage($imageList[1], $altList[1]); ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Embed any file type within PNG image files.</li>
          <li>Extract hidden files from PNG image files.</li>
          <li>Uses Least Significant Bit algorithms (1 bit or 2 bits).</li>
          <li>Analyses potential space in the carrier image that can contain a message file.</li>
          <li>Changes only the least significant bit of the carrier images, so changes are not detectable by the human eye.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <?php generateScreenshots($imageList, $altList); ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <?php include "./common/pager.php"; ?>
      </div>
    </div>
  </div>
</div>
</main>

<?php include "../footer.php"; ?>

</body>
</html>
