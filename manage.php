<!DOCTYPE html>

<!-- File Name: manage.php
Author: Nick Ang
Created 22/8/21
Description: This is the manage section -->

<!-- Set Viewport, Description, Author and Title -->

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="manage Page" />
  <meta name="keywords" content="manage, applications, search" />
  <meta name="author" content="Nick Ang" />
  <title>Manager Options</title>
  <!-- footer icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <!-- link stylesheet -->
  <link rel="stylesheet" href="styles/style.css" />
  <!-- link google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Noto+Serif+SC:wght@300;900&family=Raleway:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  <!-- define main container -->
  <div role="main" class="container">
    <?php
    include "header.inc";
    include "menu.inc";
    // include_once("footer.inc")
    ?>
    <!-- create background flex container -->
    <div class="card-container">
      <h1 class="title">Manager Options</h1>
      <!-- create card 1 -->
      <section class="card-container-inner">

        <h2>Fieldsets:</h1>
          <div class="col-md-12 head">
            <div class="btn">
              <a href="export.php" class="btn btn-success"><i class="dwn"></i> Export db as CSV</a>
            </div>
          </div>
          <br>
          <form method="post" action="eoi_display.php">
            <fieldset>
              <legend>List all EOIs</legend>

              <p class="row"> <label for="order">Order by:</label>
                <select name="order" id="order">
                  <option value="EOInumber">EOInumber</option>
                  <option value="ref No.">Ref No.</option>
                  <option value="first_name">First Name</option>
                  <option value="last_name">Last Name</option>
                  <option value="address">Address</option>
                  <option value="suburb">Suburb</option>
                  <option value="state">State</option>
                  <option value="postcode">Postcode</option>
                  <option value="email">Email</option>
                  <option value="phone">Phone</option>
                  <option value="skills">Skills</option>
                  <option value="Other">Other</option>
                  <option value="status">Status</option>
                </select>
              </p>
              <p class="row"> <label for="view">Order by:</label>
                <select name="view" id="view">
                  <option value="ASC">Ascending</option>
                  <option value="DESC">Descending</option>
                </select>
              </p>
              <p> <input type="submit" value="Search" /></p>
          </form>
          </fieldset>
          </form>
          <br>

          <form method="post" action="position_search.php">
            <fieldset>
              <legend>Search by Position Ref no.</legend>
              <p class="row"> <label for="ref">Ref no: </label>
                <input type="text" name="ref" id="ref" />
              </p>
              <p> <input type="submit" value="Search" /></p>
            </fieldset>
            <br>
          </form>

          <form method="post" action="candidate_search.php">
            <fieldset>
              <legend>Search by Candidate (First name, Last Name or both)</legend>
              <p class="row"> <label for="firstname">First Name: </label>
                <input type="text" name="firstname" id="firstname" />
              </p>
              <p class="row"> <label for="lastname">Last Name: </label>
                <input type="text" name="lastname" id="lastname" />
              </p>
              <p> <input type="submit" value="Search" /></p>
            </fieldset>
            <br>
          </form>

          <form method="post" action="delete.php">
            <fieldset>
              <legend>Delete all EOI's for a position ref no.</legend>
              <p class="row"> <label for="delref">Ref no: </label>
                <input type="text" name="delref" id="delref" />
              </p>
              <p> <input type="submit" value="Delete" /></p>
            </fieldset>
          </form>
          <br>

          <form method="post" action="change.php">
            <fieldset>
              <legend>Change an EOI status</legend>
              <p class="row"> <label for="id">EOI ID no: </label>
                <input type="text" name="id" id="id" />
              </p>
              <p class="row"> <label for="status">Status</label>
                <select name="status" id="status">
                  <option value="New">New</option>
                  <option value="Current">Current</option>
                  <option value="Final">Final</option>
                </select>
              </p>
              <p> <input type="submit" value="Update" /></p>
            </fieldset>
          </form>
          <br>
      </section>
    </div>
    <!-- Render Footer -->
    <?php
    include "footer.inc"
    ?>
  </div>
  <!-- turbulence filter enhancement -->
  <svg>
    <filter id="turbulence" x="0" y="0" width="100%" height="100%">
      <feturbulence id="banner-filter" numoctaves="1" seed="1" basefrequency="0.01 0.01"></feturbulence>
      <fedisplacementmap scale="1.5" in2="" in="SourceGraphic"></fedisplacementmap>
      <animate xlink:href="#banner-filter" attributename="baseFrequency" dur="60s" keytimes="0;0.5;1" values="0.1 0.06;0.04 0.08;0.02 0.06" repeatcount="indefinite" />
    </filter>
  </svg>
</body>

</html>
