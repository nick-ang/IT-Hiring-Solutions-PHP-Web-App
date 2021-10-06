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

    <!-- Prevent URL access -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {

      header('HTTP/1.0 403 Forbidden', TRUE, 403);
      die(header('location: /index.php'));
    }
    ?>
    <!-- create background flex container -->
    <div class="card-container">
      <h1 class="title">Upload your Resume!</h1>

      <section class="card-container-inner">

        <?php
        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Check if file was uploaded without errors
          if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $allowed = array("pdf" => "application/pdf", "jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $filename = $_FILES["file"]["name"];
            $filetype = $_FILES["file"]["type"];
            $filesize = $_FILES["file"]["size"];

            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

            // Verify file size - 5MB maximum
            $maxsize = 5 * 1024 * 1024;
            if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

            // Verify MYME type of the file
            if (in_array($filetype, $allowed)) {
              // Check whether file exists before uploading it
              if (file_exists("upload/" . $filename)) {
                echo $filename . " is already exists.";
              } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
              }
            } else {
              echo "Error: There was a problem uploading your file. Please try again.";
            }
          } else {
            echo "Error: " . $_FILES["file"]["error"];
          }
        }
        ?>

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
