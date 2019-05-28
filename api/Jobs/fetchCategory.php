<?php
require '../../vendor/autoload.php';

use Ononiru\Config\Database;
use Ononiru\Core\Job;


// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$database = new Database();
$db = $database->getConnection();

// initialize object
$job = new Job($db);

// query jobs
$stmt = $job->fetchCategory();
$num = $job->_count;

if($num > 0){
    http_response_code(200);
    echo $job->success($job->_result);
    return;
}else{
    http_response_code(500);
    echo $job->dataCreationFailed('Failed to fetch top catogories');
    return;
}

