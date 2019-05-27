<?php
session_start();
require '../../vendor/autoload.php';

use Ononiru\Config\Database;
use Ononiru\Core\Job;


// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$job = new Job($db);

// query jobs
$stmt = $job->read();
$num = $job->_count;

// check if more than 0 record found
if ($num > 0) {

  // set response code - 200 OK
  http_response_code(200);

  // show jobs data in json format
  echo $job->success($job->_result);
  
} else {

  // set response code - 404 Not found
  http_response_code(404);

  // tell the user no products found
  echo $job->notFound("No Jobs found.");
}