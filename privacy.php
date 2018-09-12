<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
  <base href="">
  <?php include "head.php"; ?>
  <title>Kyle Gough - Privacy Policy</title>
</head>

<body>

<?php
  include_once("analyticstracking.php");
  include_once("nav.php");
?>

<main>
<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4 section scrollspy">
        <h3><strong>Privacy Policy</strong></h3>
        <p><strong>Last Updated:</strong> 20/04/2017</p>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4 section scrollspy">
        <p>The only cookies in use on this website are for Google Analytics.
           Google Analytics is a web analytics tool that helps me better
           understand how visitors engage with this website. Google Analytics
           customers can view a variety of reports about how visitors interact
           with their website so that they can improve it</p>
        <p>Like many services, Google Analytics uses first-party cookies to track
           visitor interactions as in our case, where they are used to collect
           information about how visitors use our site. I use this information
           to help improve the website.</p>
        <p>Cookies contain information that is stored locally on your computer.
           These cookies are used to store information, such as the
           time that the current visit occurred, whether the visitor has been to
           the site before and what site referred the visitor to the web page.</p>
        <p>Google Analytics collects information anonymously. It reports website
           trends without identifying individual visitors. You can opt out of
           Google Analytics without affecting how you visit this site by visiting
        <a class="project-link" href="https://tools.google.com/dlpage/gaoptout" target="_blank">this page.</a>
           This opts you out of tracking by Google Analytics across all websites
           you use. All activities within this website fall within the bounds of the
        <a class="project-link" href="https://www.google.com/analytics/terms/gb.html" target="_blank">Google Analytics Terms of Service.</a></p>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 xl6 m-v-4">
        <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" class="btn btn-flat btn-boxed-primary full-width">Opt-out of Google Analytics</a>
      </div>
      <div class="col s12 xl6 m-v-4">
        <a href="https://www.google.com/analytics/terms/gb.html" target="_blank" class="btn btn-flat btn-boxed-primary full-width">Google Analytics Terms of Service.</a>
      </div>
    </div>
  </div>
</div>
</main>

<?php include "footer.php"; ?>

</body>
</html>
