<?php
  function generateLanguages() {
    for ($i = 0; $i < func_num_args(); $i++) {

      switch(func_get_arg($i)) {
        case "C#":
          $image = "<img src='images/csharp.png' alt='C#'>";
          break;
        case "Java":
          $image = "<img src='images/java.png' alt='Java'>";
          break;
        case "HTML":
          $image = "<img src='images/html.png' alt='HTML'>";
          break;
        case "CSS":
          $image = "<img src='images/css.png' alt='CSS'>";
          break;
        case "JavaScript":
          $image = "<img src='images/javascript.png' alt='JavaScript'>";
          break;
        case "Ruby":
          $image = "<img src='images/ruby.png' alt='Ruby'>";
          break;
        case "Visual Basic":
          $image = "<img src='images/visualbasic.jpg' alt='Visual Basic'>";
          break;
        case "jQuery":
          $image = "<img src='images/jquery.png' alt='jQuery'>";
          break;
        case "SQLite":
          $image = "<img src='images/sqlite.png' alt='SQLite'>";
          break;
        case "Bootstrap":
          $image = "<img src='images/bootstrap.png' alt='Bootstrap'>";
          break;
        default:
          $image = "";
      }

      echo "<div class='chip'>" . $image . func_get_arg($i) . "</div>";
    }
  }

?>
