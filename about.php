<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
  <base href="./">
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
        <h5><small>4th Year Computer Science Student at University of Warwick.</small></h5>
        <p class="m-t-3" style="text-align: left;">I love learning new languages, frameworks and
          technologies in my spare time exploring their different uses and applications.
          I aim to learn a new language/technology every university term outside of
          the regular curriculum. Languages/Frameworks/Technologies I have explored in
          my spare time so far include: C#, Haskell, Ruby, Python, Node.js, Sass, Bootstrap,
          Materialize and MongoDB. I have also created some projects using these languages
          where I feel confident enough. You can view a list of my projects <a class="project-link" href="projects/">here.</a></p>
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
              generateSkill("Java", 85, "progress-programming", "Primary programming language at University. Robot Maze Environment, Steganography, Witter.", "Confident (3 projects)");
              generateSkill("C#", 65, "progress-programming", "Sorting Visualiser, Delivery Route Planner.", "Confident (2 projects)");
              generateSkill("Python", 60, "progress-programming", "Machine learning projects.", "Comfortable (1 projects)");
              generateSkill("C++", 55, "progress-programming", "OpenGL simulation of a roller coaster.", "Comfortable (1 project)");
              generateSkill("C", 40, "progress-programming", "Basic knowledge. 3D-Printing algorithms for 2D and 3D Shapes.", "Beginner (2 project)");
              generateSkill("Visual Basic", 50, "progress-programming", "First programming language.", "Comfortable (0 projects)");
              generateSkill("Haskell", 50, "progress-programming", "Mastermind and Scratch Clone coursework." , "Comfortable (2 projects)");
              generateSkill("Ruby", 25, "progress-programming", "Minesweeper styled game.", "Beginner (1 projects)");
              generateSkill("Matlab", 35, "progress-programming", "Digital forensics on images.", "Beginner");
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
          generateSkill("JavaScript", 85, "progress-web", "Graph Algorithm Visualiser, RSCBot", "Confident (6 projects)");
          generateSkill("HTML", 90, "progress-web", "Created websites including this portfolio, BSplit and a To Do List.", "Confident (7 projects)");
          generateSkill("CSS", 90, "progress-web", "Styled this website and coursework website from CS139 using CSS.", "Confident (7 projects)");
          generateSkill("Sass", 55, "progress-web", "Used for this website to make the CSS more readable and maintainable.", "Comfortable (1 project)");
          generateSkill("Less", 35, "progress-web", "TODO", "Beginner (1 project)");
          generateSkill("PHP", 45, "progress-web", "Used in CS139 Coursework and portfolio.", "Beginner (3 projects)");
        ?>
        <h5 class="m-b-1">Frameworks</h5>
        <?php
          generateSkill("Node.js", 10, "progress-web", "Used for URL Shortener.", "Beginner (1 project)");
          generateSkill("jQuery", 50, "progress-web", "Used for CS139 coursework.", "Comfortable (5 projects)");
          generateSkill("Bootstrap", 55, "progress-web", "Used in a previous version of this website, CS139 coursework.", "Comfortable (2 projects)");
          generateSkill("Materialize", 75, "progress-web", "Used in this version of this website.", "Comfortable (2 projects)");
          generateSkill("Webix.js", 65, "progress-web", "Used to create UI in intern project at Bank of America Merrill Lynch.", "Comfortable (1 project)");
          generateSkill("React.js", 10, "progress-web", "React Hooks used in intern project at Bank of America Merrill Lynch.", "Beginner (1 project)");
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
          generateSkill("SQL", 50, "progress-database", "Integrated in numerous projects. Used in CS258 coursework with complex queries.", "Comfortable (4 projects)");
          generateSkill("Access SQL", 20, "progress-database", "Used in COMP4 Coursework for deliveries.", "Beginner (1 projects)");
          generateSkill("SQLite", 25, "progress-database", "Used in CS139 Coursework for splitting bills.", "Beginner (2 projects)");
          generateSkill("MongoDB", 5, "progress-database", "Used in URL shortener project.", "Beginner (1 projects)");
        ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div id="extra" class="col s12 m-v-4 section scrollspy">
        <h3 class="center m-b-1"><strong>Misc.</strong></h3>
        <?php
          generateSkill("Bash", 50, "progress-other", "Shell Scripting exercises. Finding security defects in a Virtual Machine.", "");
          generateSkill("Git", 55, "progress-other", "Used to maintain various personal and group projects.", "");
          generateSkill("LaTeX", 35, "progress-other", "Basic commands. Created a Linux Reference guide, as well as other various documents.", "");
          generateSkill("Alloy", 20, "progress-other", "Simple exercises, CS262 Coursework.", "")
        ?>
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
          <li>CS118: Programming for Computer Scientists<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/robot-maze">Robot Maze Coursework</a></li>
          <li>CS126: Design of Information Structures<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/witter">Witter Coursework</a></li>
          <li>CS130: Mathematics for Computer Scientists I</li>
          <li>CS131: Mathematics for Computer Scientists II</li>
          <li>CS132: Computer Organisation and Architecture<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/#cs132">3D Printer Coursework</a></li>
          <li>CS133: Professional Skills<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/#cs133">Linux Reference Guide</a></li>
          <li>CS139: Web Development Technologies<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/todo-list">To Do List Lab Work</a>, <a class="project-link" href="projects/bsplit">Bill Splitter Coursework</a></li>
          <li>CS140: Computer Security<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/#cs140">Virtual Machine Lab Work</a></li>
        </ul>
        <br>
        <h5>Year 2 Modules</h5>
        <ul>
          <li>CS241: Operating Systems and Computer Networks<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#">Multi-Threaded Packet Sniffer</a></li>
          <li>CS256: Functional Programming<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/mastermind">Mastermind Coursework</a>, <a class="project-link" href="projects/scratch-clone">Scratch Clone Coursework</a></li>
          <li>CS258: Database Systems<i class="material-icons icon-arrow">arrow_forward</i><span class="project-link">Department Store Database Analysis</span></li>
          <li>CS259: Formal Languages</li>
          <li>CS260: Algorithms</li>
          <li>CS261: Software Engineering<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#">Trader ChatBot Group Project</a></li>
          <li>CS262: Logic and Verification<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#">Alloy Coursework</a></li>
          <li>CS263: Cyber Security<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#">Wondough Bank Coursework</a></li>
        </ul>
        <br>
        <h5>Year 3 Modules</h5>
        <ul>
          <li>CS310: Computer Science Project (Dissertation)<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#TODO#">Using Swarm AI to map a cave network</a></li>
          <li>CS313: Mobile Robotics</li>
          <li>CS324: Computer Graphics<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="#TODO#">OpenGL Roller coaster</a></li>
          <li>CS331: Neural Computing</li>
          <li>CS342: Machine Learning</li>
          <li>CS355: Digital Forensics</li>
        </ul>
        <br>
        <!--<h5>Year 4 Modules</h5>
        <ul>
        </ul>-->
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
          <li>Algorithm Visualisers<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/sorting-visualiser">Sorting Algorithm Visualiser</a>, <a class="project-link" href="projects/graph-algorithm-visualiser">Graph Algorithm Visualiser</a></li>
          <li>Artificial Intelligence<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/tic-tac-toe">Tic Tac Toe AI</a></li>
          <li>Quantum Computing</li>
          <li>Computer Security<i class="material-icons icon-arrow">arrow_forward</i><a class="project-link" href="projects/#cs140">Virtual Machine Lab Work</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</main>

<?php include "footer.php"; ?>

</body>
</html>
