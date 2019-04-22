<?php
  session_start();
  if(!isset($_SESSION["user"])) {
    header("Location: ../index.php");
  }else{
        switch ($_SESSION["level"]) {
          case 0:
            header("Location: ../view/index.php");
            break;
          case 1:
            break;
          default:
            break;
        }
  }
 ?>
