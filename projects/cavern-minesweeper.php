<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/cavern-minesweeper1.png";
  $imageList[1] = "images/cavern-minesweeper2.png";
  $imageList[2] = "images/cavern-minesweeper3.png";
  $imageList[3] = "images/cavern-minesweeper4.png";
  $altList[0] = "Cavern Minesweeper";
  $altList[1] = "Cavern Minesweeper";
  $altList[2] = "Cavern Minesweeper";
  $altList[3] = "Cavern Minesweeper";
  $projectID = "cavern-minesweeper";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Cavern Minesweeper</title>
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
          <h3><strong>Cavern Minesweeper</strong></h3>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="Ruby">Ruby</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> March 2017</p>
        <p>The project served as a tool for teaching me Ruby. It is my first Ruby program.
          Cavern Minesweeper is based off of Minesweeper but with tiered ores (mines)
          which can only be mined if the player has levelled up enough. The player can
          level up by mining ores of lower or the same tier as the player.</p>
        <div class="chip github-chip"><a class="project-link" href="https://github.com/KyleGough/cavern-minesweeper" target="_blank"><img src="images/github-icon.png" alt="Github Logo">Github</a></div>
        <div class="chip"><a class="project-link" href="projects.php">View All Projects</a></div>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>
      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Three playable difficulties.</li>
          <li>Tiered Ores which damage the player if their level is not sufficient enough.</li>
          <li>Flood Fill algorithm for revealing tiles.</li>
          <li>Shoes GUI.</li>
        </ul>
      </div>
      <div class="divider"></div>

      <?php generateImage($imageList[1], $altList[1]); ?>

      <div class="divider"></div>

      <?php generateScreenshots($imageList, $altList); ?>

      <?php include "./common/pager.php"; ?>

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
