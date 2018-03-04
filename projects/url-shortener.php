<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/url-shortener1.png";
  $imageList[1] = "images/url-shortener2.png";
  $imageList[2] = "images/url-shortener3.png";
  $altList[0] = "URL Shortener";
  $altList[1] = "URL Shortener";
  $altList[2] = "URL Shortener";
  $projectID = "url-shortener";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>URL Shortener</title>
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
          <h3><strong>URL Shortener</strong></h3>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="NodeJS">Node.js</div>
          <div class="chip language-chip" data-language="MongoDB">MongoDB</div>
          <div class="chip language-chip" data-language="HTML">HTML</div>
          <div class="chip language-chip" data-language="CSS">CSS</div>
          <div class="chip language-chip" data-language="JavaScript">JavaScript</div>
          <div class="chip language-chip" data-language="jQuery">jQuery</div>
          <div class="chip language-chip" data-language="Materialize">Materialize</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> April 2017</p>
        <p>A URL shortening tool creating using the Node.js framework, Express.js
          for routing GET and POST requests and MongoDB to store URLs. The project
          is my first using all three of these technologies. Long URLs are stored
          in the database and the ID is encoded and used as the short URL.</p>
        <div class="chip"><a class="project-link" href="projects.php">View All Projects</a></div>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>
      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Simple URL shortener.</li>
          <li>AJAX request to send URL and get link counter.</li>
          <li>Express.js to handle routing for GET and POST requests.</li>
          <li>Live counter on homepage of how many links have been created.</li>
          <li>Prevents shortening links from itself.</li>
          <li>Will not duplicate URLs.</li>
          <li>Copy to clipboard feature for the short URL.</li>
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
