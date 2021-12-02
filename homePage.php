<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>TELEARC | Home</title>

    <link rel="stylesheet" href="css/homePage.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body style="background-image:url('pics/mainBackground.png')">

    <!-- Search Filters -->
    <div class="Search-filters flex-container">
      <!-- Report Status -->
        <div class="R-Status">
          <label for="Report-Status">Report Status</label>
          <select id="Report-Status" class="InputData Filter-Box" name="Report-Status">
            <option value="All">All</option>
            <option value="Unread">Unread</option>
            <option value="Finished">Finished</option>
            <option value="Sent">Sent</option>
          </select>
        </div>

        <!-- Date of Scan Filter -->
        <div class="Scan-Date-Filter">
          <button type="button" name="Today" class="Filter-Box">Today</button>
          <button type="button" name="This-Month" class="Filter-Box">This-Month</button>
          <!-- Custom Date Entery -->
          <div id="Custom-Scan-Date-Filter" class="flex-container">
            <select class="InputData Filter-Box" id="From-Date" name="From-Date">
              <option value="" disabled selected hidden>From</option>
              <option value="12">12</option>
              <option value="54">54</option>
              <option value="87">87</option>
            </select>
            <select class="InputData Filter-Box" id="To-Date" name="To-Date">
              <option value="" disabled selected hidden>To</option>
              <option value="112">112</option>
              <option value="154">154</option>
              <option value="187">187</option>
            </select>
          </div>
        </div>

        <!-- Scan Type Filters -->
        <div class="Type-Scan-Filter">
          <!-- Type of Scan -->
          <div class="Type-Scan">
            <label for="Scan-Type">Scan Type</label>
            <select class="InputData Filter-Box" name="Scan-Type">
              <option value="All">All</option>
              <option value="CT">CT</option>
              <option value="MRI">MRI</option>
            </select>
          </div>

          <!-- Scan Body part -->
          <div class="Part-Body">
            <label for="Body-Part">Body Part</label>
            <select class="InputData Filter-Box" name="Body-Part">
              <option value="All">All</option>
              <option value="Brain">Brain</option>
              <option value="Chest">Chest</option>
              <option value="Abdoment">Abdoment</option>
              <option value="limbs">limbs</option>
            </select>
          </div>
        </div>

        <!-- Link to Other Sections of the website -->
        <div class="Foriegn-Links">
          <a id="Market-Place" class="Filter-Box" href="marketPlace.php">Market Place</a>
          <a id="Redeem-Cash" class="Filter-Box" href="#">Redeem Cash</a>
          <a id="Logout" class="Filter-Box" href="loginPage.php">Logout</a>
        </div>

    </div>

    <!-- The Main Table -->
    <div class="Main-Table">
        <table rules=none id="Index-Table">
          <tr class="Head-Row">
            <th class="Header-column">Patient ID</th>
            <th class="Header-column">Name</th>
            <th class="Header-column">Age</th>
            <th class="Header-column">Sex</th>
            <th class="Header-column">Exam Date</th>
            <th class="Header-column">Upload Date</th>
            <th class="Header-column">History</th>
            <th class="Header-column">Attachments</th>
            <th class="Header-column">Report</th>
            <th class="Header-column">Report Status</th>
            <th class="Header-column">Type of Scan</th>
            <th class="Header-column">Sections/Images</th>
            <th class="Header-column">Study/Body Part</th>
            <th class="Header-column">Refered Physician</th>
          </tr>
          <tr class="Normal-Row" onclick="window.location='passingPage.php';">
            <td class="N-column">241603</td>
            <td class="N-column">Kamli Nath</td>
            <td class="N-column">29</td>
            <td class="N-column">Male</td>
            <td class="N-column">21-03-2021</td>
            <td class="N-column">23-03-2021</td>
            <td class="N-column">I don't know</td>
            <td class="N-column">None</td>
            <td class="N-column"><i class="fa fa-plus-square-o"></i>Add Report</td>
            <td class="N-column">Finished</td>
            <td class="N-column">CT</td>
            <td class="N-column">3/154</td>
            <td class="N-column">CT/Chest</td>
            <td class="N-column">Aloo Prashad Sane</td>
          </tr>
          <tr class="Normal-Row" onclick="window.location='passingPage.php';">
            <td class="N-column">241604</td>
            <td class="N-column">Kamli Nath ka bap</td>
            <td class="N-column">69</td>
            <td class="N-column">Female</td>
            <td class="N-column">21-03-2011</td>
            <td class="N-column">23-03-2011</td>
            <td class="N-column">I don't know</td>
            <td class="N-column">None</td>
            <td class="N-column">Send Report</td>
            <td class="N-column">sent</td>
            <td class="N-column">MRI</td>
            <td class="N-column">2/206</td>
            <td class="N-column">MRI/Brain</td>
            <td class="N-column">Aloo Prashad Sane</td>
          </tr>
        </table>
    </div>

  </body>

</html>
