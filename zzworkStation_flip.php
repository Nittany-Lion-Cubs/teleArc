<?php
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

    <!-- Container for the left hand toolbar and main pic -->
    <div id="Top-Container">

      <!-- LEFT Toolbar -->
      <div id="Left-Toolbar">

        <!-- options like back button and menu bar -->
        <div class="Top-options">
          <!-- Back Button -->
          <a href="homePage.php" class="Back-Button">
            <i class="fas fa-arrow-left"></i>
          </a>

          <!-- Menu option -->
          <i class="fas fa-bars menu-bar"></i>
        </div>


        <!-- Account of images -->
        <div class="Image-collection-container">

          <div class="Image-collection-box-1 Image-collection-box">
            <img src="pics/brain01.jpg" name="Image-box-1" id="Image-box-1" class="Image-box">
            <span id="Image-box-span-1" class="Image-box-span">(23/49)</span>
          </div>

          <div class="Image-collection-box-2 Image-collection-box">
            <img src="pics/lung.jpg" name="Image-box-2" id="Image-box-2" class="Image-box">
            <span id="Image-box-span-2" class="Image-box-span">(23/49)</span>
          </div>

          <div class="Image-collection-box-3 Image-collection-box">
            <img src="pics/neck.jpg" name="Image-box-3" id="Image-box-3" class="Image-box">
            <span id="Image-box-span-3" class="Image-box-span">(23/49)</span>
          </div>

        </div>

        <div id="Image-Filters-Container">
          <select id="Image-Filters">
            <option value="" disabled selected hidden>Filters</option>
            <option value="Default Window">Default Window</option>
            <option value="Invert Window">Invert Window</option>
            <option value="CT: Abdomen">CT: Abdomen</option>
            <option value="CT:Bone">CT:Bone</option>
            <option value="CT:Brain">CT:Brain</option>
            <option value="CT:Liver">CT:Liver</option>
            <option value="CT:Lungs">CT:Lungs</option>
            <option value="CT: Mediastinum">CT: Mediastinum</option>
            <option value="CT:Postmyelo">CT:Postmyelo</option>
            <option value="CT:Spine">CT:Spine</option>
            <option value="MR:Bone">MR:Bone</option>
          </select>
        </div>

      </div>

      <!-- Main Picture -->
      <div id="Image-Area">
        <?php
          echo '<img src=' . $_SESSION["currentImage"] . ' id="theMainImage" style="transform: scaleY(-1); padding-bottom: 2%;">';
        ?>
      </div>

    </div>

    <!-- Container for the bottom toolbar -->
    <div id="Bottom-Toolbar">

      <!-- Just as the name suggests it is to fill the space -->
      <div id="Empty-Gapfiller"></div>

      <!-- The Bottom tool bar -->
      <div id="Bottom-ToolBar-Main-container">
        <div id="Bottom-ToolBar-Main">

          <!-- Default Pointer -->
          <a class="BottomBar-element" id="pointer" href="workStation.php">
            <i class="fas fa-mouse-pointer icon"></i>
            <span class="tooltip">pointer</span>
          </a>
          <!-- Stack scroll -->
          <a class="BottomBar-element" id="StackScroll" href="zzworkStation_stackScroll.php">
            <i class="fas fa-layer-group icon"></i>
            <span class="tooltip">Stack Scroll</span>
          </a>
          <!-- Zoom Tool -->
          <a class="BottomBar-element" id="Zoom" href="zzworkStation_zoom.php">
            <i class="fas fa-search-plus icon"></i>
            <span class="tooltip">Zoom</span>
          </a>
          <!-- Reset all Tools -->
          <a class="BottomBar-element" id="Reset" href="zzworkStation_reset.php">
            <i class="far fa-window-restore icon"></i>
            <span class="tooltip">Reset</span>
          </a>
          <!-- Measure desity/Hounsfield unit -->
          <a class="BottomBar-element" id="HU" href="zzworkStation_HU.php">
            <i id="HU-Span icon">HU</i>
            <span class="tooltip">Hounsfield Unit</span>
          </a>
          <!-- MPR Measurements -->
          <a class="BottomBar-element" id="MPR" href="zzworkStation_MPR.php">
            <i id="MPR-Span icon">MPR</i>
            <span class="tooltip">MPR</span>
          </a>
          <!-- MIP Measurements -->
          <a class="BottomBar-element" id="MIP" href="zzworkStation_.php">
            <i id="MIP-Span icon">MIP</i>
            <span class="tooltip">MIP</span>
          </a>
          <!-- Flip the Image Upside-down -->
          <a class="BottomBar-element" id="Flip" href="zzworkStation_flip.php">
            <i class="fab fa-flipboard icon"></i>
            <span class="tooltip">Flip</span>
          </a>
          <!-- Adjust the brightness of the image -->
          <a class="BottomBar-element" id="Brightness" href="zzworkStation_brightness.php">
            <i class="fas fa-adjust icon"></i>
            <span class="tooltip">Brightness</span>
          </a>
          <!-- Allow to create a circle then show all the image states -->
          <a class="BottomBar-element" id="MeasureAllCircle" href="zzworkStation_measureAllCircle.php">
            <i class="fas fa-weight icon"></i>
            <span class="tooltip">Measure ROI</span>
          </a>
          <!-- Allow user to mark points -->
          <a class="BottomBar-element" id="Mark-Highlight" href="zzworkStation_markHighlight.php">
            <i class="fas fa-highlighter icon"></i>
            <span class="tooltip">Marker</span>
          </a>
          <!-- Allow user to mark point then show its cobb angle -->
          <a class="BottomBar-element" id="CobbAngle" href="zzworkStation_cobbAngle.php">
            <i class="fas fa-ruler-combined icon"></i>
            <span class="tooltip">Cobb Angle</span>
          </a>
          <!-- Allow user to add text -->
          <a class="BottomBar-element" id="AddText" href="zzworkStation_addText.php">
            <i class="fas fa-font icon"></i>
            <span class="tooltip">Add Text</span>
          </a>
          <!-- Allow user to Flip image side ways -->
          <a class="BottomBar-element" id="Mirror" href="zzworkStation_mirror.php">
            <i class="fas fa-columns icon"></i>
            <span class="tooltip">Mirror</span>
          </a>
          <!-- Allow user to mark points then show distance between them -->
          <a class="BottomBar-element" id="Ruler-Scale" href="zzworkStation_rulerScale.php">
            <i class="fas fa-ruler icon"></i>
            <span class="tooltip">Ruler</span>
          </a>
          <!-- Allow user to mark points then show angle between them -->
          <a class="BottomBar-element" id="Compass" href="zzworkStation_compass.php">
            <i class="fas fa-drafting-compass icon"></i>
            <span class="tooltip">Compass</span>
          </a>
          <!-- Display the patient History -->
          <a class="BottomBar-element" id="PatientHistory" href="zzworkStation_patientHistory.php">
            <i class="fas fa-file-medical-alt icon"></i>
            <span class="tooltip">Patient History</span>
          </a>
          <!-- Show or hide the text on the screen -->
          <a class="BottomBar-element" id="ShowHideText" href="zzworkStation_showHideText.php">
            <i class="fas fa-eye-slash icon"></i>
            <span class="tooltip">Show/Hide Text</span>
          </a>
          <!-- Show or hide all the measurements on the screen -->
          <a class="BottomBar-element" id="ShowHideMeasurment" href="zzworkStation_showHideMeasurement.php">
            <i class="far fa-eye-slash icon"></i>
            <span class="tooltip">Show/Hide Measurements</span>
          </a>
          <!-- Delete the selected measurements that were marked by user -->
          <a class="BottomBar-element" id="DeleteSelected" href="zzworkStation_deleteSelected.php">
            <i class="fas fa-minus-circle icon"></i>
            <span class="tooltip">Delete Selected</span>
          </a>
          <!-- Delete all the measurements that were marked by user -->
          <a class="BottomBar-element" id="DeleteAll" href="zzworkStation_deleteAll.php">
            <i class="fas fa-trash-alt icon"></i>
            <span class="tooltip">Delete All</span>
          </a>
          <!-- All user to set shortcuts -->
          <a class="BottomBar-element" id="Shortcuts" href="zzworkStation_shortcuts.php">
            <i class="fas fa-keyboard icon"></i>
            <span class="tooltip">Shortcuts</span>
          </a>

        </div>
      </div>

    </div>

  </body>

</html>
