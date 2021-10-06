<!DOCTYPE html>

<!-- File Name: about.php
Author: Nick Ang
Created 22/8/21
Description: This is the  about section -->

<!-- Set Viewport, Description, Author and Title -->

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="About Page" />
  <meta name="keywords" content="Hobbies, Personal Details, Timetable" />
  <meta name="author" content="Nick Ang" />
  <title>About</title>
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

    <!-- create background card -->
    <div class="card-container">
      <h1 class="title">About me!</h1>
      <!-- create blue card -->
      <section class="card-container-inner">
        <h2>Personal Details:</h2>
        <!-- create about-container for flexbox -->
        <div class="about-container">
          <!-- create definition list -->
          <dl>
            <dt>Name</dt>
            <dd>Nicholas Ang</dd>
            <dt>Student Number</dt>
            <dd>103776375</dd>
            <dt>Tutor</dt>
            <dd>Bo Li</dd>
            <dt>Student Number</dt>
            <dd>Master of Information Technology</dd>
            <dt>Demographic</dt>
            <dd>South East Asian</dd>
            <dt>Hometown</dt>
            <dd>Perth, Western Australia</dd>
            <dt>Hobbies</dt>
            <dd>Tennis, Basketball, Music Production</dd>
            <dt>Email</dt>
            <dd>
              <!-- Add student mailto: hyperlink -->
              <a href="mailto:103776375@student.swin.edu.au" target="_blank">Student Email</a>
            </dd>
          </dl>
          <!-- Add Profile pic -->
          <img id="about-img" src="images/face.jpeg" width="150" height="150" alt="Profile Pic" />
        </div>
        <!-- Create timetable -->
        <h2>Student Timetable:</h2>
        <table>
          <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
          </tr>
          <tr>
            <td>10:00 AM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>10:30 AM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="COS60010" rowspan="4">COS60010 Live Online</td>
          </tr>
          <tr>
            <td>11:00 AM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>11:30 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>12:00 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>12:30 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>1:00 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>1:30 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>2:00 PM</td>
            <td class="COS60004" rowspan="2">COS60004 Live Online</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>2:30 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>3:00 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>3:30 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>4:00 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>4:30 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>5:00 PM</td>
            <td class="COS60010" rowspan="2">COS60010 Live Online</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>5:30 PM</td>
            <td></td>
            <td class="COS60009" rowspan="2">COS60009 Tutorial</td>
            <td></td>
            <td class="COS60004" rowspan="2">COS60004 Live Online</td>
          </tr>
          <tr>
            <td>6:00 PM</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>6:30 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td>7:00 PM</td>
            <td class="COS60009" rowspan="2">COS60009 Tutorial</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>7:30 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>8:00 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>8:30 PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
        <br />
      </section>
    </div>

    <!-- Render Footer -->
    <?php
    include("footer.inc")
    ?>

  </div>
  <svg>
    <filter id="turbulence" x="0" y="0" width="100%" height="100%">
      <feturbulence id="banner-filter" numoctaves="1" seed="1" basefrequency="0.01 0.01"></feturbulence>
      <fedisplacementmap scale="1.5" in2="" in="SourceGraphic"></fedisplacementmap>
      <animate xlink:href="#banner-filter" attributename="baseFrequency" dur="60s" keytimes="0;0.5;1" values="0.1 0.06;0.04 0.08;0.02 0.06" repeatcount="indefinite" />
    </filter>
  </svg>
</body>
<!-- turbulence filter enhancement -->

</html>
