<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
  <base href="">
  <?php
    include "head.php";
    include "skills.php";
  ?>
  <title>Kyle Gough - Skills</title>
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
        <h3><strong>About Me</strong></h3>
        <h5><small>Third Year Computer Science Student at University of Warwick.</small></h5>
        <p class="m-t-3" style="text-align: left;">I love learning new languages, frameworks and
          technologies in my spare time exploring their different uses and applications.
          I aim to learn a new language/technology every university term outside of
          the regular curriculum. Languages/Frameworks/Technologies I have explored in
          my spare time so far include: C#, Haskell, Ruby, Python, Node.js, Sass, Bootstrap,
          Materialize and MongoDB. I have also created some projects using these languages
          where I feel confident enough. You can view a list of my projects <a class="project-link" href="projects.php">here.</a></p>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div id="programming" class="col s12 m-v-4 section scrollspy">
            <h3 class="center m-b-1"><strong>Programming Languages</strong></h3>
            <?php
              generateSkill("Java", 70, "progress-programming", "Primary programming language at University. Robot Maze Environment, Steganography, Witter.", "Confident (3 projects)");
              generateSkill("C#", 55, "progress-programming", "Sorting Visualiser, Delivery Route Planner.", "Confident (2 projects)");
              generateSkill("Visual Basic", 45, "progress-programming", "First programming language.", "Comfortable (0 projects)");
              generateSkill("Haskell", 45, "progress-programming", "Mastermind and Scratch Clone coursework." , "Comfortable (2 projects)");
              generateSkill("C", 35, "progress-programming", "Basic knowledge. 3D-Printing algorithms for 2D and 3D Shapes.", "Beginner (2 project)");
              generateSkill("Ruby", 20, "progress-programming", "Minesweeper styled game", "Beginner (1 projects)");
              generateSkill("Python", 10, "progress-programming", "Currently learning in my spare time", "Beginner (0 projects)");
            ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div id="web" class="col s12 m-v-4 section scrollspy">
        <h3 class="center m-b-1"><strong>Web Technologies</strong></h3>
        <?php
          generateAbbrSkill("HTML", "Hypertext Markup Language", 85, "progress-web", "Created websites including this portfolio, BSplit and a To Do List.", "Confident (7 projects)");
          generateAbbrSkill("CSS", "Cascading Style Sheets", 85, "progress-web", "Styled this website and coursework website from CS139 using CSS.", "Confident (7 projects)");
          generateAbbrSkill("Sass", "Syntactically Awesome Style Sheets", 60, "progress-web", "Used for this website to make the CSS more readable and maintainable.", "Comfortable (1 project)");
          generateAbbrSkill("PHP", "PHP Hypertext Preprocessor", 40, "progress-web", "Used in CS139 Coursework and portfolio.", "Beginner (3 projects)");
          generateSkill("JavaScript", 55, "progress-web", "Graph Algorithm Visualiser, RSCBot", "Comfortable (6 projects)");
        ?>
        <h5 class="m-b-1">Frameworks</h5>
        <?php
          generateSkill("Node.js", 10, "progress-web", "Used for URL Shortener.", "Beginner (1 project)");
          generateSkill("jQuery", 50, "progress-web", "Used for CS139 coursework.", "Comfortable (5 projects)");
          generateSkill("Bootstrap", 55, "progress-web", "Designed this website and CS139 coursework using Bootstrap.", "Comfortable (2 projects)");
          generateSkill("Materialize", 75, "progress-web", "Used to design a version of my portfolio website.", "Comfortable (2 project)");
        ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div id="database" class="col s12 m-v-4 section scrollspy">
        <h3 class="center m-b-1"><strong>Database</strong></h3>
        <?php
          generateAbbrSkill("SQL", "Structured Query Language", 50, "progress-database", "Integrated in numerous projects. Used in CS258 coursework with complex queries.", "Comfortable (4 projects)");
          generateSkill("Access SQL", 20, "progress-database", "Used in COMP4 Coursework for deliveries.", "Beginner (1 projects)");
          generateSkill("SQLite", 25, "progress-database", "Used in CS139 Coursework for splitting bills.", "Beginner (2 projects)");
          generateSkill("MongoDB", 5, "progress-database", "Used in URL shortener.", "Beginner (1 projects)");
        ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div id="extra" class="col s12 m-v-4 section scrollspy">
        <h3 class="center m-b-1"><strong>Extra</strong></h3>
        <?php
          generateSkill("Bash", 50, "progress-other", "Shell Scripting exercises. Finding security defects in a Virtual Machine.", "");
          generateSkill("Git", 40, "progress-other", "Used to maintain various personal and group projects.", "");
          generateSkill("LaTeX", 25, "progress-other", "Basic commands. Created a Linux Reference guide using LaTeX.", "");
          generateSkill("Alloy", 10, "progress-other", "Simple exercises, CS262 Coursework.", "Beginner (1 project)")
        ?>
        <!--<h5>Other</h5>
        <ul>
          <li><b>Operating Systems:</b> Windows, Linux (Redhat, Ubuntu)</li>
          <li><b>IDEs:</b> Visual Studio, IntelliJ</li>
          <li><b>Other:</b> Microsoft Office, Adobe Photoshop, Adobe After Effects</li>
        </ul>-->
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div id="modules" class="col s12 m-v-4 section scrollspy">
        <h3 class="center m-b-1"><strong>Modules Taken</strong></h3>
        <h5>Year 1 Modules</h5>
        <ul>
          <li>CS118: Programming for Computer Scientists<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/robot-maze.php">Robot Maze Coursework</a></li>
          <li>CS126: Design of Information Structures<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/witter.php">Witter Coursework</a></li>
          <li>CS130: Mathematics for Computer Scientists I</li>
          <li>CS131: Mathematics for Computer Scientists II</li>
          <li>CS132: Computer Organisation and Architecture<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects.php#cs132">3D Printer Coursework</a></li>
          <li>CS133: Professional Skills<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects.php#cs133">Linux Reference Guide</a></li>
          <li>CS139: Web Development Technologies<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/todo-list.php">To Do List Lab Work</a>, <a class="project-link" href="projects/bsplit.php">Bill Splitter Coursework</a></li>
          <li>CS140: Computer Security<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects.php#cs140">Virtual Machine Lab Work</a></li>
        </ul>
        <br>
        <h5>Year 2 Modules</h5>
        <ul>
          <li>CS241: Operating Systems and Computer Networks<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#">Multi-Threaded Packet Sniffer</a></li>
          <li>CS256: Functional Programming<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/mastermind.php">Mastermind Coursework</a>, <a class="project-link" href="projects/scratch-clone.php">Scratch Clone Coursework</a></li>
          <li>CS258: Database Systems<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#">Department Store Database Analysis</a></li>
          <li>CS259: Formal Languages</li>
          <li>CS260: Algorithms</li>
          <li>CS261: Software Engineering<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#">Trader ChatBot Group Project</a></li>
          <li>CS262: Logic and Verification<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#">Alloy Coursework</a></li>
          <li>CS263: Cyber Security<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#">Wondough Bank Coursework</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div id="interest" class="col s12 m-v-4 section scrollspy">
        <h5>Areas of Personal Interest</h5>
        <ul>
          <li>Algorithm Visualisers<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/sorting-visualiser.php">Sorting Algorithm Visualiser</a>, <a class="project-link" href="projects/graph-algorithm-visualiser.php">Graph Algorithm Visualiser</a></li>
          <li>Artificial Intelligence<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/tic-tac-toe.php">Tic Tac Toe AI</a></li>
          <li>Quantum Computing</li>
          <li>Computer Security<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects.php#cs140">Virtual Machine Lab Work</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</main>

<?php include "footer.php"; ?>

</body>
</html>
