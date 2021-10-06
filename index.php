<!DOCTYPE html>

<!-- File Name: Index.php
Author: Nick Ang
Created 22/8/21
Description: This is the home page -->

<!-- Set Viewport, Description, Author and Title -->

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="description" content="Home page for company" />
  <meta name="keywords" content="Jobs, IT, company, software" />
  <meta name="author" content="Nick Ang" />
  <title>IT Hiring Solutions Home Page</title>
  <!-- footer icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <!-- linnk stylesheet -->
  <link rel="stylesheet" href="styles/style.css" />
  <!-- link font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Noto+Serif+SC:wght@300;900&family=Raleway:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  <!-- main container -->
  <div class="container">
    <?php
    include("header.inc");
    include("menu.inc");

    ?>
    <!-- create banner -->
    <div class="banner">
      <h1>Welcome to IT Hiring Solutions</h1>
      <h2>Your one stop shop for IT jobs and careers</h2>
      <a class="btn-treehouse" href="./jobs.php">Open Positions</a>
    </div>

    <!-- Render Footer -->
    <?php
    include("footer.inc")
    ?>

    <!-- turbulence filter -->
    <svg>
      <filter id="turbulence" x="0" y="0" width="100%" height="100%">
        <feturbulence id="banner-filter" numoctaves="50" seed="1" basefrequency="0.01 0.01"></feturbulence>
        <fedisplacementmap scale="1.5" in2="" in="SourceGraphic"></fedisplacementmap>
        <animate xlink:href="#banner-filter" attributename="baseFrequency" dur="60s" keytimes="0;0.5;1" values="0.1 0.06;0.04 0.08;0.02 0.06" repeatcount="indefinite" />
      </filter>
    </svg>
</body>

</html>
