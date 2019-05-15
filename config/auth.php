<?php
  session_start();
  if(!isset($_SESSION["user"])) {
    header("Location: index.php");
  }else{
        switch ($_SESSION["level"]) {
          case 0:
            break;
          case 1 :
            header("Location: ../admin/index.php");
            break;
          case 2 :
            header("Location: ../apotek/index.php");
            break;
        }
  }
 ?>
