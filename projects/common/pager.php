<?php
  //Decodes the projectlist file.
  $json_string = file_get_contents('../json/projectlist.json', FILE_USE_INCLUDE_PATH);
  $array = json_decode($json_string, true);
  $matchedIndex = -1;
  $previousIndex = -1;
  $nextIndex = -1;

  //Finds the array element corresponding to the project.
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i]["ID"] == $projectID) {
      $matchedIndex = $i;
      break;
    }
  }

  //If the project has been found in the array.
  if ($matchedIndex != -1) {

    //Finds the index of the previous project.
    if ($matchedIndex != count($array) - 1) {
      for ($j = $matchedIndex + 1; $j < count($array); $j++) {
        if ($array[$j]["disabled"] == false) {
          $previousIndex = $j;
          break;
        }
      }
    }

    //Finds the index of the next project.
    if ($matchedIndex != 0) {
      for ($j = $matchedIndex - 1; $j >= 0; $j--) {
        if ($array[$j]["disabled"] == false) {
          $nextIndex = $j;
          break;
        }
      }
    }

    echo "<div class='row'>";

    //Previous project button.
    echo "<div class='col s12 m6 center'>";
    if ($previousIndex == -1) {
      echo "<a class='btn-pager m-v-2 btn btn-flat btn-boxed-primary disabled'>Previous Project</a></div>";
    }
    else {
      echo "<a href='projects/" . $array[$previousIndex]["ID"] . ".php' class='btn-pager m-v-2 btn btn-flat btn-boxed-primary'>Previous Project</a></div>";
    }

    //Next project button.
    echo "<div class='col s12 m6 center'>";
    if ($nextIndex == -1) {
      echo "<a class='btn-pager m-v-2 btn btn-flat btn-boxed-primary disabled'>Next Project</a></div>";
    }
    else {
      echo "<a href='projects/" . $array[$nextIndex]["ID"] . ".php' class='btn-pager m-v-2 btn btn-flat btn-boxed-primary'>Next Project</a></div>";
    }

    echo "</div>";

  }
?>
