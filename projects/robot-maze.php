<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/robotmaze1.png";
  $imageList[1] = "images/robotmaze2.png";
  $imageList[2] = "images/robotmaze3.png";
  $altList[0] = "Robot Maze";
  $altList[1] = "Robot Maze";
  $altList[2] = "Robot Maze";
  $projectID = "robot-maze";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Robot Maze</title>
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
        <h3><strong>Robot Maze</strong></h3>
        <h5><strong>CS118: Programming for Computer Scientists Coursework</strong></h5>
        <div class="row center m-t-2">
          <div class="chip language-chip" data-language="Java">Java</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <p><strong>Date:</strong> October 2016 - December 2016</p>
        <p>Programmed a controller for a robot in a maze which can detect adjacent
          cells in the maze and uses its current position and state to determine
          the direction it will move. Algorithms and structures such as: Depth-first
          graph search, Trémaux's algorithms and Stacks were used to traverse the
          maze. The controller was made to work on perfect mazes and ones with single
          or multiple loops. The final Grand Finale controller used data from the
          first run to traverse the maze more efficiently the second time. This
          project was my first experience using Java.</p>
        <div class="chip"><a class="project-link" href="projects.php">View All Projects</a></div>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4 ">
        <?php generateImage($imageList[0], $altList[0]); ?>
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
          <li>Created a controller which can succesfully find the end of the maze using Depth-first graph search implemented using a Stack.</li>
          <li>Modified the controller to work on single and multiple looped mazes using Trémaux's algorithm.</li>
          <li>After the first run the controller completes the maze in the most efficient route possible for perfect mazes.</li>
          <li>Completes the maze with 0 collisions.</li>
          <li>Achieved 100% on the coursework.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4y">
        <?php generateImage($imageList[1], $altList[1]); ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <h4>Marking</h4>
        <p>For this coursework I recieved a score of 100/100.</p>
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
