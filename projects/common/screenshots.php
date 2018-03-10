<?php

  //Generates the screenshot section for the project page.
  function generateScreenshots($imageList, $altList) {
    echo "<div id='screenshots' class='section scrollspy'>";
    echo "<h4 class='m-b-1'>Screenshots</h4>";
    $imageCount = count($imageList);
    for($i = 0; $i < $imageCount; $i++) {
      if($i % 3 === 0) {
        echo "<div class='row'>";
      }
      echo "<div class='col s4'><img class='responsive-img materialboxed z-depth-1' src='" . $imageList[$i] . "' alt='" . $altList[$i] . "' data-caption='" . $altList[$i] . "'></div>";
      if($i % 3 === 2) {
        echo "</div>";
      }
    }
    if($imageCount % 3 !== 0) {
      echo "</div>";
    }
    echo "</div>";
  }

  //Generates a responsive image for the page.
  function generateImage($imageSrc, $imageAlt) {
    echo "<img class='responsive-img materialboxed img-showcase z-depth-1' src='" . $imageSrc . "' alt='" . $imageAlt . "' data-caption='" . $imageAlt . "'>";
  }

 ?>
