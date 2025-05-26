<?php
    session_start();
    session_unset();

    if(isset($_SESSION['admin_ID'])) {
        header('Location: index.php');
        exit();
      } else {
        session_destroy();
        header('Location: login.php');
      }

    
    exit();
?>