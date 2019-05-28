<?php
session_start();
require '../../vendor/autoload.php';

//$user_id =  $_SESSION['user_id'];
$user_id = 'dnwenicwo-qfqefwfwfw-fwqfqfq';
use Ononiru\Config\Database;
use Ononiru\Core\Job;



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
    
    !empty($_REQUEST['title']) && !empty($_REQUEST['description']) && !empty($_REQUEST['category_id']) && !empty($_REQUEST['gender']) && 
    !empty($_REQUEST['experience_level']) && !empty($_REQUEST['age']) && !empty($_REQUEST['location']) && !empty($_REQUEST['qualification']) &&
    !empty($_REQUEST['salary_range']) && !empty($_REQUEST['working_hours'])

){
    // Get company id
    $job->query("SELECT company_id FROM company_profile WHERE user_id = ? AND is_active = ? ",[$user_id,$job->active_status]);
    if($job->_count > 0){
        $company_id = $job->_result[0]->company_id;
    }else {
        echo $job->forbidden('You do not have a company profile set up to post a job');
        return;
    }

    // set job property values
    $job->salary_range = trim($_REQUEST['salary_range']);
    $job->description = trim($_REQUEST['description']);
    $job->company_id = trim($company_id);
    $job->location = trim($_REQUEST['location']);
    $job->qualification = trim($_REQUEST['qualification']);
    $job->experience_level = trim($_REQUEST['experience_level']);
    $job->age = trim($_REQUEST['age']);
    $job->category_id = trim($_REQUEST['category_id']);
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
   //$res = "Title : " . $data->title . "\n description: " . $data->description ."\n Sector: " . $data->sector . "\n Gender: " . $data->gender . "\n Experience: " . $data->experience_level . "\nAge: " . $data->age . "\n Location" . $data->location . "\nQualification: " . $data->qualification . "Salary: " . $data->salary_range . "\n Working hours: " . $data->working_hours;

}
?>