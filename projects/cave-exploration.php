<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/diss1.png";
  $imageList[1] = "images/diss2.png";
  $imageList[2] = "images/diss3.png";
  $imageList[3] = "images/diss4.png";
  $imageList[3] = "images/diss5.png";
  $imageList[3] = "images/diss6.png";
  $altList[0] = "";
  $altList[1] = "";
  $altList[2] = "";
  $altList[3] = "";
  $altList[4] = "";
  $altList[5] = "";
  $projectID = "cave-exploration";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Projects - Cave Exploration</title>
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
          <h3><strong>Using Swarm AI to Map a Cave Network</strong></h3>
          <h5><strong>CS310: Dissertation</strong></h5>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="C++">C++</div>
          <div class="chip language-chip" data-language="OpenGL">OpenGL</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> December 2018 - April 2019</p>
        <p>Cave exploration is dangerous and time-consuming. This project
           demonstrates how swarm AI could be used in a group of autonomous
           flying drones to navigate and explore a cave as efficiently as
           possible. The project also includes realistic cave environment
           generation.</p>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[3], $altList[3]); ?>

      <div class="divider"></div>

      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li><strong>Realistic cave environment generation</strong> - Starting from Simplex noise, a cellular automata and several flood fills create unique, realistic cave environments for the simulation to run on.</li>
          <li><strong>Individual drone searching</strong> - A single drone can successfully explore every cell in the cave using a semi-efficient approach.</li>
          <li><strong>Multiple drone searching</strong> - Multiple drones can work together to more efficiently explore the cave by communicating information between them and avoiding exploring the same locations.</li>
          <li><strong>Visualisation</strong> - View the process of the drone's exploration. Ability to see what cells the drone has explored, potential frontier cells and the next target cell.</li>
          <li><strong>Statistics</strong> - View statistics of each drone including the distance they have travelled and percentage of the cave they have explored.</li>
        </ul>
      </div>

      <div class="divider"></div>

      <?php generateScreenshots($imageList, $altList); ?>

      <div class="divider"></div>

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
