<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
  <base href="">
  <?php include "head.php"; ?>
  <title>Updates</title>
</head>

<body>

<?php
  include_once("analyticstracking.php");
  include_once("nav.php");
?>

<main>
<div class="col-light-red">
  <div class="container">
    <div class="row center m-v-0">
      <div class="col s12 m-v-4">
        <h3><strong>Updates</strong></h3>
        <h5><small>This page contains a list of all updates associated with this
          website mainly for personal reference.</small></h5>
      </div>
    </div>
  </div>
</div>

<?php
  $json_string = file_get_contents('./json/updatelist.json', FILE_USE_INCLUDE_PATH);
  $array = json_decode($json_string, true);

  for($i = 0; $i < count($array); $i++) {
    $update = $array[$i];

    if ($i & 1) {
      echo "<div class='col-light-red'>";
    }
    else {
      echo "<div class='col-light-blue'>";
    }

    echo "<div class='container'><div class='row m-v-0'><div class='col s12 m-v-4'>";
    echo "<h4><strong>Version: </strong>" . $update["version"] . "</h4>";
    echo "<p class='project-date m-t-0'>" . $update["date"] . "</p>";
    echo "<p>" . $update["overview"] . "</p><ul class='browser-default p-l-1'>";

    for ($j = 0; $j < count($update["updates"]); $j++) {
      echo "<li>" . $update["updates"][$j] . "</li>";
    }
    echo "</ul></div></div></div></div>";
  }
?>

</main>

<?php include "footer.php"; ?>

</body>
</html>
