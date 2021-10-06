<!DOCTYPE html>

<!-- File Name: Jobs.php
Author: Nick Ang
Created 22/8/21
Description: This is where the jobs are posted -->

<!-- Set Viewport, Description, Author and Title -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Jobs Section" />
  <meta name="keywords" content="Jobs, Salary, Apply" />
  <meta name="author" content="Nick Ang" />
  <title>Jobs</title>
  <!-- Footer icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <!-- link style sheet -->
  <link rel="stylesheet" href="styles/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Noto+Serif+SC:wght@300;900&family=Raleway:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  <!-- Set Main Container -->
  <div class="container">
    <!-- Set header -->
    <?php
    include("header.inc");
    include("menu.inc");
    // include_once("footer.inc")
    ?>

    <!-- create aside container to flex -->
    <div class="aside-container">
      <!-- create card container to flex -->
      <div class="card-container">
        <h1 class="title">Jobs Available</h1>
        <!-- create heading container to flex heading and card container -->
        <div class="heading-container">
          <!-- Job Card 1 -->
          <section class="card-container-inner">
            <h2>
              Technical Support Specialist - Ref#
              <span id="job2" class="ref"> 12345</span>
            </h2>
            <h2>About the Position</h2>
            <p>
              An exciting opportunity has surfaced to join one of our clients
              as a technical support specialist. The client is a fortune 500
              company sitauated in melbourne CBD and is looking for an
              experienced individual with more than 5 years experience.
            </p>
            <h2>Key Responsibilities</h2>
            <ol>
              <li>Provide remote technical support</li>
              <li>Diagnose hardware and software issues</li>
              <li>liase with clients to discuss client issues</li>
            </ol>
            <h3>
              Required qualifications, skills, knowledge and attributes:
            </h3>
            <p>Essential</p>
            <ul>
              <li>Understanding of Windows and Mac Operating system</li>
              <li>5 years or more experience</li>
              <li>Good problem solving skills</li>
            </ul>
            <p>Preferable</p>
            <ul>
              <li>Programming knowledge e.g. Python, JavaScript, HTML</li>
              <li>Hardware knowledge</li>
            </ul>
            <h3>Salary Range:</h3>
            <p>$85000 - $90000</p>
            <h3>Reporting to:</h3>
            <p>General Manager</p>
            <br />
            <a id="apply2" class="apply btn-treehouse" href="./apply.php">Apply now!</a>
          </section>

          <!-- job card 2 -->
          <section class="card-container-inner">
            <h2>Front-End Developer - Ref# <span id="job1">12346</span></h2>
            <h2>About the Position</h2>
            <p>
              An exciting opportunity has surfaced to join one of our clients
              as a Front-end. The client is a fortune 500 company sitauated in
              sydney CBD and is looking for an experienced individual with
              more than 2 years experience.
            </p>
            <h2>Key Responsibilities</h2>
            <ol>
              <li>Design company website layout and scripts</li>
              <li>Assist with UI/UX improvements</li>
              <li>liase with clients to discuss client issues</li>
            </ol>
            <h3>
              Required qualifications, skills, knowledge and attributes:
            </h3>
            <p>Essential</p>
            <ul>
              <li>
                Programming knowledge in HTML, CSS, JavaScript, React.JS
              </li>
              <li>2 years or more experience</li>
              <li>Good problem solving skills</li>
            </ul>
            <p>Preferable</p>
            <ul>
              <li>Programming knowledge in Python, Django, Node.js</li>
              <li>Hardware knowledge</li>
            </ul>
            <h3>Salary Range:</h3>
            <p>$100,000 - $110,000</p>
            <h3>Reporting to:</h3>
            <p>Senior Software Engineer</p>
            <br />
            <a id="apply1" class="apply btn-treehouse" href="./apply.php">Apply now!</a>
          </section>
        </div>
      </div>

      <!-- create aside -->
      <div class="aside">
        <aside>
          <h4><em>Special Needs:</em></h4>
          <p>
            <em>Please contact HR via LinkedIn if you would like us to consider
              special circumstances relating to your application</em>
          </p>
          <br />
          <section class="form">
            <h4>
              <em>Extra:</em>
            </h4>
            <p><em>Please check out other jobs on Adzuna as well below</em></p>
            <br />
            <!-- define form and implement php test -->
            <form id="regform" class="form" method="post" action="http://mercury.swin.edu.au/it000000/formtest.php">
              <fieldset>
                <legend>External Positions</legend>
                <p>
                  <label for="search">Search</label>

                  <input type="text" name="search" id="search" required="required" value="Developer" />
                  <button class="btn-treehouse" type="submit" value="Submit">
                    Search
                  </button>
                </p>
                <p><span id="mymessage"></span></p>
              </fieldset>
            </form>
          </section>
        </aside>
      </div>
    </div>


    <!-- Render Footer -->
    <?php
    include("footer.inc")
    ?>

    <!-- implement turbulence filter  -->
    <svg>
      <filter id="turbulence" x="0" y="0" width="100%" height="100%">
        <feturbulence id="banner-filter" numoctaves="1" seed="1" basefrequency="0.01 0.01"></feturbulence>
        <fedisplacementmap scale="1.5" in2="" in="SourceGraphic"></fedisplacementmap>
        <animate xlink:href="#banner-filter" attributename="baseFrequency" dur="60s" keytimes="0;0.5;1" values="0.1 0.06;0.04 0.08;0.02 0.06" repeatcount="indefinite" />
      </filter>
    </svg>
    <!-- Link JavaScript script -->
    <script src="./scripts/jobs.js"></script>
    <script src="./scripts/enhancements.js"></script>
</body>

</html>
