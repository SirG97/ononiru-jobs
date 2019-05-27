<?php
session_start();
require '../../vendor/autoload.php';

$user_id =  $_SESSION['user_id'];
use Ononiru\Config\Database;
use Ononiru\Core\Job;

use Ramsey\Uuid\Uuid;

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$database = new Database();
$db = $database->getConnection();

$job = new job($db);

// make sure data is not empty
if(
    !empty($data->salary_range) &&
    !empty($data->description) &&
    !empty($data->location) &&
    !empty($data->qualification) &&
    !empty($data->working_hours) &&
    !empty($data->experience_level) &&
    !empty($data->age) &&
    !empty($data->gender) &&
    !empty($data->sector) &&
    !empty($data->title) 

){
    // Get company id
    $job->query("SELECT company_id FROM company_profile WHERE user_id = ?",[$userid]);
    if($job->_count > 0){
        $company_id = $job->_result;
    }else {
        echo $job->forbidden('You do not have a company profile set up to post a job');
        return;
    }



    $job->query('SELECT company_id FROM company_profile WHERE user_id = ?',[$user_id]);
    $c_id = $job->_result;

    // set job property values
    $job->salary_range = trim($data->salary_range);
    $job->description = trim($data->description);
    $job->company_id = trim($company_id);
    $job->location = trim($data->location);
    $job->qualification = trim($data->qualification);
    $$data->experience_level = trim($data->experience_level);
    $job->age = trim($data->age);
    $job->sector = trim($data->sector);
    $job->gender = trim($data->gender);
    $job->job_title = trim($data->title);
    $job->working_hours = trim($data->working_hours);
    $job->created_at = date('Y-m-d H:i:s');
    $Job->job_id =   $uuid5 = Uuid::uuid5(Uuid::NAMESPACE_DNS, 'php.net')->toString();

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