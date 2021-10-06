$sql_table = "EOI";
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
                        '$other'
                      );";
// execute the query and store the result into the result pointer
$result = mysqli_query($conn, $query);

// Checks if the execution was successful
if (!$result) {
    echo "<p> Something is wrong with ", $query, "</p>";
} else {
    // display an operation successful message
    echo "<p> class=\"ok\">Successfully added new EOI record</p>";
} // if succesful query operation

// close the db connection
mysqli_close($conn);
