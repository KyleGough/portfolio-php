<?php
  $json_string = file_get_contents('../projectlist.json', FILE_USE_INCLUDE_PATH);
  $array = json_decode($json_string, true);
  $matchedIndex = -1;
  $previousIndex = -1;
  $nextIndex = -1;

  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i]["ID"] == $projectID) {
      $matchedIndex = $i;
      break;
    }
  }

  if ($matchedIndex != -1) {

    if ($matchedIndex != count($array) - 1) {
      for ($j = $matchedIndex + 1; $j < count($array); $j++) {
        if ($array[$j]["disabled"] == false) {
          $previousIndex = $j;
          break;
        }
      }
    }
    if ($previousIndex == -1) {
      //echo "<div class='chip left m-l-1'><a class='disabled'>Previous Project</a></div>";

      echo "<a class='left m-v-2 btn btn-flat btn-boxed-primary disabled'>Previous Project</a>";
    }
    else {
      //echo "<div class='chip left m-l-1'><a class='project-link' href='projects/" . $array[$previousIndex]["ID"] . ".php'>Previous Project</a></div>";

      echo "<a href='projects/" . $array[$previousIndex]["ID"] . ".php' class='left m-v-2 btn btn-flat btn-boxed-primary'>Previous Project</a>";
    }

    if ($matchedIndex != 0) {
      for ($j = $matchedIndex - 1; $j >= 0; $j--) {
        if ($array[$j]["disabled"] == false) {
          $nextIndex = $j;
          break;
        }
      }
    }
    if ($nextIndex == -1) {
      //echo "<div class='chip right m-r-1'><a class='disabled'>Next Project</a></div>";

      echo "<a class='right m-v-2 btn btn-flat btn-boxed-primary disabled'>Next Project</a>";
    }
    else {
      //echo "<div class='chip right m-r-1'><a class='project-link' href='projects/" . $array[$nextIndex]["ID"] . ".php'>Next Project</a></div>";

      echo "<a href='projects/" . $array[$nextIndex]["ID"] . ".php' class='right m-v-2 btn btn-flat btn-boxed-primary'>Next Project</a>";
    }

  }
?>
