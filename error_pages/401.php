<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <title>401 Not Authorised</title>
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
          <h1 class="error-code m-b-0">401</h1>
          <h3 class="error-detail m-t-0">Not Authorised</h3>
          <p>The requested page requires authentication to access. Please navigate to a different page using the following links.</p>
          <p>You can submit a bug report by emailing: <a href"mailto:contact@kylegough.co.uk">contact@kylegough.co.uk</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col s12 l8 offset-l2 m-b-1">
          <a href="./" class="btn btn-flat btn-boxed-primary full-width m-v-1">Homepage</a>
          <a href="about" class="btn btn-flat btn-boxed-primary full-width m-v-1">Skills</a>
          <a href="projects/" class="btn btn-flat btn-boxed-primary full-width m-v-1">Projects</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "../footer.php"; ?>

</body>
</html>
