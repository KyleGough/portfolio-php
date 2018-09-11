<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l4 m12 s12 m-v-2">
        <h5 class="white-text">About Me</h5>
        <p class="grey-text text-lighten-4">Second Year computer science student at Warwick University.</p>
        <p>Contact me at: <a href="mailto:kylegough@kylegough.co.uk">kylegough@kylegough.co.uk</a></p>
      </div>
      <div class="col l4 m6 s6 center m-v-2">
        <h5 class="white-text">Projects</h5>
        <ul>
          <li><a class="grey-text text-lighten-3 footer-link" href="projects/graph-algorithm-visualiser.php">Graph Visualiser</a></li>
          <li><a class="grey-text text-lighten-3 footer-link" href="projects/sorting-visualiser.php">Sorting Visualiser</a></li>
          <li><a class="grey-text text-lighten-3 footer-link" href="projects/bsplit.php">BSplit</a></li>
          <li><a class="grey-text text-lighten-3 footer-link" href="projects/route-planner.php">Route Planner</a></li>
          <li><a class="grey-text text-lighten-3 footer-link" href="projects/steganography.php">Steganography</a></li>
          <li><a class="grey-text text-lighten-3 footer-link" href="projects/todo-list.php">To Do List</a></li>
        </ul>
      </div>
      <div class="col l4 m6 s6 center m-v-2">
        <h5 class="white-text">Website</h5>
        <ul>
          <li><a class="grey-text text-lighten-3 footer-link" href="index.php">Home</a></li>
          <li><a class="grey-text text-lighten-3 footer-link" href="about.php">Skills</a></li>
          <li><a class="grey-text text-lighten-3 footer-link" href="projects.php">Projects</a></li>
          <li><a class="grey-text text-lighten-3 footer-link" href="privacy.php">Privacy Policy</a></li>
          <li><a class="grey-text text-lighten-3 footer-link" href="https://github.com/KyleGough" target="_blank">Github</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="row m-b-0">
        <div class="col s12 l6">
          <p class="medium-and-less-centre">&copy; 2018 Kyle Gough</p>
        </div>
        <div class="col s12 l6">
          <?php
            date_default_timezone_set("Europe/London");
            echo "<p class='medium-and-less-centre grey-text text-lighten-4 right'>Last Modified: " . date("jS F Y g:ia", getlastmod()) . "</p>";
          ?>
        </div>
      </div>
    </div>
  </div>
</footer>
