<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/rscbot1.png";
  $imageList[1] = "images/rscbot2.png";
  $imageList[2] = "images/rscbot3.png";
  $imageList[3] = "images/rscbot4.png";
  $imageList[4] = "images/rscbot5.png";
  $imageList[5] = "images/rscbot6.png";
  $altList[0] = "RSCBot - Example hourly RSS news briefing";
  $altList[1] = "RSCBot - Favourites Selection";
  $altList[2] = "RSCBot - Example shares in issue query";
  $altList[3] = "RSCBot - Example sector news query";
  $altList[4] = "RSCBot - More example queries";
  $altList[5] = "RSCBot - Help modal";
  $projectID = "rscbot";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Projects - RSCBot</title>
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
          <h3><strong>RSCBot</strong></h3>
          <h5><strong>CS261: Software Engineering Group Project</strong></h5>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="HTML">HTML</div>
          <div class="chip language-chip" data-language="CSS">CSS</div>
          <div class="chip language-chip" data-language="JavaScript">JavaScript</div>
          <div class="chip language-chip" data-language="jQuery">jQuery</div>
          <div class="chip language-chip" data-language="Materialize">Materialize</div>
          <div class="chip language-chip" data-language="SQL">SQL</div>
          <div class="chip language-chip" data-language="MySQL">MySQL</div>
          <div class="chip language-chip" data-language="PHP">PHP</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> February 2018 - March 2018</p>
        <p>A specialised, personalisable Trader ChatBot that can fetch data and current news on stocks
          and sectors from the FTSE 100 index. Our ChatBot communicates with the user in a natural way,
          and has been designed to identify and adapt to the user’s main interests in the stock market,
          making for a more personal trading experience.</p>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[2], $altList[2]); ?>

      <div class="divider"></div>

      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Fast and responsive answers to stock market queries.</li>
          <li>Hourly news briefings from a selection of the user's favourite companies and sectors.</li>
          <li>Ability to select favourite companies and sectors.</li>
          <li>Poll rate choice for each individual company and sector.</li>
          <li>Extensive list of available queries.</li>
          <li>AI to detect possible interests to the user.</li>
          <li>Sentiment analysis on every news story recieved.</li>
          <li>Currency conversion capabilities for USD, GBP and Euro.</li>
          <li>Text and Voice input.</li>
          <li>Textual, Graphic and Audio output.</li>
        </ul>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>

      <div id="queries" class="section scrollspy">
        <h4>Possible queries include but are not limited to:</h4>
        <ul class="browser-default p-l-1">
          <li>Share Price</li>
          <li>Point Change</li>
          <li>Percentage Change</li>
          <li>Bid, Offer</li>
          <li>Open, Close</li>
          <li>Low, High</li>
          <li>Revenue</li>
          <li>EPS</li>
          <li>Volume, Average Volume</li>
          <li>Market Cap</li>
          <li>PE Ratio</li>
          <li>Shares in Issue</li>
          <li>Current News</li>
          <li>Performance</li>
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
          <li><a href="#queries">Queries</a></li>
          <li><a href="#screenshots">Screenshots</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include "../footer.php"; ?>

</body>
</html>
