<!-- File Name: export.php
Author: Nick Ang
Created 22/8/21
Description: This is the  php file to export xls files -->


<?php

// Load the database configuration file
include_once 'settings.php';

// Create database connection
$db = new mysqli(
  $host,
  $user,
  $pwd,
  $sql_db
);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Filter the excel data
function filterData(&$str)
{
  $str = preg_replace("/\t/", "\\t", $str);
  $str = preg_replace("/\r?\n/", "\\n", $str);
  if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

// Excel file name for download
$fileName = "members-data_" . date('Y-m-d') . ".xls";

// Column names
$fields = array('EOI', 'FIRST NAME', 'LAST NAME', 'ADDRESS', 'SUBURB', 'STATE', 'POSTCODE','EMAIL','PHONE','SKILLS','OTHER',"STATUS");

// Display column names as first row
$excelData = implode("\t", array_values($fields)) . "\n";

// Fetch records from database
$query = $db->query("SELECT * FROM EOI ORDER BY EOInumber ASC");
if ($query->num_rows > 0) {
  // Output each row of the data
  while ($row = $query->fetch_assoc()) {
    $lineData = array($row['EOInumber'], $row['first_name'], $row['last_name'], $row['address'], $row['suburb'], $row['state'], $row['postcode'], $row['email'], $row['phone'], $row['skills'], $row['Other'], $row['status']);
    array_walk($lineData, 'filterData');
    $excelData .= implode("\t", array_values($lineData)) . "\n";
  }
} else {
  $excelData .= 'No records found...' . "\n";
}

// Headers for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$fileName\"");

// Render excel data
echo $excelData;

exit;
