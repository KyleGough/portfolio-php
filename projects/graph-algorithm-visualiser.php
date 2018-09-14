<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/graph-visualiser1.png";
  $imageList[1] = "images/graph-visualiser2.png";
  $imageList[2] = "images/graph-visualiser3.png";
  $imageList[3] = "images/graph-visualiser4.png";
  $imageList[4] = "images/graph-visualiser5.png";
  $imageList[5] = "images/graph-visualiser6.png";
  $altList[0] = "Graph Algorithm Visualiser";
  $altList[1] = "Graph Algorithm Visualiser";
  $altList[2] = "Graph Algorithm Visualiser";
  $altList[3] = "Graph Algorithm Visualiser";
  $altList[4] = "Graph Algorithm Visualiser";
  $altList[5] = "Graph Algorithm Visualiser";
  $projectID = "graph-algorithm-visualiser";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Projects - Graph Algorithm Visualiser</title>
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
          <h3><strong>Graph Algorithm Visualiser</strong></h3>
        </div>
        <div class="row center">
          <div class="chip language-chip" data-language="JavaScript">JavaScript</div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="overview" class="section scrollspy">
        <p><strong>Date:</strong> April 2017</p>
        <p>A visualiser which displays the process of graph algorithms on complete
          graphs such as: Prim's, Kruskal's, Graham Scan, Nearest Neighbour and 2-Opt.
          The project was primarily a learning tool to help me improve my ability
          using JavaScript and better understand graph algorithms.</p>
        <div class="chip"><a class="project-link" href="graph-algorithm-visualiser/" target="_blank"><img src="images/live.png" alt="Live Project">View Live Version of Project</a></div>
        <div class="chip github-chip"><a class="project-link" href="https://github.com/KyleGough/graph-algorithm-visualiser" target="_blank"><img src="images/github-icon.png" alt="Github Logo">Github</a></div>
      </div>

      <div class="divider"></div>

      <?php generateImage($imageList[0], $altList[0]); ?>

      <div class="divider"></div>

      <div id="features" class="section scrollspy">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Visualisation of the graph, unvisited nodes, visited nodes and edges connecting them.</li>
          <li>Choice of low number to high number of nodes in the graph</li>
          <li>Algorithm statistics such as: Tour length, Minimum Spanning Tree length, Convex Hull nodes.</li>
          <li><strong>Convex Hull Algorithms</strong> - Graham Scan</li>
          <li><strong>Minimum Spanning Tree Algorithms</strong> - Prim's, Kruskal's</li>
          <li><strong>Hamiltonian Path</strong> - Nearest Neighbour, Nearest Neighbour with 2-Opt, Random Tour</li>
          <li><strong>Minimum Matching</strong> - Greedy (variant of Kruskal's algorithm)</li>
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
