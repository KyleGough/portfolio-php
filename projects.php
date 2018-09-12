<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
  <base href="">
  <?php include "head.php"; ?>
  <title>Kyle Gough - Projects</title>
</head>

<body>

<?php
  include_once("analyticstracking.php");
  include_once("nav.php");
?>

<main>
<div class="col-light-red">
  <div class="container">
    <div class="row m-v-0 center">
      <div class="col s12 m-v-4 center">
        <h3><strong>Projects</strong></h3>
        <h5><small><strong>Note:</strong> All projects subtitled with the prefix CSxxx are university coursework/lab work, all other projects have been completed in my spare time to further develop my skills or as a way to learn a new language.</small></h5>
      </div>
    </div>
    <!--<div class="row m-v-0">
      <div class="col s6 m-v-4 center">
          <div class="input-field">
            <select id="project-filter-technology">
              <option value="All" selected>All</option>
              <optgroup label="Programming Languages">
                <option value="Java">Java</option>
                <option value="C#">C#</option>
                <option value="Ruby">Ruby</option>
                <option value="C">C</option>
                <option value="Visual Basic">Visual Basic</option>
                <option value="Haskell">Haskell</option>
              </optgroup>
              <optgroup label="Web Technologies">
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="Sass">Sass</option>
                <option value="PHP">PHP</option>
                <option value="JavaScript">JavaScript</option>
              </optgroup>
              <optgroup label="Frameworks">
                <option value="jQuery">jQuery</option>
                <option value="Bootstrap">Bootstrap</option>
                <option value="Materialize">Materialize</option>
              </optgroup>
              <optgroup label="Database">
                <option value="SQL">SQL</option>
                <option value="SQLite">SQLite</option>
                <option value="Access SQL">Access SQL</option>
              </optgroup>
              <optgroup label="Other">
                <option value="Bash">Bash</option>
                <option value="LaTeX">LaTeX</option>
              </optgroup>
            </select>
            <label>Filter projects by technology</label>
          </div>
        </div>
        <div class="col s6 m-v-4 center">
          <div class="input-field">
            <select id="project-filter-type">
              <option value="All" selected>All</option>
              <option value="uni">University Projects</option>
              <option value="web">Websites</option>
              <option value="per">Personal Projects</option>
            </select>
            <label>Filter projects by category</label>
          </div>
        </div>
      </div>
    </div>-->
  </div>
</div>

<!--<script>

  $(document).ready(function() {
    filterProjects();
    $("#project-filter-technology").on("change", filterProjects);
    $("#project-filter-type").on("change", filterProjects);
  });

  function filterProjects() {
    var filterTechnology = $("#project-filter-technology").val();
    var filterType = $("#project-filter-type").val();
    var projectMatches = 0;

    $(".project-row").each(function() {
      var match = false;

      if (filterTechnology === "All") {
        match = true;
      }
      else {
        $(this).find(".language-chip").each(function() {
          if ($(this).attr("data-language") == filterTechnology) {
            match = true;
          }
        });
      }

      if (filterType !== "All") {
        var typeMatch = false;
        if ($(this).attr("data-" + filterType) === "1") {
          typeMatch = true;
        }
        if (!typeMatch) {
          match = false;
        }
      }

      if (match) {
        $(this).parent().parent().fadeIn();
        projectMatches++;
      }
      else {
        $(this).parent().parent().hide();
      }

    });

    if (projectMatches === 0) {
      $("#no-matches").fadeIn();
    }
    else {
      $("#no-matches").hide();
    }
  }
</script>-->

<?php
$json_string = file_get_contents('./json/projectlist.json', FILE_USE_INCLUDE_PATH);
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
    echo "<h5><strong>" . $project["subtitle"] . "</strong></h5>";
  }

  //Date.
  echo "<p class='project-date m-t-0'>" . $project["date"] . "</p>";

  //Programming Languages.
  for ($j = 0; $j < count($project["languages"]); $j++) {
    echo "<div class='chip language-chip' data-language='" . $project["languages"][$j]["name"] . "'>" . $project["languages"][$j]["name"] . "</div>";
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

<!--<div class="col-light-red">
  <div id="no-matches" class="container m-v-0">
    <div class="row m-t-2">
      <div class="col s12 section scrollspy center">
        <h3>No Matches</h3>
        <p>Unfortunately no projects matched the search, to see all of my projects <a class="project-link" href="projects.php">click here.</a></p>
        <p>To see all projects that used a specific technology select from the following list:</p>
      </div>
    </div>
    <div class="row m-v-4">
      <div class="col s4 offset-s2 center">
        <ul>
          <li><a class="project-link" href="projects.php?lan=java">Java</a></li>
          <li><a class="project-link" href="projects.php?lan=js">JavaScript</a></li>
          <li><a class="project-link" href="projects.php?lan=csharp">C#</a></li>
          <li><a class="project-link" href="projects.php?lan=ruby">Ruby</a></li>
          <li><a class="project-link" href="projects.php?lan=bash">Bash</a></li>
          <li><a class="project-link" href="projects.php?lan=jquery">jQuery</a></li>
          <li><a class="project-link" href="projects.php?lan=sass">Sass</a></li>
        </ul>
      </div>
      <div class="col s4 center">
        <ul>
          <li><a class="project-link" href="projects.php?lan=html">HTML</a></li>
          <li><a class="project-link" href="projects.php?lan=css">CSS</a></li>
          <li><a class="project-link" href="projects.php?lan=sql">SQL</a></li>
          <li><a class="project-link" href="projects.php?lan=php">PHP</a></li>
          <li><a class="project-link" href="projects.php?lan=c">C</a></li>
          <li><a class="project-link" href="projects.php?lan=bootstrap">Bootstrap</a></li>
          <li><a class="project-link" href="projects.php?lan=materialize">Materialize</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>-->
</main>

<?php include "footer.php"; ?>

</body>
</html>
