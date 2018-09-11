<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/witter1.png";
  $imageList[1] = "images/witter2.png";
  $imageList[2] = "images/witter3.png";
  $imageList[3] = "images/witter4.png";
  $imageList[4] = "images/witter5.png";
  $imageList[5] = "images/witter6.png";
  $altList[0] = "Witter - Homepage";
  $altList[1] = "Witter - Weets";
  $altList[2] = "Witter - User Page";
  $altList[3] = "Witter - Users";
  $altList[4] = "Witter - Search";
  $altList[5] = "Witter - Search";
  $projectID = "witter";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Projects | Witter</title>
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
          <h3><strong>Witter</strong></h3>
          <h5><strong>CS126: Design of Information Structures Coursework</strong></h5>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="Java">Java</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> February 2017 - March 2017</p>
        <p><strong>Mark:</strong> 85/100</p>
        <p>Implemented various data structures to store Users, Weets and Folowers for
          a fictional Twitter clone called 'Witter'. Implemented a Red-Black tree,
          Minimum heap, Hash table and Linked list.</p>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>

      <div id="implementation" class="section scrollspy">
        <h5>User Store</h5>
        <ul class="browser-default p-l-1 m-b-2">
          <li>Stores a collection of users.</li>
          <li>Operations include insertion, retrieval and searching.</li>
          <li>Implemented using two Red-Black trees sorted by ID and Date.</li>
        </ul>
        <h5>Weet Store</h5>
        <ul class="browser-default p-l-1 m-b-2">
          <li>Stores a collection of weets.</li>
          <li>Operations include insertion, retrieval and searching.</li>
          <li>Implemented using two Red-Black trees sorted by ID and Date.</li>
        </ul>
        <h5>Follower Store</h5>
        <ul class="browser-default p-l-1">
          <li>Stores a collection of follower relations between two users.</li>
          <li>Operations include insertion, retrieval, intersection and searching.</li>
          <li>Implemented using a combination of Hash tables, Red Black trees and Singly linked lists.</li>
        </ul>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[1], $altList[1]); ?>

      <div class="divider"></div>

      <div id="marking" class="section scrollspy">
        <h4>Marking</h4>
        <p>For this coursework I recieved a score of 85/100.</p>
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
          <li><a href="#implementation">Implementation</a></li>
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
