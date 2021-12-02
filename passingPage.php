<?php

  session_start();
  $_SESSION["currentImage"] = "images/test1/frame_00_delay-0.01s.jpg";
  header("Location: workStation.php");

?>
