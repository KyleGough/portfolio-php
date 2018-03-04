<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/mastermind1.png";
  $imageList[1] = "images/mastermind2.png";
  $altList[0] = "Mastermind";
  $altList[1] = "Mastermind";
  $projectID = "mastermind";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Mastermind</title>
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
          <h3><strong>Mastermind</strong></h3>
          <h5><strong>CS256: Functional Programming</strong></h5>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="Haskell">Haskell</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> October 2017</p>
        <p>A Haskell console program that simulates a player vs computer game
          of the board-game Mastermind. The computer was made to solve a game in 5
          moves or less utilising Knuth's mastermind algorithm.</p>
        <div class="chip"><a class="project-link" href="projects.php">View All Projects</a></div>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>
      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Ability to play a game of mastermind against a computer.</li>
          <li>Computer solves game in 5 moves or less guaranteed.</li>
          <li>Ability to choose number of pegs.</li>
        </ul>
      </div>
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
