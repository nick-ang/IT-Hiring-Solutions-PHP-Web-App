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
  <title>Search All</title>
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
    include "header.inc";
    include "menu.inc";
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
      <h1 class="title">All EOI Results</h1>
      <section class="card-container-inner">
        <?php
        require_once "settings.php"; // connection info
        $conn = @mysqli_connect(
          $host,
          $user,
          $pwd,
          $sql_db
        );
        // checks if connection is successful
        if (!$conn) {
          // display error message
          echo "<p> Database connection failure. </p>"; // not in production script
        } else {
          // upon successful connection,
          $sql_table = "EOI";
          function test_input($data)
          {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

          $ref = test_input($_POST["ref"]);
          // set up the SQL command to query or add data into the table
          $query2 =
            "DELETE FROM EOI WHERE ref='$ref';";
          $query =
            "SELECT
              EOInumber,
              ref,
              first_name,
              last_name,
              address,
              suburb,
              state,
              postcode,
              email,
              phone,
              skills,
              other,
              status
            FROM
              EOI
            ORDER BY
              EOInumber,
              ref ";
          // execute the query and store the result into the result pointer
          $result2 = mysqli_query($conn, $query2);
          $result
            = mysqli_query($conn, $query);
          // Checks if the execution was successful
          if (!$result) {
            echo "<p> Something is wrong with ", $query, "</p>";
          } else {
            // Display the retrieved Records
            echo "<p> Delete records for $ref, updated results:</p>";
            echo "<table border=\"1\">\n";
            echo "<tr>\n "
              . "<th scope=\"col\">EOInumber</th>\n "
              . "<th scope=\"col\">Ref No:</th>\n "
              . "<th scope=\"col\">First_name</th>\n "
              . "<th scope=\"col\">Last_name</th>\n "
              . "<th scope=\"col\">Address</th>\n "
              . "<th scope=\"col\">Suburb</th>\n "
              . "<th scope=\"col\">State</th>\n "
              . "<th scope=\"col\">Postcode</th>\n "
              . "<th scope=\"col\">Email</th>\n "
              . "<th scope=\"col\">Phone</th>\n "
              . "<th scope=\"col\">Skills</th>\n "
              . "<th scope=\"col\">Other</th>\n "
              . "<th scope=\"col\">Status</th>\n "
              . "</tr>\n ";
            // retrieve current record pointed by the result pointer

            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>\n";
              echo "<td>", $row["EOInumber"], "</td>\n";
              echo "<td>", $row["ref"], "</td>\n";
              echo "<td>", $row["first_name"], "</td>\n";
              echo "<td>", $row["last_name"], "</td>\n";
              echo "<td>", $row["address"], "</td>\n";
              echo "<td>", $row["suburb"], "</td>\n";
              echo "<td>", $row["state"], "</td>\n";
              echo "<td>", $row["postcode"], "</td>\n";
              echo "<td>", $row["email"], "</td>\n";
              echo "<td>", $row["phone"], "</td>\n";
              echo "<td>", $row["skills"], "</td>\n";
              echo "<td>", $row["other"], "</td>\n";
              echo "<td>", $row["status"], "</td>\n";
              echo "</tr>\n ";
            }

            echo "</table>\n";
            // Frees up the memory after using the result pointer
            mysqli_free_result($result);
          } // if succesful query operation

          // close the db connection
          mysqli_close($conn);
        } // if succesful dbconnection
        ?>
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
