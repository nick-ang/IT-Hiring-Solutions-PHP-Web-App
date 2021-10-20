<!DOCTYPE html>

<!-- File Name: Upload.php
Author: Nick Ang
Created 22/8/21
Description: This is the Upload Form section -->

<!-- Set Viewport, Description, Author and Title -->

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Upload Page" />
  <meta name="keywords" content="Upload, form" />
  <meta name="author" content="Nick Ang" />
  <title>Upload</title>
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
    include("header.inc");
    include("menu.inc");
    // include_once("footer.inc")
    ?>
    <!-- create background flex container -->
    <div class="card-container">
      <h1 class="title">Upload your Resume!</h1>

      <section class="card-container-inner">
        <form action="upload-manager.php" method="post" enctype="multipart/form-data">
          <h2>Upload File</h2>
          <label for="fileSelect">Filename:</label>
          <input type="file" name="file" id="fileSelect">
          <input type="submit" name="submit" value="Upload">
          <p><strong>Note:</strong> Only .pdf .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
        </form>
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
