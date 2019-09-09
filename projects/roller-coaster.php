<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/coaster1.png";
  $imageList[1] = "images/coaster2.png";
  $imageList[2] = "images/coaster3.png";
  $imageList[3] = "images/coaster4.png";
  $altList[0] = "First-person view from the last cart.";
  $altList[1] = "Top section of the track as the carts navigate a turn.";
  $altList[2] = "First-person view from the last cart.";
  $altList[3] = "Top section of the track as the cart ascends the lift-hill.";
  $projectID = "roller-coaster";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Projects - Roller Coaster</title>
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
          <h3><strong>OpenGL Roller Coaster</strong></h3>
          <h5><strong>CS324: Computer Graphics Coursework</strong></h5>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="C++">C++</div>
          <div class="chip language-chip" data-language="OpenGL">OpenGL</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> December 2018 - January 2019</p>
        <p>A simulation of a 3-car roller coaster which traverses a small track
           featuring a lift hill, drop, loop-the-loop and turns. The coaster can
           be viewed from a first-person perspective in each of the carts, as
           well as additional views that follow the carts round the track.</p>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>

      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Looping track with lift-hill, drop, loop-the-loop and turns.</li>
          <li>Texture Mapping.</li>
          <li>Skybox.</li>
          <li>First-person camera view.</li>
          <li>Overview camera mode.</li>
          <li>Rotating cart wheels.</li>
          <li>Lighting.</li>
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
