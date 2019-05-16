<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/db.php';
include_once '../core/index.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$job = new job($db);

// query jobs
$stmt = $job->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if ($num > 0) {

  // jobs array
  $jobs_arr = array();
  $jobs_arr["records"] = array();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    extract($row);

    $job_item = array(
      "id" => $id,
      "company" => $company_name,
      "description" => html_entity_decode($description),
      "location" => $location,
      "slaryRange" => $salary_range,
      "qualification" => $qualification
    );

    array_push($jobs_arr["records"], $job_item);
  }

  // set response code - 200 OK
  http_response_code(200);

  // show jobs data in json format
  echo $job->success($jobs_arr);
} else {

  // set response code - 404 Not found
  http_response_code(404);

  // tell the user no products found
  echo $job->notFound("No Jobs found.");
}