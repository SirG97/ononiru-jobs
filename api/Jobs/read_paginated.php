<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/core.php';
include_once '../shared/utility.php';
include_once '../config/db.php';
include_once '../core/index.php';

// utilities
$utilities = new Utilities();

// instantiate database and job object
$database = new Database();
$db = $database->getConnection();

// initialize object
$job = new job($db);

// query jobs
$stmt = $job->readPaging($from_record_num, $records_per_page);
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // jobs array
    $jobs_arr=array();
    $jobs_arr["records"]=array();
    $jobs_arr["paging"]=array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        $job_item=array(
            "id" => $id,
            "description" => html_entity_decode($description),
            "salary_range" => $salary_range,
            "company_id" => $company_id,
            "qualification" => $qualification,
            "link" => $home_url.'single?id='.$id
        );

        array_push($jobs_arr["records"], $job_item);
    }


    // include paging
    $total_rows = $job->count();
    $page_url="{$home_url}jobs/read_paginated?";
    $paging = $utilities->getPaging($page, $total_rows, $records_per_page, $page_url);
    $jobs_arr["paging"] = $paging;

    // set response code - 200 OK
    http_response_code(200);

    // make it json format
    echo $job->success($jobs_arr);
}

else{

    // set response code - 404 Not found
    http_response_code(404);

    // tell the user jobs does not exist
    echo $job->notFound("No jobs found.");
    
}
