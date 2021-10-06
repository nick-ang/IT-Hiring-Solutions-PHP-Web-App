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
      <h1 class="title">Thank You for Applying!</h1>

      <section class="card-container-inner">
        <!-- Prevent URL access -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {

          header('HTTP/1.0 403 Forbidden', TRUE, 403);
          die(header('location: /index.php'));
        }
        ?>

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

          function test_input($data)
          {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

          $ref = test_input($_POST["ref"]);
          $first_name = test_input($_POST["firstname"]);
          $last_name = test_input($_POST["lastname"]);
          $dob = test_input($_POST["dob"]);
          $gender = test_input($_POST["gender"]);
          $street = test_input($_POST["street"]);
          $suburb = test_input($_POST["suburb"]);
          $state = test_input($_POST["state"]);
          $postcode = test_input($_POST["postcode"]);
          $email = test_input($_POST["email"]);
          $phone = test_input($_POST["number"]);
          $text = test_input($_POST["text"]);
          if (isset($_POST["other"])) {
            $other = "Other";
          }
          $skills = "Skills: ";
          if (isset($_POST["html"])) {
            $skills = $skills . "HTML, ";
          }
          if (isset($_POST["css"])) {
            $skills = $skills . "CSS, ";
          }
          if (isset($_POST["javascript"])) {
            $skills = $skills . "JavaScript, ";
          }
          if (isset($_POST["php"])) {
            $skills = $skills . "PHP, ";
          }
          if (isset($_POST["mysql"])) {
            $skills = $skills . "MySQL, ";
          }
          if (isset($_POST["other"])) {
            $skills = $skills . "Other";
          }
          $skills = test_input($skills);

          // Server Side Validations:
          $errMsg = "";
          if ($ref == "") {
            $errMsg .= "<p> You must enter a ref</p>";
          } else if (!preg_match("/^[a-zA-Z0-9]{5}$/", $ref)) {
            $errMsg
              .= "<p> Only 5 char alphanumeric allowed for ref</p>";
          }

          if ($first_name == "") {
            $errMsg .= "<p> You must enter a first_name</p>";
          } else if (!preg_match("/^[a-zA-Z]{1,20}$/", $first_name)) {
            $errMsg
              .= "<p> max 20 alpha characters allowed for first_name</p>";
          }

          if ($last_name == "") {
            $errMsg .= "<p> You must enter a last_name</p>";
          } else if (!preg_match("/^[a-zA-Z]{1,20}$/", $last_name)) {
            $errMsg
              .= "<p> max 20 alpha characters allowed for last_name</p>";
          }

          $date = str_replace('/', '-', $dob);
          $calc = date('Y-m-d', strtotime($date));
          $age = (date('Y') - date('Y', strtotime($calc)));

          if ($dob == "") {
            $errMsg .= "<p> You must enter a dob</p>";
          } else if (!preg_match("/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/", $dob)) {
            $errMsg
              .= "<p> you must enter dob in dd/mm/yyyy</p>";
          } else if ($age < 15 || $age >= 80) {
            $errMsg
              .= "<p> You must be between 15 and 80</p>";
          } else {
            $age;
          }

          if ($gender == "") {
            $errMsg .= "<p> You must enter a gender</p>";
          }

          if ($street == "") {
            $errMsg .= "<p> You must enter a street</p>";
          } else if (!preg_match("/^[\sa-zA-Z0-9 ]{1,40}$/", $street)) {
            $errMsg
              .= "<p> max 40 alphanumeric characters allowed for street</p>";
          }

          if ($suburb == "") {
            $errMsg .= "<p> You must enter a suburb</p>";
          } else if (!preg_match("/^[\sa-zA-Z0-9 ]{1,40}$/", $suburb)) {
            $errMsg
              .= "<p> max 40 alphanumeric characters allowed for suburb</p>";
          }

          if ($state == "") {
            $errMsg .= "<p> You must enter a state</p>";
          } else {
            switch ($state) {
              case "!VIC":
                $errMsg .=
                  "Must be an Australian State.\n";
                break;
              case "!NSW":
                $errMsg .=
                  "Must be an Australian State.\n";
                break;
              case "!QLD":
                $errMsg .=
                  "Must be an Australian State.\n";
                break;
              case "!NT":
                $errMsg .=
                  "Must be an Australian State.\n";
                break;
              case "!WA":
                $errMsg .=
                  "Must be an Australian State.\n";
                break;
              case "!SA":
                $errMsg .=
                  "Must be an Australian State.\n";
                break;
              case "!TAS":
                $errMsg .=
                  "Must be an Australian State.\n";
                break;
              case "!ACT":
                $errMsg .=
                  "Must be an Australian State.\n";
                break;
            }
          }


          function check($postcode, $state)
          {
            $errMsg = "";
            $firstdigit = $postcode[0];
            switch ($state) {
              case "VIC":
                if ($firstdigit != "3") {
                  $errMsg =
                    "The selected state must match the first digit of the postcode.\n";
                }
                break;
              case "NSW":
                if ($firstdigit != "1" && $firstdigit != "2") {
                  $errMsg =
                    "The selected state must match the first digit of the postcode.\n";
                }
                break;
              case "QLD":
                if ($firstdigit != "4" && $firstdigit != "9") {
                  $errMsg =
                    "The selected state must match the first digit of the postcode.\n";
                }
                break;
              case "NT":
                if ($firstdigit !== "0") {
                  $errMsg =
                    "The selected state must match the first digit of the postcode.\n";
                }
                break;
              case "WA":
                if ($firstdigit !== "6") {
                  $errMsg =
                    "The selected state must match the first digit of the postcode.\n";
                }
                break;
              case "SA":
                if ($firstdigit !== "5") {
                  $errMsg =
                    "The selected state must match the first digit of the postcode.\n";
                }
                break;
              case "TAS":
                if ($firstdigit !== "7") {
                  $errMsg =
                    "The selected state must match the first digit of the postcode.\n";
                }
                break;
              case "ACT":
                if ($firstdigit !== "0") {
                  $errMsg =
                    "The selected state must match the first digit of the postcode.\n";
                }
                break;
              default:
                $errMsg = "Please enter a valid state and postcode.\n";
            }
            return $errMsg;
          }

          if ($postcode == "") {
            $errMsg .= "<p> You must enter a postcode</p>";
          } else if (!preg_match("/^[0-9]{4}$/", $postcode)) {
            $errMsg
              .= "<p> max 4 numeric characters allowed for postcode</p>";
          } else if (check($postcode, $state) != "") {
            $errMsg
              .= "<p> Please enter the correct postcode</p>";
          }

          if ($email == "") {
            $errMsg .= "<p> You must enter a email</p>";
          } else if (!preg_match("/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/", $email)) {
            $errMsg
              .= "<p> enter correct format for email</p>";
          }

          if ($phone == "") {
            $errMsg .= "<p> You must enter a phone</p>";
          } else if (!preg_match("/^[0-9\s]{8,12}$/", $phone)) {
            $errMsg
              .= "<p> enter correct format for phone</p>";
          }

          if ($other && $text = "") {
            $errMsg
              .= "<p> Please enter text into the text box</p>";
          }

          if ($errMsg != "") {
            echo "<p>$errMsg</p>";
          } else {
            // upon successful connection,

            //Code to see if Table Exists
            $exists = mysqli_query($conn, "SELECT * FROM EOI");
            if ($exists !== false) {
              $sql_table = "EOI";
            } else {
              $sql = "CREATE TABLE EOI (
                          EOInumber INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                          ref INT(25) NOT NULL,
                          first_name VARCHAR(40) NOT NULL,
                          last_name VARCHAR(40) NOT NULL,
                          address VARCHAR(40) NOT NULL,
                          suburb VARCHAR(40) NOT NULL,
                          state VARCHAR(40) NOT NULL,
                          postcode INT NOT NULL,
                          email VARCHAR(40) NOT NULL,
                          phone VARCHAR(40) NOT NULL,
                          skills VARCHAR(40),
                          Other VARCHAR(40),
                          status VARCHAR(7) DEFAULT 'New'
                          )";
              $create = mysqli_query($conn, $sql);
              if (!$create) {
                echo "<p> Something is wrong with ", $sql, "</p>";
              } else {
                $sql_table = "EOI";
              }
            }

            // set up the SQL command to query or add data into the table
            $query = "INSERT into
                       $sql_table (
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
                        Other
                      )
                    values
                      (
                        '$ref',
                        '$first_name',
                        '$last_name',
                        '$street',
                        '$suburb',
                        '$state',
                        '$postcode',
                        '$email',
                        '$phone',
                        '$skills',
                        '$text'
                      );";
            // execute the query and store the result into the result pointer
            $result = mysqli_query($conn, $query);
            $unique_id = $conn->insert_id;

            // Checks if the execution was successful
            if (!$result) {
              echo "<p> Something is wrong with ", $query, "</p>";
            } else {
              // display an operation successful message
              echo "<h2>Your Unique EOI number is: $unique_id</h2>";
              echo "
            <li>Ref No: $ref</li>
            <li>First Name: $first_name</li>

            <li>Last Name: $last_name</li>
            <li>DOB: $dob</li>
            <li>AGE: $age</li>
            <li>Address: $street</li>
            <li>Suburb: $suburb</li>
            <li>State: $state</li>
            <li>Postcode: $postcode</li>
            <li>Email: $email</li>
            <li>Phone: $phone</li>
            <li>$skills</li>
            <li>Other: $text</li>";
            } // if succesful query operation

            // close the db connection
            mysqli_close($conn);
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
