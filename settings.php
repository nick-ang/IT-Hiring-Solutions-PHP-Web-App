<!-- File Name: settings.php
Author: Nick Ang
Created 22/8/21
Description: This is the  php file to store db info and export csv files -->
<!-- Prevent URL access -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {

  header('HTTP/1.0 403 Forbidden', true, 403);
  die(header('location: /index.php'));
}
?>
<?php
$host = "feenix-mariadb.swin.edu.au";
$user = 's103776375';
$pwd = '270793';
$sql_db = "s103776375_db";
?>
