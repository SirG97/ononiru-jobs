<?php

session_start();
require '../../vendor/autoload.php';

use Ononiru\Config\Database;
use Ononiru\Core\Job;

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/core.php';

// instantiate database and job object
$database = new Database();
$db = $database->getConnection();

// initialize object
$job = new Job($db);

// get keywords
$keywords=isset($_GET["s"]) ? $_GET["s"] : "";

// query jobs
$stmt = $job->search(trim($keywords));
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // jobs array
    $jobs_arr=array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $job_item=array(
            "id" => $job_id,
            "description" => html_entity_decode($description),
            "salary_range" => $salary_range,
            "qualification" => $qualification,
            "company_id" => $company_id,
            'title' => $title
            
        );

        array_push($jobs_arr, $job_item);
    }

    // set response code - 200 OK
    http_response_code(200);

    // show jobs data
    echo $job->success($jobs_arr);
}
else{
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user no jobs found
    echo $job->notFound("No jobs found.");
}
