<?php

session_start();
require '../../vendor/autoload.php';

use Ononiru\Config\Database;
use Ononiru\Core\Job;

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    die('HEY NIGGA!! SEND THE RIGHT REQUEST TYPE');
}

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare job object
$job = new Job($db);

$job->query("SELECT job_category_id,display_name,icon,available_jobs FROM job_category ORDER BY available_jobs DESC LIMIT 4",[]);
if($job->_count > 0){

    echo $job->success($job->_result);
    return;
}

echo $job->actionFailure('No Job category Available');  return;
