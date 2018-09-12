<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/portfolio1.png";
  $imageList[1] = "images/portfolio2.png";
  $imageList[2] = "images/portfolio3.png";
  $altList[0] = "Portfolio";
  $altList[1] = "Portfolio";
  $altList[2] = "Portfolio";
  $projectID = "portfolio";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Projects - Portfolio</title>
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
          <h3><strong>Portfolio</strong></h3>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="HTML">HTML</div>
          <div class="chip language-chip" data-language="CSS">CSS</div>
          <div class="chip language-chip" data-language="Sass">Sass</div>
          <div class="chip language-chip" data-language="PHP">PHP</div>
          <div class="chip language-chip" data-language="JavaScript">JavaScript</div>
          <div class="chip language-chip" data-language="jQuery">jQuery</div>
          <div class="chip language-chip" data-language="Bootstrap">Bootstrap</div>
          <div class="chip language-chip" data-language="Materialize">Materialize</div>
        </div>

      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> December 2016 - Current</p>
        <p>Website created to showcase my programming projects and learning progression
          with different technologies. The website has been continuously updated
          with new technologies learnt during university and in my spare time including:
          PHP, Bootstrap, JavaScript, jQuery and Materialize CSS.</p>
        <div class="chip github-chip"><a class="project-link" href="https://github.com/KyleGough/portfolio" target="_blank"><img src="images/github-icon.png" alt="Github Logo">Github</a></div>
      </div>
      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>
      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Individual project pages.</li>
          <li>Update page containing details of website improvements and fixes.</li>
          <li>About page listing my skills with various technologies.</li>
          <li>Project page listing all previous university projects and other projects completed in my spare time.</li>
        </ul>
      </div>
      <div class="divider"></div>

      <?php generateImage($imageList[1], $altList[1]); ?>

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
