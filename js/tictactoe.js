$(document).ready(function () {

  var sizeFactor = 0.8; //Size of the naught/cross compared to the size of the canvas. (1 = Fill)
  var turn = "X"; //Current player's turn.
  var gameState = "GAME"; //State of the application.
  var tiles = ["BLANK", "BLANK", "BLANK", "BLANK", "BLANK", "BLANK", "BLANK", "BLANK", "BLANK"]; //Value of each tile in the game.
  var winningCombos = [[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]]; //Every combination of winning tiles.

  //Displays text on the buttons to create new games.
  displayButtonText("New Two Player Game", "NewTwoPlayer");
  displayButtonText("New AI Game", "NewAI");
  displayButtonText(turn + "'s turn", "Score");

  //Draws a Cross on the grid.
  function drawCross(canvasID) {
    var canvas = document.getElementById(canvasID); //Gets the canvas object to draw onto.
    var ctx = canvas.getContext("2d"); //Gets the contex from the canvas.
    var width = canvas.width; //Gets the width of the canvas.
    ctx.strokeStyle = "#7ee22e"; //Sets the draw colour to white.
    ctx.lineWidth = 7; //Thickens the line.
    ctx.lineCap = "round"; //Makes the edge of lines rounded.
    ctx.beginPath();
    ctx.moveTo(width * (1 - sizeFactor), width * (1 - sizeFactor)); //Maps a line from the top-left to bottom-right.
    ctx.lineTo(width * sizeFactor, width * sizeFactor);
    ctx.moveTo(width * sizeFactor, width * (1 - sizeFactor)); //Maps a line from top-right to bottom-left.
    ctx.lineTo(width * (1 - sizeFactor), width * sizeFactor);
    ctx.stroke(); //Draws the lines onto the canvas.
  }

  //Draws a Naught on the grid.
  function drawNaught(canvasID) {
    var canvas = document.getElementById(canvasID); //Gets the canvas object to draw onto.
    var ctx = canvas.getContext("2d"); //Gets the contex from the canvas.
    var width = canvas.width; //Gets the width of the canvas.
    ctx.strokeStyle = "#ae81ff"; //Sets the draw colour to white.
    ctx.lineWidth = 7; //Thickens the line.
    ctx.lineCap = "round"; //Makes the edge of lines rounded.
    ctx.beginPath();
    ctx.arc(width / 2, width / 2, sizeFactor * 0.5 * width, 0, 2 * Math.PI); //Maps a circle onto the canvas.
    ctx.stroke(); //Draws the circle onto the canvas.
  }

  $("#tictactoe canvas").click(function(event) {
    var canvasID = event.target.id;
    var n = event.target.getAttribute("data-tileno");

    //Two Player Game
    if (canvasID == "NewTwoPlayer") {
      resetBoard();
      gameState = "GAME";
      displayButtonText(turn + "'s turn", "Score");
    }
    //AI Game
    if(canvasID == "NewAI") {
      resetBoard();
      gameState = "AI";
      displayButtonText(turn + "'s turn", "Score");
    }
    //Tile Clicked
    if (gameState != "IDLE") {
      //Checks if tile is blank.
      if (n != -1 && tiles[n-1] == "BLANK") {
          tiles[n-1] = turn; //Changes blank tile to naught/cross.
          if(turn == "X") {
              drawCross(canvasID); //Draws the Cross on the canvas.
              checkBoard(turn);
              if (gameState != "IDLE") {
                turn = "O"; //Changes turn to next player.
                displayButtonText(turn + "'s turn", "Score");
                if (gameState == "AI") {
                  //Get AI Move
                  var move = getAImove(turn);
                  tiles[move] = turn;
                  drawNaught("tic" + ++move);
                  checkBoard(turn);
                  if (gameState != "IDLE") {
                    turn = "X"; //Changes turn to next player.
                    displayButtonText(turn + "'s turn", "Score");
                  }
                }
              }
          }
          else {
            drawNaught(canvasID); //Draws the Naught on the canvas.
            checkBoard(turn);
            if (gameState != "IDLE") {
              turn = "X"; //Changes turn to next player.
              displayButtonText(turn + "'s turn", "Score");
            }
          }
      }
    }

  });

  function getAImove(mark) {
    var cell = "NONE";
    var difficulty = document.getElementById("difficulty").selectedIndex;

    if (difficulty != 0) {
      //Medium or Impossible Difficulty
      cell = AIwinningMove();
      if (cell != "NONE") {
         return cell;
      }
      cell = AIblockWinning();
      if (cell != "NONE") {
        return cell;
      }
    }
    if (difficulty == 2) {
      //Impossible Difficulty
      cell = AIcreateFork();
      if (cell != "NONE") {
        return cell;
      }
      cell = AIforceBlock();
      if (cell != "NONE") {
        return cell;
      }
      cell = AIblockFork();
      if (cell != "NONE") {
        return cell;
      }
      //Middle Tile
      if (tiles[4] == "BLANK") {
        return 4;
      }
      //Opposite Corner
      if (tiles[2] == "X" && tiles[6] == "BLANK") {
        return 6;
      }
      if (tiles[6] == "X" && tiles[2] == "BLANK") {
        return 2;
      }
      if (tiles[0] == "X" && tiles[8] == "BLANK") {
        return 8;
      }
      if (tiles[8] == "X" && tiles[0] == "BLANK") {
        return 0;
      }
      //Empty Corner
      if (tiles[0] == "BLANK") {
        return 0;
      }
      if (tiles[2] == "BLANK") {
        return 2;
      }
      if (tiles[6] == "BLANK") {
        return 6;
      }
      if (tiles[8] == "BLANK") {
        return 8;
      }
      //Empty Side
      if (tiles[1] == "BLANK") {
        return 1;
      }
      if (tiles[3] == "BLANK") {
        return 3;
      }
      if (tiles[5] == "BLANK") {
        return 5;
      }
      if (tiles[7] == "BLANK") {
        return 7;
      }
    }
    return AIchooseRandom();
  }

  //Picks a cell that will cause the AI to win.
  function AIwinningMove() {
    for(var i = 0; i < 9; i++) {
      if(tiles[i] == "BLANK") {
        for (var j = 0; j < winningCombos.length; j++) {
          if((tiles[winningCombos[j][0]] == "O" || i == winningCombos[j][0]) && (tiles[winningCombos[j][1]] == "O" || i == winningCombos[j][1]) && (tiles[winningCombos[j][2]] == "O" || i == winningCombos[j][2])) {
            return i;
          }
        }
      }
    }
    return "NONE";
  }

  //Picks a cell that will block the opponent from winning.
  function AIblockWinning() {
    for(var i = 0; i < 9; i++) {
      if(tiles[i] == "BLANK") {
        for (var j = 0; j < winningCombos.length; j++) {
          if((tiles[winningCombos[j][0]] == "X" || i == winningCombos[j][0]) && (tiles[winningCombos[j][1]] == "X" || i == winningCombos[j][1]) && (tiles[winningCombos[j][2]] == "X" || i == winningCombos[j][2])) {
            return i;
          }
        }
      }
    }
    return "NONE";
  }

  //Picks a cell that will create a fork.
  function AIcreateFork() {
    for(var i = 0; i < 9; i++) {
      if(tiles[i] == "BLANK") {
        var forkCount = 0;
        for (var j = 0; j < winningCombos.length; j++) {
          var containsTile = false;

          //Checks the combination contains the tile to be checked.
          for(var k = 0; k < 3; k++) {
            if (winningCombos[j][k] == i) {
              containsTile = true;
            }
          }

          //Skips if the combination doesn't contain the tile to be checked.
          if (!containsTile) {
            continue;
          }
          var hasBranch = false;
          var hasBlank = false;

          for(var k = 0; k < 3; k++) {
            if (tiles[winningCombos[j][k]] == "O" && winningCombos[j][k] != i) {
              hasBranch = true;
            }
            if (tiles[winningCombos[j][k]] == "BLANK" && winningCombos[j][k] != i) {
              hasBlank = true;
            }
          }

          if (hasBranch && hasBlank) {
            forkCount++;
          }
        }
        if (forkCount >= 2) {
          return i;
        }

      }
    }
    return "NONE";
  }

  //Forces the opponent to move to a tile that will block the current move.
  function AIforceBlock() {
    for(var i = 0; i < 9; i++) {
      if(tiles[i] == "BLANK") {

        var forkCount = 0;
        var twoInRowCount = 0;

        for (var j = 0; j < winningCombos.length; j++) {
          var containsTile = false;
          var containsBlank = false;
          var containsCurrent = false;

          //Checks the combination contains the player's tile and a blank tile.
          for(var k = 0; k < 3; k++) {
            if (tiles[winningCombos[j][k]] == "O") {
              containsTile = true;
            }
            if (tiles[winningCombos[j][k]] == "BLANK" && winningCombos[j][k] != i && !checkFork("X", winningCombos[j][k])) {
              containsBlank = true;
            }
            if (winningCombos[j][k] == i) {
              containsCurrent = true;
            }
          }
          if (containsTile && containsBlank && containsCurrent) {
            twoInRowCount++;
          }
        }
        if (twoInRowCount != 0) {
          return i;
        }
      }
    }
    return "NONE";
  }

  //Checks the tile position for a fork.
  function checkFork(mark, tilePos) {
    var forkCount = 0;
    for (var i = 0; i < winningCombos.length; i++) {
      var containsTile = false;
      //Checks if the current tile is in the current combination.
      for (var j = 0; j < 3; j++) {
        if (winningCombos[i][j] == tilePos) {
          containsTile = true;
        }
      }
      //Skips to the next combination.
      if (!containsTile) {
        continue;
      }

      var hasBranch = false;
      var hasBlank = false;

      for(var k = 0; k < 3; k++) {
        if (tiles[winningCombos[i][k]] == mark && winningCombos[i][k] != tilePos) {
          hasBranch = true;
        }
        if (tiles[winningCombos[i][k]] == "BLANK" && winningCombos[i][k] != tilePos) {
          hasBlank = true;
        }
      }

      if (hasBranch && hasBlank) {
        forkCount++;
      }
    }
    return (forkCount >= 2);
  }

  //Picks a cell that will prevent the opponent from creating a fork.
  function AIblockFork() {
    for(var i = 0; i < 9; i++) {
      if(tiles[i] == "BLANK") {
        var forkCount = 0;
        for (var j = 0; j < winningCombos.length; j++) {
          var containsTile = false;

          //Checks the combination contains the tile to be checked.
          for(var k = 0; k < 3; k++) {
            if (winningCombos[j][k] == i) {
              containsTile = true;
            }
          }

          //Skips if the combination doesn't contain the tile to be checked.
          if (!containsTile) {
            continue;
          }
          var hasBranch = false;
          var hasBlank = false;

          for(var k = 0; k < 3; k++) {
            if (tiles[winningCombos[j][k]] == "X" && winningCombos[j][k] != i) {
              hasBranch = true;
            }
            if (tiles[winningCombos[j][k]] == "BLANK" && winningCombos[j][k] != i) {
              hasBlank = true;
            }
          }

          if (hasBranch && hasBlank) {
            forkCount++;
          }
        }
        if (forkCount >= 2) {
          return i;
        }

      }
    }
    return "NONE";
  }

  //Selects a random cell.
  function AIchooseRandom() {
    var rnd;
    do {
      rnd = Math.floor(Math.random() * 10);
    } while(tiles[rnd] != "BLANK");
    return rnd;
  }

  //Resets the board to it's initial state.
  function resetBoard() {
    turn = "X"; //Resets X to go first.
    for (var i = 0; i < 9; i++) {
      tiles[i] = "BLANK"; //Sets the value of the tile to Blank.
      var tileID = "tic" + (i+1);
      var canvas = document.getElementById(tileID);
      var ctx = canvas.getContext("2d");
      ctx.clearRect(0, 0, canvas.width, canvas.height); //Removes current drawings on the canvas.
      canvas.style.backgroundColor = "#272822"; //Resets the background colour of the canvases.
    }
  }

  //Checks if a player has won, or a draw has been reached.
  function checkBoard(mark) {
    //Checks if a player has won.
    for (var i = 0; i < winningCombos.length; i++) {
        if(tiles[winningCombos[i][0]] == mark && tiles[winningCombos[i][1]] == mark && tiles[winningCombos[i][2]] == mark) {
          displayButtonText(mark + " Wins!", "Score");
          document.getElementById("tic" + (winningCombos[i][0] + 1)).style.backgroundColor = "#0b0b09";
          document.getElementById("tic" + (winningCombos[i][1] + 1)).style.backgroundColor = "#0b0b09";
          document.getElementById("tic" + (winningCombos[i][2] + 1)).style.backgroundColor = "#0b0b09";
          gameState = "IDLE";
          return;
        }
    }

    //Checks if a draw has been reached.
    var draw = "T";
    for (var j = 0; j < 9; j++) {
      if (tiles[j] == "BLANK") {
        draw = "F";
      }
    }
    if (draw == "T") {
      displayButtonText("Draw!", "Score");
      gameState = "IDLE";
    }
  }

  //Adds text to a button canvas.
  function displayButtonText(text, canvasID) {
      var canvas = document.getElementById(canvasID);
      var ctx = canvas.getContext("2d");
      //ctx.font = "1.1em sans-serif";
      ctx.font = "1.75em sans-serif";
      ctx.fillStyle = "white";
      ctx.textAlign = "center";
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.fillText(text, canvas.width / 2, canvas.height / 1.65);
  }

});
