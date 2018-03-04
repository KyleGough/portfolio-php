<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "screenshots.php";
  $imageList[0] = "images/bsplit-homepage.png";
  $imageList[1] = "images/bsplit-billview.png";
  $imageList[2] = "images/bsplit-newbill.png";
  $imageList[3] = "images/bsplit-groupview.png";
  $imageList[4] = "images/bsplit-newgroup.png";
  $altList[0] = "BSplit - Homepage";
  $altList[1] = "BSplit - Bill View";
  $altList[2] = "BSplit - New Bill";
  $altList[3] = "BSplit - Group View";
  $altList[4] = "BSplit - New Group";
  $projectID = "bsplit";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>BSplit</title>
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
          <h3><strong>BSplit - Bill splitter application</strong></h3>
          <h5><strong>CS139: Coursework</strong></h5>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="HTML">HTML</div>
          <div class="chip language-chip" data-language="CSS">CSS</div>
          <div class="chip language-chip" data-language="SQL">SQL</div>
          <div class="chip language-chip" data-language="SQLite">SQLite</div>
          <div class="chip language-chip" data-language="PHP">PHP</div>
          <div class="chip language-chip" data-language="JavaScript">JavaScript</div>
          <div class="chip language-chip" data-language="jQuery">jQuery</div>
          <div class="chip language-chip" data-language="Bootstrap">Bootstrap</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> February 2017 - March 2017</p>
        <p><strong>Mark:</strong> 97/100</p>
        <p>BSplit is a web application that allows registered users to split payments between
          parties. The app allows users to create and settle payments between parties.
          The app's dashboard utilises AJAX requests to prevent web page reloading to enchance
          user experience. Dashboard and Email notifications are sent when a new bill or group
          is created.</p>
        <div class="chip"><a class="project-link" href="projects.php">View All Projects</a></div>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>
      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>User Registration.</li>
          <li>User authentication.</li>
          <li>Create a group of existing users by email address.</li>
          <li>Create a bill for a group.</li>
          <li>Create a bill for any set of users.</li>
          <li>Mostly AJAX content to enchance user experience.</li>
          <li>Ability to settle a payment in one or multiple payments.</li>
          <li>Displays the status of bills.</li>
          <li>Notification system for new unseen bills.</li>
          <li>Email notifications for new groups and bills.</li>
          <li>Search functionality for bills and groups.</li>
        </ul>
      </div>
      <div class="divider"></div>

      <?php generateImage($imageList[1], $altList[1]); ?>

      <div class="divider"></div>

      <div id="marking" class="section scrollspy">
        <h4>Marking</h4>
        <p>For this coursework I recieved a score of 97/100.</p>
      </div>

      <div class="divider"></div>

      <?php generateScreenshots($imageList, $altList); ?>

      <?php include "pager.php"; ?>

    </div>
    <div class="col hide-on-small-only m2 l2">
      <div id="side-contents" data-target="contents">
        <ul class="section table-of-contents center">
          <li><a href="#overview">Overview</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#marking">Marking</a></li>
          <li><a href="#screenshots">Screenshots</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include "../footer.php"; ?>

</body>
</html>
