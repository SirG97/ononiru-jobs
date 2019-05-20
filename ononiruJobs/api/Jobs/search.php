<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/core.php';
include_once '../config/db.php';
include_once '../core/index.php';

// instantiate database and job object
$database = new Database();
$db = $database->getConnection();

// initialize object
$job = new job($db);

// get keywords
$keywords=isset($_GET["s"]) ? $_GET["s"] : "";

// query jobs
$stmt = $job->search(trim($keywords));
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // jobs array
    $jobs_arr=array();
    $jobs_arr["records"] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $job_item=array(
            "id" => $id,
            "company_name" => $company_name,
            "description" => html_entity_decode($description),
            "salaray_range" => $salaray_range,
            "qualification" => $qualification,
            "company_id" => $company_id
        );

        array_push($jobs_arr["records"], $job_item);
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