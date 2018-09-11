<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/route1.png";
  $imageList[1] = "images/route2.png";
  $imageList[2] = "images/route3.png";
  $imageList[3] = "images/route4.png";
  $altList[0] = "Delivery Route Planner";
  $altList[1] = "Delivery Route Planner";
  $altList[2] = "Delivery Route Planner";
  $altList[3] = "Delivery Route Planner";
  $altList[4] = "Delivery Route Planner";
  $projectID = "route-planner";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Projects | Delivery Route Planner</title>
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
        <h3><strong>Delivery Route Planner</strong></h3>
        <h5><strong>A-Level Computing Coursework</strong></h5>
        <div class="row center m-t-2">
          <div class="chip language-chip" data-language="C#">C#</div>
          <div class="chip language-chip" data-language="SQL">SQL</div>
          <div class="chip language-chip" data-language="Access SQL">Access SQL</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <p><strong>Date:</strong> December 2015 - March 2016</p>
        <p>Created software in C# which creates an efficient route between multiple
          delivery locations. Used SQL to store and query data on products, clients
          and their deliveries. Produced a report which communicates the route, all
          items in the deliveries and the estimated time. Used graph algorithms such
          as Dijkstra's and Nearest Neighbour with 2-Opt to optimise the route.</p>
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
          <li>Creates an efficient route for a number of selected deliveries.</li>
          <li>Utilises database to store client, delivery, and product data.</li>
          <li>Ability to View/Add/Edit/Delete client, delivery and product data.</li>
          <li>Creates a report including delivery order, total items and estimated time.</li>
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
        <?php generateScreenshots($imageList, $altList); ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
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
