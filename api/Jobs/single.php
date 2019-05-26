<?php

session_start();
require '../../vendor/autoload.php';

use Ononiru\Config\Database;
use Ononiru\Core\Job;

// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare job object
$job = new job($db);

// set ID property of record to read
$job->id = isset($_GET['id']) ? $_GET['id'] : die('Supply a job ID');

// read the details of job to be edited
$job->readOne();

if($job->company_name!=null){
    // create array
    $job_arr = array(
        "id" =>  $job->id,
        "company_id" => $job->company_id,
        "description" => $job->description,
        "salary_range" => $job->salary_range,
        "company_id" => $job->company_id,
        "qualification" => $job->qualification

    );

    try {
        $job->query("UPDATE jobs SET count = ? WHERE job_id = ? AND status = ?",[$job->count + 1,$job->id,$job->active_status]);
    } catch (\Throwable $th) {
        throw $th->getMessage();
    }
    // set response code - 200 OK
    http_response_code(200);

    // make it json format
    echo $job->success($job_arr);
}

else{
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user job does not exist
    echo $job->notFound("job does not exist.");
}
