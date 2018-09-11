<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "./common/screenshots.php";
  $imageList[0] = "images/tictactoe1.png";
  $imageList[1] = "images/tictactoe2.png";
  $imageList[2] = "images/tictactoe3.png";
  $altList[0] = "Tic Tac Toe - Empty game";
  $altList[1] = "Tic Tac Toe - Draw against AI";
  $altList[2] = "Tic Tac Toe - Unfinished game";
  $projectID = "tic-tac-toe";
?>

<!DOCTYPE html>
<html>
<head>
  <base href="../">
  <?php include "../head.php"; ?>
  <link type="text/css" rel="stylesheet" href="css/tictactoe.css"  media="screen,projection">
  <script src="js/tictactoe.js"></script>
  <title>Projects | Tic Tac Toe AI</title>
</head>

<body>

<?php
  include_once("../analyticstracking.php");
  include_once("../nav.php");
?>

<main>
<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4 center">
        <h3><strong>Tic Tac Toe AI</strong></h3>
        <div class="row center m-t-2">
          <div class="chip language-chip" data-language="JavaScript">JavaScript</div>
          <div class="chip language-chip" data-language="HTML">HTML</div>
          <div class="chip language-chip" data-language="CSS">CSS</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <p><strong>Date:</strong> January 2017 - February 2017</p>
        <p>A simple Tic-Tac-Toe game created using JavaScript. The game offers
        two-player mode and a single player mode against an AI player with 3
        different difficulties: Easy (random moves), Medium (some knowledge of
        the game) and impossible (unbeatable).</p>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <div id="game" class="section scrollspy center">
          <div class="input-field col s10 offset-s1">
            <select id="difficulty">
              <option>Easy</option>
              <option selected>Medium</option>
              <option >Impossible</option>
            </select>
            <label>Choose AI difficulty</label>
          </div>
          <div id="tictactoe" class="centre m-t-1">
            <canvas id="tic1" data-tileno="1" class="tictactoe tile" width=300px height=300px onclick="canvasClicked(this.id, 1)" ></canvas><!--
            --><canvas id="tic2" data-tileno="2" class="tictactoe tile" width=300px height=300px onclick="canvasClicked(this.id, 2)" ></canvas><!--
            --><canvas id="tic3" data-tileno="3" class="tictactoe tile" width=300px height=300px onclick="canvasClicked(this.id, 3)" ></canvas><br>
            <canvas id="tic4" data-tileno="4" class="tictactoe tile" width=300px height=300px onclick="canvasClicked(this.id, 4)" ></canvas><!--
            --><canvas id="tic5" data-tileno="5" class="tictactoe tile" width=300px height=300px onclick="canvasClicked(this.id, 5)" ></canvas><!--
            --><canvas id="tic6" data-tileno="6" class="tictactoe tile" width=300px height=300px onclick="canvasClicked(this.id, 6)" ></canvas><br>
            <canvas id="tic7" data-tileno="7" class="tictactoe tile" width=300px height=300px onclick="canvasClicked(this.id, 7)" ></canvas><!--
            --><canvas id="tic8" data-tileno="8" class="tictactoe tile" width=300px height=300px onclick="canvasClicked(this.id, 8)" ></canvas><!--
            --><canvas id="tic9" data-tileno="9" class="tictactoe tile" width=300px height=300px onclick="canvasClicked(this.id, 9)" ></canvas><br>
            <canvas id="NewTwoPlayer" data-tileno="-1" class="tictactoe tile-button" width=300px height=100px onclick="canvasClicked(this.id, -1)"></canvas><!--
            --><canvas id="NewAI" data-tileno="-1" class="tictactoe tile-button" width=300px height=100px onclick="canvasClicked(this.id, -1)"></canvas><!--
            --><canvas id="Score" data-tileno="-1" class="tictactoe tile-button" width=300px height=100px lang=""onclick="canvasClicked(this.id, -1)"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <h4>Features</h4>
        <ul class="browser-default p-l-1">
          <li>Interactive Tic-Tac-Toe game with Single-player and Two-player modes.</li>
          <li>First experience with JavaScript.</li>
          <li>Two-Player mode.</li>
          <li>3 AI difficulties: Easy, Medium and Impossible.</li>
          <li>Easy AI - Randomly chooses a tile.</li>
          <li>Medium AI - Moves to and blocks winning tiles, else moves randomly.</li>
          <li>Impossible AI - Never loses against the human player, uses rule-based strategies.</li>
          <li>End-game state detection.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="col-light-red">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <?php generateScreenshots($imageList, $altList); ?>
      </div>
    </div>
  </div>
</div>

<div class="col-light-blue">
  <div class="container m-v-0">
    <div class="row m-v-0">
      <div class="col s12 m-v-4">
        <?php include "./common/pager.php"; ?>
      </div>
    </div>
  </div>
</div>
</main>

<?php include "../footer.php"; ?>

</body>
</html>
