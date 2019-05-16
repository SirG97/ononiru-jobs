<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// include database and object files
include_once '../config/db.php';
include_once '../core/index.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare job object
$job = new job($db);

// get id of job to be edited
$data = json_decode(file_get_contents("php://input"));

if(
  !empty($data->salary_range) &&
  !empty($data->description) &&
  !empty($data->location) &&
  !empty($data->qualification) &&
  !empty($data->working_hours) &&
  !empty($data->age) &&
  !empty($data->gender) &&
  !empty($data->sector)){

  // set ID property of job to be edited
  $job->id = $data->id;

    if(!$job->is_workable()){
    http_response_code(400);
    echo $job->forbidden("Unable to update job.");
    }
  // set job property values
  $job->salary_range = $data->salary_range;
  $job->description = $data->description;
  $job->qualification = $data->qualification;
  $job->age = $data->age;
  $job->gender = $data->gender;
  $job->sector = $data->sector;
  $job->location = $data->location;
  $job->working_hours = $data->working_hours;
  $job->updated_at = date('Y-m-d H:i:s');



  // update the job
  if ($job->update()) {

    // set response code - 200 ok
    http_response_code(200);

    // tell the user
    echo $job->actionSuccess("job was updated.");
  }

  // if unable to update the job, tell the user
  else {

    // set response code - 503 service unavailable
    http_response_code(503);

    // tell the user
    echo $job->forbidden("Unable to update job.");
  }

  }else{

  // set response code - 400 bad request
  http_response_code(400);

  // tell the user
  echo $job->notFound("Unable to create job. Data is incomplete.");

  }


