<!DOCTYPE html>

<!-- File Name: phpenhancements.php
Author: Nick Ang
Created 22/8/21
Description: This is the php enhancements section -->

<!-- Set Viewport, Description, Author and Title -->

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Enhancements 3 Page" />
  <meta name="keywords" content="Enhancements, php, mysql" />
  <meta name="author" content="Nick Ang" />
  <title>Enhancements 3</title>
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
      <h1 class="title">Enhancements 3</h1>
      <!-- create card 1 -->
      <section class="card-container-inner">
        <h2>Enhancement 1: Export to CSV</h2>
        <h3>How does it go beyond the basic requirements</h3>
        <ul>
          <li>
            Allows the user to export the entire DB to an excel file.
          </li>
        </ul>
        <h3>What code is needed to implement it:</h3>
        <ul>
          <li>
            A button is available on the manage.php page to export
          </li>
          <li>
            On submit, the export.php is actioned which connects the db.
          </li>
          <li>
            The data is then filtered, filename is set, column names set and records fetched
          </li>
          <li>
            The result is a downloadable excel file with the db info
          </li>
        </ul>
        <h3>Where has this been used:</h3>
        <ul>
          <li>
            On manage page
            <a href="./manage.php">manage</a>
          </li>
        </ul>
        <h3>
          Technique sourced from:
          <a target="_blank" href="https://www.codexworld.com/export-data-to-excel-in-php/">link to excel technique</a>
        </h3>
        <br />
      </section>

      <!-- create card 2 -->
      <section class="card-container-inner">
        <h2>Enhancement 2: Manager Can Sort Database</h2>
        <h3>How does it go beyond the basic requirements</h3>
        <ul>
          <li>
            This enhancement allows the manager to manipulate the database and sort records by whichever field they like in ascending or descending order which can save alot of time when trying to find a record.
          </li>
        </ul>
        <h3>What code is needed to implement it:</h3>
        <ul>
          <li>
            A form on the manage.php page allows the manager to specify which field to sort by and a second field allows them to choose whether ascending or descending.
          </li>
          <li>
            Once selected, the form sends the fields and the variables can be used in the "ORDER BY" SQL query
          </li>
        </ul>
        <h3>Where has this been used:</h3>
        <ul>
          <li>
            In the manage.php page under the list all EOI's form
            <a href="./manage.php">Manage</a>
          </li>
        </ul>
        <h3>
          Technique inspired by:
          <p>Swinburne lecture notes and assignment 3 brief</p>
        </h3>
        <br />
      </section>

      <!-- create card 3 -->
      <section class="card-container-inner">
        <h2>References</h2>
        <h3>Learning Material Resources:</h3>
        <ul>
          <li>
            Excel Export:
            <a target="_blank" href="https://www.codexworld.com/export-data-to-excel-in-php/">link to codexworld</a>
          </li>
          <li>
            Learning Resources:
            <a target="_blank" href="https://www.w3schools.com">https://www.w3schools.com</a>
          </li>
          <li>COS60004 Swinburne Lecture Notes: See Canvas</li>
        </ul>
        <h3>Content Material Resources:</h3>
        <ul>
          <li>
            Images:
            <a target="_blank" href="https://unsplash.com/">https://unsplash.com/</a>
          </li>
        </ul>
        <br />
      </section>
    </div>

    <!-- Render Footer -->
    <?php
    include "footer.inc"
    ?>

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
