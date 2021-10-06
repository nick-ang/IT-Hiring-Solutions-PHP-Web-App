<!DOCTYPE html>

<!-- File Name: enhancements.php
Author: Nick Ang
Created 22/8/21
Description: This is the  about section -->

<!-- Set Viewport, Description, Author and Title -->

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Enhancements 2 Page" />
  <meta name="keywords" content="Enhancements, JavaScript, API, Clock" />
  <meta name="author" content="Nick Ang" />
  <title>Enhancements 2</title>
  <!-- footer icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <!-- link stylesheet -->
  <link rel="stylesheet" href="styles/style.css" />
  <!-- link google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Noto+Serif+SC:wght@300;900&family=Raleway:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  <!-- define main container -->
  <div class="container">
    <?php
    include("header.inc");
    include("menu.inc");
    // include_once("footer.inc")
    ?>
    <!-- create background flex container -->
    <div class="card-container">
      <h1 class="title">Enhancements 2</h1>
      <!-- create card 1 -->
      <section class="card-container-inner">
        <h2>Enhancement 1: Adzuna API Job Search</h2>
        <h3>How does it go beyond the basic requirements</h3>
        <ul>
          <li>
            This enhancement allows the user to view external advertised
            positions on Adzuna using the Adzuna API. You can use the search
            bar in the aside to search for any position. The form still
            submits to the swinburne php script but pressing back runs the API
            and the job you searched for should return 5 results. Developer
            has been put as the default value. This enhancement uses API calls
            and fetch using javaScript which goes beyond the basic
            requirements.
          </li>
        </ul>
        <h3>What code is needed to implement it:</h3>
        <ul>
          <li>
            First the html needs to be set up and I have added a simple form
            to accept input and a html span to accept html appends.
          </li>
          <li>
            Secondly, there is an event listener that listens for a submit
            event. When the form is submitted the input is passed to the api
            and a fetch method is used to get the results in an array of 5
            position objects.
          </li>
          <li>
            Finally, the position name, url and company are obtained from the
            objects and appended to the HTML.
          </li>
        </ul>
        <h3>Where has this been used:</h3>
        <ul>
          <li>
            On jobs page in the aside section.
            <a href="./jobs.php">jobs</a>
          </li>
        </ul>
        <h3>
          Technique sourced from:
          <a target="_blank" href="https://developer.adzuna.com/overview">link</a>
        </h3>
        <br />
      </section>

      <!-- create card 2 -->
      <section class="card-container-inner">
        <h2>Enhancement 2: Live Day and Clock</h2>
        <h3>How does it go beyond the basic requirements</h3>
        <ul>
          <li>
            This enhancement adds a live clock and day to the header which
            updates live. It uses javaScripts date functions and live html
            append to go beyond the basic requirements.
          </li>
        </ul>
        <h3>What code is needed to implement it:</h3>
        <ul>
          <li>
            The event is triggered when the window loads which calls the clock
            function
          </li>
          <li>
            Inside the function, the current time and day is gotten from the
            Date() function and the day integer returned is converted to a day
            string.
          </li>
          <li>
            The hours mins and seconds are then converted to the appropriate
            time and is appended to the DOM
          </li>
        </ul>
        <h3>Where has this been used:</h3>
        <ul>
          <li>
            In the header on all pages
            <a href="./index.php">Index</a>
          </li>
        </ul>
        <h3>
          Technique inspired by:
          <a target="_blank" href="https://codepen.io/afarrar/pen/JRaEjP">link</a>
        </h3>
        <br />
      </section>

      <!-- create card 3 -->
      <section class="card-container-inner">
        <h2>References</h2>
        <h3>Learning Material Resources:</h3>
        <ul>
          <li>
            Adzuna API Call:
            <a target="_blank" href="https://developer.adzuna.com/overview">https://developer.adzuna.com/overview</a>
          </li>
          <li>
            Clock:
            <a target="_blank" href="https://codepen.io/afarrar/pen/JRaEjP">https://codepen.io/afarrar/pen/JRaEjP</a>
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
</body>

</html>
