<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  session_start();
  $_SESSION["currentImage"] = $_COOKIE['profile_viewer_uid'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>TELEARC | Work Station</title>

    <!-- CSS style sheet -->
    <link rel="stylesheet" href="css/workStation.css">

    <!-- Font awsome link -->
    <script src="https://kit.fontawesome.com/81dcf7244b.js" crossorigin="anonymous"></script>

  </head>

  <body>

    <!-- Literaly contains everything in the body except the javaScript -->
    <div class="Body-Container">

      <!-- Contains the code for the left black area or the tool bars -->
      <div class="Container-Left">

        <!-- Container for the Slide Bars -->
        <div class="SlideBarContainer">

          <div class="SliderContainer-I Brightness-Slider">
            <label for="brightness-bar">Brightness</label><br>
            <input type="range" min="0" max="100" value="50" class="slider" name="brightness-bar" id="brightness-bar">
          </div>

          <div class="SliderContainer-I Zoom-Slider">
            <label for="Zoom-bar">Zoom</label><br>
            <input type="range" min="0" max="100" value="1" class="slider" name="Zoom-bar" id="Zoom-bar">
          </div>

          <div class="SliderContainer-I ImageNumber-Slider">
            <label for="ImageNumber-bar">Image Number</label><br>
            <input type="range" min="0" max="75" value="0" class="slider" number="ImageNumber-bar" id="ImageNumber-bar">
          </div>

        </div>

        <!-- Container for different function icons -->
        <div class="functionIconContainer">
          
        </div>

      </div>

      <!-- Container for the main image -->
      <div class="ImageContainer">
        <div id="Image-Area">
          <?php
            echo '<img src=' . $_SESSION["currentImage"] . ' id="Main-Image">';
          ?>
        </div>
      </div>

    </div>

    <script type="text/javascript">

      // This code controls the amount of zoom for the image according to the scrolebar
      document.getElementById("Zoom-bar").oninput = function() {
        var ZoomValue = parseInt(document.getElementById("Zoom-bar").value);

        zoomValue = 100+ZoomValue
        console.log(zoomValue.toString()+"%");
        document.getElementById("Main-Image").style.width = 100+ZoomValue+"%";
        document.getElementById("Main-Image").style.height = 100+ZoomValue+"%";
      };

      // This code controls the brightness of the image based on the scrolebar
      document.getElementById("brightness-bar").oninput = function() {
        var brightValue = parseInt(document.getElementById("brightness-bar").value);

        brightValue = 2*brightValue
        console.log(brightValue.toString()+"%");
        document.getElementById("Main-Image").style.filter = "brightness("+brightValue.toString()+"%)";
      };

      // This code controls the number of image based on the scrolebar
      document.getElementById("ImageNumber-bar").oninput = function() {

        var imageNumber = document.getElementById("ImageNumber-bar").value;
        if (imageNumber < 10){
          imageNumber = "0" + imageNumber;
        }
        var imageLoc = "images/test1/frame_" + imageNumber + "_delay-0.01s.jpg"

        document.getElementById("Main-Image").src = imageLoc.replace(/\s/g, '');
        document.cookie="profile_viewer_uid="+imageLoc.replace(/\s/g, '');+"";
      };

    </script>

  </body>

</html>
