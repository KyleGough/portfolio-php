<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/sort1.png";
  $imageList[1] = "images/sort2.png";
  $imageList[2] = "images/sort3.png";
  $imageList[3] = "images/sort4.png";
  $imageList[4] = "images/sort5.png";
  $altList[0] = "Sorting Visualiser - Random Data";
  $altList[1] = "Sorting Visualiser - Concurrent visualisers";
  $altList[2] = "Sorting Visualiser - Complete and Incomplete simulations";
  $altList[3] = "Sorting Visualiser - Dot styled data points";
  $altList[4] = "Sorting Visualiser - Algorithm statistics";
  $projectID = "sorting-visualiser";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Projects - Sorting Visualiser</title>
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
        <h3><strong>Sorting Algorithm Visualiser</strong></h3>
        <div class="row center m-t-2">
          <div class="chip language-chip" data-language="C#">C#</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <p><strong>Date:</strong> September 2015 - November 2015</p>
        <p>Supports 20 sorting algorithms and 18 types of start data. Options to view
          and compare two algorithms simultaneously, change size of the datasets,
          range of numbers in the dataset and delay. Provides real-time visualisation
          of the movement of data and swapping of elements in the datasets. This
          software can serve as a learning tool for people who want to understand how
          different sorting algorithms operate and in what circumstances one algorithm
          may be a better choice. The statistics provide an in-depth evaluation of how
          well an algorithm has performed on the unsorted data. Served as a learning
          tool for myself for understanding different sorting algorithms and their
          applications due to their characteristics.</p>
        <div class="chip github-chip"><a class="project-link" href="https://github.com/KyleGough/sorting-algorithm-visualiser" target="_blank"><img src="images/github-icon.png" alt="Github Logo">Github</a></div>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <?php generateImage($imageList[1], $altList[1]); ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 l6 m-v-2">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Real-time visualiser which can also be paused and stopped.
          <li>20 sorting algorithms (incl. Bubble, Quick, Merge, Insertion)</li>
          <li>18 starting datasets (incl. Random, Reversed, Almost Sorted, Sinusoidal)</li>
          <li>Option to compare two algorithms simultaneously</li>
          <li>Customisable dataset size, range and delay</li>
          <li>Provides statistics for each algorithm</li>
          <li>Analysis results after sorting data</li>
          <li>Custom colours and data display styles</li>
        </ul>
      </div>
      <div class="col s12 l6 m-v-2">
        <h4>Algorithms</h4>
        <ul>
          <li><b>Bitonic</b> - Parallel sorting algorithm</li>
          <li><b>Bogo</b> - Randomly permutates elements</li>
          <li><b>Bubble</b> - Common simple algorithm</li>
          <li><b>Cocktail</b> - Bubble sort in both directions</li>
          <li><b>Comb</b> - Bubble sort variant with reducing gap</li>
          <li><b>Cycle</b> - Optimal array writes</li>
          <li><b>Gnome</b> - Insertion sort but swaps until element in correct position</li>
          <li><b>Heap</b> - Builds heap and extracts from unsorted region</li>
          <li><b>Insertion</b> - Builds sorted array one element at a time</li>
          <li><b>JSort</b> - Builds heap then uses insertion sort</li>
          <li><b>Merge</b> - Recursively merges half of the array</li>
          <li><b>OddEven</b> - Compares all odd/even pairs then vice-versa</li>
          <li><b>Pancake</b> - Flips array between regions</li>
          <li><b>Permutation</b> - Compares every permutation of the array</li>
          <li><b>Radix <abbr title="Least Significant Digit">LSD</abbr></b> - Analyses least significant digits</li>
          <li><b>Selection</b> - Builds sorted array one element at a time</li>
          <li><b>Shell</b> - Bubble sort variant with reducing gap</li>
          <li><b>Smooth</b> - Builds heap then extracts largest element</li>
          <li><b>Stooge</b> - Highly inefficient, recursively sorts first 2/3 then last 2/3</li>
          <li><b>Quick</b> - Divide and conquer algorithm that uses a pivot</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <?php generateImage($imageList[4], $altList[4]); ?>
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
