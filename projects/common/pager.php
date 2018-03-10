<?php
  $json_string = file_get_contents('../json/projectlist.json', FILE_USE_INCLUDE_PATH);
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

    echo "<div class='row'>"; //###
    echo "<div class='col s12 m6 center'>"; //###

    if ($previousIndex == -1) {
      echo "<a class='btn-pager m-v-2 btn btn-flat btn-boxed-primary disabled'>Previous Project</a>";
    }
    else {
      echo "<a href='projects/" . $array[$previousIndex]["ID"] . ".php' class='btn-pager m-v-2 btn btn-flat btn-boxed-primary'>Previous Project</a>";
    }

    echo "</div>"; //###

    if ($matchedIndex != 0) {
      for ($j = $matchedIndex - 1; $j >= 0; $j--) {
        if ($array[$j]["disabled"] == false) {
          $nextIndex = $j;
          break;
        }
      }
    }

    echo "<div class='col s12 m6 center'>"; //###

    if ($nextIndex == -1) {
      echo "<a class='btn-pager m-v-2 btn btn-flat btn-boxed-primary disabled'>Next Project</a>";
    }
    else {
      echo "<a href='projects/" . $array[$nextIndex]["ID"] . ".php' class='btn-pager m-v-2 btn btn-flat btn-boxed-primary'>Next Project</a>";
    }

      echo "</div>"; //###
      echo "</div>"; //###

  }
?>
