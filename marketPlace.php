<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>TELEARC | Market Place</title>

    <link rel="stylesheet" href="css/marketPlace.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body style="background-image:url('pics/mainBackground.png')">

    <!-- The Navbar -->
    <div class="topnav">
      <a href="homePage.php" class="back-button nav-item"><i class="fa fa-arrow-left"></i></a>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Filters for the search -->
    <div class="Search-Filter-Container">

      <!-- Scan Type filter -->
      <label for="Scan-Type-Filter" class="Filter-Label">Scan Type: </label>
      <select class="Scan-Type-Filter Search-Filter" name="Scan-Type-Filter">
        <option value="All">All</option>
        <option value="CT">CT</option>
        <option value="MRI">MRI</option>
      </select>

      <!-- Body part Filter -->
      <label for="Body-Part-Filter" class="Filter-Label">Body Part: </label>
      <select class="Body-Part-Filter Search-Filter" name="Body-Part-Filter">
        <option value="All">All</option>
        <option value="Brain">Brain</option>
        <option value="Bone">Bone</option>
        <option value="Chest">Chest</option>
        <option value="Abdomen">Abdomen</option>
        <option value="Spine">Spine</option>
      </select>

      <!-- The Money Amount Bar -->
      <div class="Money-Bar">
        TODO -> Add Range Slider using JavaScript
      </div>

    </div>

    <br><br>


    <!-- Options for the doctor to choice from -->
    <div class="Scan-Listing-Container">

      <!-- Single Option -->
      <div class="Scan-Listing">
        <!-- options on the left (for managing the flex) -->
        <div class="Left-Listing">
          <span class="TypeOfScan Listing-element Listing-element-left">MRI/Brain</span>
          <span class="PatientHistory Listing-element Listing-element-left">Got into a fight with Papu Rangila</span>
          <span class="Deadline Listing-element Listing-element-left">23 December, 2021</span>
        </div>
        <!-- options on the right (for managing the flex) -->
        <div class="Right-Listing">
          <span class="CashForScan Listing-element Listing-element-right">&#8377; 800</span>
          <button class="Submit-button Listing-element Listing-element-right" name="Select">Select</button>
        </div>
      </div>

      <!-- Duplicate sample for Scan listings -->
      <div class="Scan-Listing"><div class="Left-Listing"><span class="TypeOfScan Listing-element Listing-element-left">CT/BONE</span><span class="PatientHistory Listing-element Listing-element-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span><span class="Deadline Listing-element Listing-element-left">22 December, 2021</span></div><div class="Right-Listing"><span class="CashForScan Listing-element Listing-element-right">&#8377; 300</span><button class="Submit-button Listing-element Listing-element-right" name="Select">Select</button></div></div>
      <div class="Scan-Listing"><div class="Left-Listing"><span class="TypeOfScan Listing-element Listing-element-left">CT/BONE</span><span class="PatientHistory Listing-element Listing-element-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span><span class="Deadline Listing-element Listing-element-left">22 December, 2021</span></div><div class="Right-Listing"><span class="CashForScan Listing-element Listing-element-right">&#8377; 300</span><button class="Submit-button Listing-element Listing-element-right" name="Select">Select</button></div></div>
      <div class="Scan-Listing"><div class="Left-Listing"><span class="TypeOfScan Listing-element Listing-element-left">CT/BONE</span><span class="PatientHistory Listing-element Listing-element-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span><span class="Deadline Listing-element Listing-element-left">22 December, 2021</span></div><div class="Right-Listing"><span class="CashForScan Listing-element Listing-element-right">&#8377; 300</span><button class="Submit-button Listing-element Listing-element-right" name="Select">Select</button></div></div>
      <div class="Scan-Listing"><div class="Left-Listing"><span class="TypeOfScan Listing-element Listing-element-left">CT/BONE</span><span class="PatientHistory Listing-element Listing-element-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span><span class="Deadline Listing-element Listing-element-left">22 December, 2021</span></div><div class="Right-Listing"><span class="CashForScan Listing-element Listing-element-right">&#8377; 300</span><button class="Submit-button Listing-element Listing-element-right" name="Select">Select</button></div></div>
      <div class="Scan-Listing"><div class="Left-Listing"><span class="TypeOfScan Listing-element Listing-element-left">CT/BONE</span><span class="PatientHistory Listing-element Listing-element-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span><span class="Deadline Listing-element Listing-element-left">22 December, 2021</span></div><div class="Right-Listing"><span class="CashForScan Listing-element Listing-element-right">&#8377; 300</span><button class="Submit-button Listing-element Listing-element-right" name="Select">Select</button></div></div>
      <div class="Scan-Listing"><div class="Left-Listing"><span class="TypeOfScan Listing-element Listing-element-left">CT/BONE</span><span class="PatientHistory Listing-element Listing-element-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span><span class="Deadline Listing-element Listing-element-left">22 December, 2021</span></div><div class="Right-Listing"><span class="CashForScan Listing-element Listing-element-right">&#8377; 300</span><button class="Submit-button Listing-element Listing-element-right" name="Select">Select</button></div></div>
      <div class="Scan-Listing"><div class="Left-Listing"><span class="TypeOfScan Listing-element Listing-element-left">CT/BONE</span><span class="PatientHistory Listing-element Listing-element-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span><span class="Deadline Listing-element Listing-element-left">22 December, 2021</span></div><div class="Right-Listing"><span class="CashForScan Listing-element Listing-element-right">&#8377; 300</span><button class="Submit-button Listing-element Listing-element-right" name="Select">Select</button></div></div>

    </div>

  </body>

</html>
