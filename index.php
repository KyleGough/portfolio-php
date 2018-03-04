<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  $featuredProjectID = "graph-algorithm-visualiser";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="">
  <?php include "head.php"; ?>
  <title>Kyle Gough - Portfolio</title>
</head>

<body>

<?php
  include_once("analyticstracking.php");
  include_once("nav.php");
  $json_string = file_get_contents('./json/projectlist.json', FILE_USE_INCLUDE_PATH);
  $array = json_decode($json_string, true);
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i]["ID"] == $featuredProjectID) {
      $featuredProject = $array[$i];
      break;
    }
  }
  $latestProject = $array[0];
?>

<main>
<div class="col-light-red">
  <div class="container">
    <div class="row center m-v-0">
      <div class="col s10 offset-s1 m6 offset-m3 l4 offset-l4 m-v-4">
        <img class="responsive-img circle" src="images/code.png">
        <h3>Kyle Gough</h3>
        <h5 class="p-h-1"><small>Second Year Computer Science student at Warwick University.</small></h5>
        <p>Welcome to my portfolio website showcasing my skills and projects completed in my spare time and at university.</p>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container">
    <div class="row flex center p-v-2 m-b-0">
      <div class="col s12 l6 m-v-2 push-l6">
        <h3 class="m-b-1"><strong>Featured Project</strong></h3>
        <?php
          echo "<h5><strong>" . $featuredProject["title"] . "</strong></h5>";
          echo "<p class='m-h-1 description'>" . $featuredProject["description"] . "</p>";
          echo "<a href='projects/" . $featuredProject["ID"] . ".php' class='btn btn-flat btn-boxed-primary full-width'>View Featured Project</a>";
        ?>
      </div>
      <div class="col s12 l6 p-h-2 m-v-2 pull-l6">
        <?php
          echo "<div class='valign-wrapper' style='height:100%;width:100%;'>";
          echo "<div class='valign' style='height:100%;'></div>";
          echo "<img class='light-border z-depth-1' src='" . $featuredProject["image"] . "' alt='" . $featuredProject["alt"] . "'></div>";
        ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container">
    <div class="row flex center p-v-2 m-b-0">
      <div class="col s12 l6 m-v-2">
        <h3 class="m-b-1"><strong>Latest Project</strong></h3>
        <?php
          echo "<h5><strong>" . $latestProject["title"] . "</strong></h5>";
          echo "<p class='m-h-1 description'>" . $latestProject["description"] . "</p>";
          echo "<a href='projects/" . $latestProject["ID"] . ".php' class='btn btn-flat btn-boxed-primary full-width'>View Latest Project</a>";
        ?>
      </div>
      <div class="col s12 l6 m-v-2 p-h-2">
      <?php
        echo "<div class='valign-wrapper' style='height:100%;width:100%;'>";
        echo "<div class='valign' style='height:100%;'></div>";
        echo "<img class='light-border z-depth-1' src='" . $latestProject["image"] . "' alt='" . $latestProject["alt"] . "'></div>";
      ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container">
    <div class="row center m-v-0">
      <div class="col s12 m-v-4 center">
        <p>For a list of all my projects <a href="projects.php" class="project-link">click here.</a></p>
      </div>
    </div>
  </div>
</div>
</main>

<?php include "footer.php"; ?>

</body>
</html>
