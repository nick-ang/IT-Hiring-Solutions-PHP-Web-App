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
  <meta name="description" content="Enhancements Page" />
  <meta name="keywords" content="Enhancements, Turbulence Filter, Animation, keyframes" />
  <meta name="author" content="Nick Ang" />
  <title>Enhancements</title>
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
      <h1 class="title">Enhancements</h1>
      <!-- create card 1 -->
      <section class="card-container-inner">
        <h2>Enhancement 1: Turbulence filter</h2>
        <h3>How does it go beyond the basic requirements</h3>
        <ul>
          <li>
            This enhancement adds a ripple "turbulence" effect to the section
            that it is added on. It uses no javascript and makes the page
            looks like it is moving. It looks especially cool on water but I
            have used it on the banner and logo to be more suited to this
            website.
          </li>
        </ul>
        <h3>What code is needed to implement it:</h3>
        <ul>
          <li>
            First the SVG turbulence filter must be added, which I have added
            at the end of the body in the HTML file.
          </li>
          <li>
            Next, the filter needs to be animated to make it look like it is
            moving
          </li>
          <li>
            Lastly the filter is applied in the CSS file to whichever image or
            text using filter: url("#turbulence");
          </li>
        </ul>
        <h3>Where has this been used:</h3>
        <ul>
          <li>
            All pages on header and banner image on
            <a href="./index.php">index</a>
          </li>
        </ul>
        <h3>
          Technique sourced from:
          <a target="_blank" href="https://redstapler.co/realistic-water-effect-svg-turbulence-filter/">link</a>
        </h3>
        <br />
      </section>

      <!-- create card 2 -->
      <section class="card-container-inner">
        <h2>Enhancement 2: Lava Animation</h2>
        <h3>How does it go beyond the basic requirements</h3>
        <ul>
          <li>
            This enhancement is used for the logo and it moves red circles and
            distorts them to give the illusion of a lava lamp. Makes use of
            CSS keyframes.
          </li>
        </ul>
        <h3>What code is needed to implemnt it:</h3>
        <ul>
          <li>
            In the HTML classes must be defined for each of the blobs and a
            lava and glass container to contain and position the graphic
          </li>
          <li>
            Css can then be applied to position, set the appearance and size
            the container and blobs
          </li>
          <li>
            Keyframes can then be used to animate the blobs creatig a cool
            logo!
          </li>
        </ul>
        <h3>Where has this been used:</h3>
        <ul>
          <li>On the logo on all pages</li>
        </ul>
        <h3>
          Technique sourced from:
          <a target="_blank" href="https://codepen.io/Rosefae/pen/XPaMYL">link</a>
        </h3>
        <br />
      </section>

      <!-- create card 3 -->
      <section class="card-container-inner">
        <h2>References</h2>
        <h3>Learning Material Resources:</h3>
        <ul>
          <li>
            Turbulence Filter:
            <a target="_blank" href="https://redstapler.co/realistic-water-effect-svg-turbulence-filter/">https://redstapler.co/realistic-water-effect-svg-turbulence-filter/</a>
          </li>
          <li>
            Lava Lamp:
            <a target="_blank" href="https://codepen.io/Rosefae/pen/XPaMYL">https://codepen.io/Rosefae/pen/XPaMYL</a>
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
