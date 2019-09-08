<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>Kyle Gough - Projects</title>
</head>

<body>

<?php
  include_once("../analyticstracking.php");
  include_once("../nav.php");
?>

<main>
<div class="col-light-red">
  <div class="container">
    <div class="row m-v-0 center">
      <div class="col s12 m-v-4 center">
        <h3><strong>Projects</strong></h3>
      </div>
    </div>
  </div>
</div>

<?php
$json_string = file_get_contents('../json/projectlist.json', FILE_USE_INCLUDE_PATH);
$array = json_decode($json_string, true);

for ($i = 0; $i < count($array); $i++) {
  $project = $array[$i];

  //Background Colour.
  if ($i & 1) {
    echo "<div class='col-light-red'>";
  }
  else {
    echo "<div class='col-light-blue'>";
  }

  //Main container and identifiers for search functionality.
  echo "<div class='container' id='" . $project["ID"] . "' ";
  echo "data-uni='" . $project["categories"]["uni"] . "' ";
  echo "data-per='" . $project["categories"]["per"] . "' ";
  echo "data-web='" . $project["categories"]["web"] . "'>";
  echo "<div class='row flex p-v-2 m-b-0'>";

  //Description Column.
  echo "<div class='col s12 xl7 m-v-2'>";
  echo "<h4><strong>" . $project["title"] . "</strong></h4>";

  //Subtitle.
  if ($project["subtitle"] != null) {
    echo "<h5>" . $project["subtitle"] . "</h5>";
  }

  //Date.
  echo "<p class='project-date m-t-0'>" . $project["date"] . "</p>";

  //Programming Languages.
  for ($j = 0; $j < count($project["languages"]); $j++) {
    echo "<div class='chip language-chip' data-language='" . $project["languages"][$j] . "'>" . $project["languages"][$j] . "</div>";
  }

  //Description.
  echo "<p>" . $project["description"] . "</p>";

  //Chips.
  if ($project["live"] != null) {
    echo "<div class='chip'><a class='project-link' href='" . $project["live"] . "' target='_blank'><img class='img-live' src='images/live.png' alt='Live Project'>View Live Version of Project</a></div>";
  }
  if ($project["github"] != null) {
    echo "<div class='chip github-chip'><a class='project-link' href='" . $project["github"] . "' target='_blank'><img class='img-github' src='images/github-icon.png' alt='Github Logo'>Github</a></div>";
  }

  //View Project
  echo "<div><a href='projects/" . $project["ID"] . ".php' class='";
  if ($project["disabled"]) {
    echo "disabled ";
  }
  echo "m-v-2 btn btn-flat btn-boxed-primary'>View Project</a></div></div>";

  //Image column.
  echo "<div class='col s12 xl5 p-v-2'>";
  echo "<div class='valign-wrapper' style='height:100%;width:100%;'>";
  echo "<div class='valign' style='height:100%;'></div>";
  echo "<img class='light-border z-depth-1 responsive-img' src='" . $project["image"] . "' alt='" . $project["alt"] . "'></div>";
  echo "</div></div></div></div></div>";
}
?>

</main>

<?php include "../footer.php"; ?>

</body>
</html>
