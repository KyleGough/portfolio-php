<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>404 Not Found</title>
</head>

<body>

<?php
  include_once("../analyticstracking.php");
  include_once("../nav.php");
?>

<div class="container">
  <div class="row">
    <div id="contents" class="col s12">

      <div class="row center">
        <div class="col s12">
          <h1 class="error-code m-b-0">404</h1>
          <h3 class="error-detail m-t-0">Not Found</h3>
          <p>Unfortunately the requested page could not be found. Please navigate to a different page using the following links
        </div>
      </div>
      <div class="row">
        <div class="col s12 l8 offset-l2 m-b-1">
          <a href="index.php" class="btn btn-flat btn-boxed-primary full-width m-v-1">Homepage</a>
          <a href="about.php" class="btn btn-flat btn-boxed-primary full-width m-v-1">Skills</a>
          <a href="projects.php" class="btn btn-flat btn-boxed-primary full-width m-v-1">Projects</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "../footer.php"; ?>

</body>
</html>
