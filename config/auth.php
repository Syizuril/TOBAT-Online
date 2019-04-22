<?php
  session_start();
  if(!isset($_SESSION["user"])) {
    header("Location: view/index.php");
  }else{
        switch ($_SESSION["level"]) {
          case 0:
            
            break;
          case 1 :
            header("Location: admin/index.php");
            break;
        }
  }
 ?>
