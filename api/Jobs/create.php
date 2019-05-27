<?php
session_start();
$user_id =  $_SESSION['user_id'] = 'dnwenicwo-qfqefwfwfw-fwqfqfq';
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get database connection
include_once '../config/db.php';

// instantiate job object
include_once '../core/index.php';

$database = new Database();
$db = $database->getConnection();

$job = new job($db);

// make sure data is not empty
if(
    !empty($_REQUEST['salary_range']) &&
    !empty($_REQUEST['description']) &&
    !empty($_REQUEST['location']) &&
    !empty($_REQUEST['qualification']) &&
    !empty($_REQUEST['working_hours']) &&
    !empty($_REQUEST['experience_level']) &&
    !empty($_REQUEST['age']) &&
    !empty($_REQUEST['gender']) &&
    !empty($_REQUEST['sector']) &&
    !empty($_REQUEST['title']) 

){



    $job->query('SELECT company_id FROM company_profile WHERE user_id = ?',[$user_id]);
    $c_id = $job->_result;

    // set job property values
    $job->salary_range = trim($_REQUEST['salary_range']);
    $job->description = trim($_REQUEST['description']);
    $job->location = trim($_REQUEST['location']);
    $job->qualification = trim($_REQUEST['qualification']);
    $job->experience_level = trim($_REQUEST['experience_level']);
    $job->age = trim($_REQUEST['age']);
    $job->sector = trim($_REQUEST['sector']);
    $job->company_id = $c_id;
    $job->gender = trim($_REQUEST['gender']);
    $job->job_title = trim($_REQUEST['title']);
    $job->working_hours = trim($_REQUEST['working_hours']);
    $job->created_at = date('Y-m-d H:i:s');

    // create the job
    if($job->create()){

        // set response code - 201 created
        http_response_code(201);

        // tell the user
        echo $job->actionSuccess('Job created successfully');
    }
 
    // if unable to create the job, tell the user
    else{

        // set response code - 503 service unavailable
        http_response_code(503);

        // tell the user
        echo $job->forbidden('Opps! Something went wrong');
    }
}

// tell the user data is incomplete
else{

    // set response code - 400 bad request
    http_response_code(409);

    // tell the user
   echo $job->actionFailure('Unable to create job. Data is incomplete.');
}
?>