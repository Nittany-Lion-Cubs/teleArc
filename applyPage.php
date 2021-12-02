<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>TELEARC | Apply</title>

    <link rel="stylesheet" href="css/applyPageOption2.css">
    <!-- <link rel="stylesheet" href="css/applyPage.css"> -->
  </head>

  <body style="background-image:url('pics/mainBackground.png')">

    <!-- Page heading -->
    <h1 id="Page-heading">TELEARC</h1>

    <!-- The Form -->
    <form class="Apply-form">

      <div class="form-element">

        <p class="Form-Divition">Personal Information</p>
        <br>

        <!-- Application Name -->
        <div class="NameInput TextInput">
          <label for="Name">Full Name</label>
          <input type="text" id="Name" class="InputData" name="fullname" placeholder="Your name.." required>
        </div>

        <!-- Application Email -->
        <div class="EmailInput TextInput">
          <label for="Email">Email</label>
          <input type="email" id="Email" class="InputData" name="Email" placeholder="Your email.." required>
        </div>

        <!-- Application Number -->
        <div class="NumberInput TextInput">
          <label for="Number">Number</label>
          <input type="text" class="InputData" id="Number" name="Number" placeholder="Your number.." required>
        </div>

        <!-- Application State -->
        <div class="StateInput TextInput">
          <label for="State">State</label>
          <select id="State" class="InputData" name="State" required>
            <option value="" disabled selected hidden>Select One...</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="National Capital (Delhi)">National Capital (Delhi)</option>
            <option value="Odisa">Odisa</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
          </select>
        </div>

        <!-- Application Signature -->
        <br>
        <fieldset class="SignatureInput TextInput FileInput">
          <legend>Your Signature</legend>
          <label for="Signature"></label>
          <input type="file" class="InputData InputFile" id="Signature" name="Signature" required>
        </fieldset>

      </div>
      <div class="form-element">

        <p class="Form-Divition">Official Information</p>
        <br>

        <!-- Application MBBS Degree -->
        <fieldset class="MBBSInput TextInput FileInput">
          <legend>MBBS or Equivalent Degree</legend>
          <label for="MBBS"></label>
          <input type="file" class="InputData InputFile" id="MBBS" name="MBBS" required>
        </fieldset>
        <br><br>

        <!-- Application MD Degree -->
        <fieldset class="MDInput TextInput FileInput">
          <legend>MD in Radiology or Equivalent Degree</legend>
          <label for="MD"></label>
          <input type="file" class="InputData InputFile" id="MD" name="MD" required>
        </fieldset>
        <br><br>

        <!-- Application License -->
        <fieldset class="LicenseInput TextInput FileInput">
          <legend>License to Practice</legend>
          <label for="License"></label>
          <input type="file" class="InputData InputFile" id="License" name="License" required>
        </fieldset>
        <br><br>

        <!-- Application Diplomas -->
        <fieldset class="DiplomasInput TextInput FileInput">
          <legend>Additional Diplomas</legend>
          <label for="Diplomas"></label>
          <input type="file" class="InputData InputFile" id="Diplomas" name="Diplomas" multiple>
        </fieldset>
        <br><br>

        <!-- Application Specialisation -->
        <fieldset class="SpecialisationInput TextInput FileInput">
          <legend>Sub Specialisation Degree</legend>
          <label for="Specialisation"></label>
          <input type="file" class="InputData InputFile" id="Specialisation" name="Specialisation" multiple>
        </fieldset>
        <br><br>

        <!-- Application Fellowship -->
        <fieldset class="FellowshipInput TextInput FileInput">
          <legend>Fellowship Degree</legend>
          <label for="Fellowship"></label>
          <input type="file" class="InputData InputFile" id="Fellowship" name="Fellowship" multiple>
        </fieldset>
        <br><br>

        <!-- Application Fellowship -->
        <fieldset class="LORInput TextInput FileInput">
          <legend>Letters of Recomendation</legend>
          <label for="LOR"></label>
          <input type="file" class="InputData InputFile" id="LOR" name="LOR" multiple>
        </fieldset>
        <br>

      </div>

      <div class="form-element">

        <!-- Buttons to transfer you to other pages -->
        <div class="Transfer-Buttons">
          <a href="#"><button type="button" name="button" id="Submit-button">Submit</button></a>
        </div>

      </div>

    </form>

    <br><br><br><br>



  </body>

</html>
