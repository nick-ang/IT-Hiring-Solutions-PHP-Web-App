<!DOCTYPE html>

<!-- File Name: apply.php
Author: Nick Ang
Created 22/8/21
Description: This is the apply page -->

<!-- Set Viewport, Description, Author and Title -->

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Application Form" />
  <meta name="keywords" content="Application Form, Personal Details, Address, Skills" />
  <meta name="author" content="Nick Ang" />
  <title>Apply</title>
  <!-- footer icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <!-- link stylesheet -->
  <link rel="stylesheet" href="styles/style.css" />
  <!-- link google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Noto+Serif+SC:wght@300;900&family=Raleway:wght@300&display=swap" rel="stylesheet" />
  <!-- Link JavaScript script -->
</head>

<body>
  <!-- define main container -->
  <div class="container">
    <?php
    include("header.inc");
    include("menu.inc");
    // include_once("footer.inc")
    ?>
    <!-- create background image container -->
    <div class="card-container">
      <h1 class="title">Apply</h1>
      <!-- create blue card -->
      <div class="card-container-inner">
        <!-- create form -->
        <section class="form">
          <h2>Please fill out the form below and press apply now</h2>
          <!-- define form and implement php test -->
          <form id="regform" class="form" method="post" action="processEOI.php" novalidate=”novalidate”>
            <fieldset>
              <legend>Personal Details:</legend>
              <p>
                <label for="ref">Ref No.</label>
                <input type="text" readonly="readonly" name="ref" id="ref" pattern="^[a-zA-Z0-9]{5}$" required="required" value="" />
              </p>
              <p>
                <label for="firstname">First name</label>
                <input type="text" name="firstname" id="firstname" pattern="^[a-zA-Z]{1,20}$$" required="required" />
              </p>
              <p>
                <label for="lastname">Last name</label>
                <input type="text" name="lastname" id="lastname" pattern="^[a-zA-Z]{1,20}$$" required="required" />
              </p>
              <p>
                <label for="dob">Date of Birth</label>
                <input type="text" name="dob" id="dob" placeholder="dd/mm/yyyy" pattern="^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$" required="required" />
                <span class="alert" id="error-dob"></span>
              </p>
            </fieldset>

            <fieldset>
              <legend>Gender:</legend>
              <p>
                <label for="male"></label>
                <input type="radio" name="gender" id="male" value="male" />Male
                <label for="female"></label>
                <input type="radio" name="gender" id="female" value="female" required />Female
                <label for="neutral"></label>
                <input type="radio" name="gender" id="neutral" value="neutral" />Prefer not to say
              </p>
            </fieldset>
            <fieldset>
              <legend>Address Details:</legend>
              <p>
                <label for="street">Street Address</label>
                <input type="text" name="street" id="street" pattern="^[\sa-zA-Z0-9 ]{1,40}$" required="required" />
              </p>

              <p>
                <label for="suburb">Suburb/Town</label>
                <input type="text" name="suburb" id="suburb" pattern="^^[\sa-zA-Z0-9 ]{1,40}$$" required="required" />
              </p>

              <p>
                <label for="state">Your state</label>
                <select name="state" id="state" required="required">
                  <option value="">Please Select</option>
                  <option value="VIC">VIC</option>
                  <option value="NSW">NSW</option>
                  <option value="QLD">QLD</option>
                  <option value="NT">NT</option>
                  <option value="WA">WA</option>
                  <option value="SA">SA</option>
                  <option value="VIC">VIC</option>
                  <option value="TAS">TAS</option>
                  <option value="ACT">ACT</option>
                </select>
              </p>
              <p>
                <label for="postcode">Postcode</label>
                <input type="text" name="postcode" id="postcode" pattern="^[0-9]{4}$" required="required" />
                <span class="alert" id="error-postcode"></span>
              </p>
            </fieldset>

            <fieldset>
              <legend>Contact Details:</legend>
              <p>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$" required="required" />
              </p>
              <p>
                <label for="number">Phone Number</label>
                <input type="text" name="number" id="number" pattern="^[0-9\s]{8,12}$" required="required" />
              </p>
            </fieldset>

            <fieldset>
              <legend>Skills:</legend>
              <label for="html">HTML</label>
              <input type="checkbox" id="html" name="html" value="html" />
              <label for="css">CSS</label>
              <input type="checkbox" id="css" name="css" value="css" />
              <label for="javascript">JavaScript</label>
              <input type="checkbox" id="javascript" name="javascript" value="javascript" />
              <label for="php">PHP</label>
              <input type="checkbox" id="php" name="php" value="php" />
              <label for="mysql">mysql</label>
              <input type="checkbox" id="mysql" name="mysql" value="mysql" />
              <label for="other">Other Skills:</label>
              <input type="checkbox" id="other" name="other" value="Other skills" />
              <br />
              <br />
              <!-- JavaScript Form Check Alert Message -->
              <span class="alert" id="error-text"></span>
              <br />
              <textarea id="text" name="text" rows="4" cols="31" placeholder="Write description of your other skills here......."></textarea>
            </fieldset>

            <button class="btn-treehouse" type="submit" value="Submit">
              Apply
            </button>
            <button class="btn-treehouse" type="reset" value="Reset">
              Reset Form
            </button>
          </form>
        </section>
      </div>
    </div>

    <!-- Render Footer -->
    <?php
    include("footer.inc")
    ?>

    <!-- turbulence filter enhancement -->
    <svg>
      <filter id="turbulence" x="0" y="0" width="100%" height="100%">
        <feturbulence id="banner-filter" numoctaves="1" seed="1" basefrequency="0.01 0.01"></feturbulence>
        <fedisplacementmap scale="1.5" in2="" in="SourceGraphic"></fedisplacementmap>
        <animate xlink:href="#banner-filter" attributename="baseFrequency" dur="60s" keytimes="0;0.5;1" values="0.1 0.06;0.04 0.08;0.02 0.06" repeatcount="indefinite" />
      </filter>
    </svg>

    <script src="./scripts/enhancements.js"></script>
    <script src="./scripts/apply.js"></script>
</body>

</html>
