<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/todolist1.png";
  $imageList[1] = "images/todolist2.png";
  $imageList[2] = "images/todolist3.png";
  $imageList[3] = "images/todolist4.png";
  $imageList[4] = "images/todolist5.png";
  $altList[0] = "To Do List - Homepage";
  $altList[1] = "To Do List - Registration";
  $altList[2] = "To Do List - List Selection";
  $altList[3] = "To Do List - List";
  $altList[4] = "To Do List - Log In";
  $projectID = "todo-list";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>To Do List</title>
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
          <h3><strong>To Do List</strong></h3>
          <h5><strong>CS139: Web Development Technologies Lab Work</strong></h5>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="HTML">HTML</div>
          <div class="chip language-chip" data-language="CSS">CSS</div>
          <div class="chip language-chip" data-language="SQL">SQL</div>
          <div class="chip language-chip" data-language="SQLite">SQLite</div>
          <div class="chip language-chip" data-language="PHP">PHP</div>
          <div class="chip language-chip" data-language="JavaScript">JavaScript</div>
          <div class="chip language-chip" data-language="jQuery">jQuery</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> January 2017 - February 2017</p>
        <p><strong>Partners:</strong> Samuel Bor</p>
        <p>Website Application for a To Do List where users can register and login
          online and view their stored lists. Users can create and edit their lists
          and separate them into categories. The project integrates many web
          development technologies and is programmed to be protected from SQL
          injections and XSS.</p>
        <div class="chip"><a class="project-link" href="projects.php">View All Projects</a></div>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>

      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>User registration.</li>
          <li>View selection of lists.</li>
          <li>View items in a list.</li>
          <li>Mark items in a list as complete.</li>
          <li>Create a new list.</li>
          <li>Add new item to a list.</li>
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
