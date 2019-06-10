<?php
session_start();
/**
 * 
 * Here we want to get an applicants profile together with details of the job applied for in a case where 
 * a company wants to browse through all the applicants they have
 * Every Applicant belong to a company
 * 
 */
require '../../../../vendor/autoload.php';

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
$job = new job($db);

/**
 * We want to verify that only authenticated users can proceed so we need a token,else we use the user_id
 */
$_SESSION['user_id'] = 'dnwenicwo-qfqefwfwfw-fwqfqfq';

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

 try {
     
$job->query('SELECT user_id,company_id FROM company_profile WHERE user_id = ?',[$user_id]);
 if($job->_count <= 0){
    echo $job->actionFailure('User does not have a company profile set up'); 
    return;
 } 
$company_id = $job->_result[0]->company_id;
    $job->query("SELECT *
     FROM job_applications
    --  INNER JOIN jobs ON  job_applications.job_id = jobs.job_id
     INNER JOIN users ON job_applications.user_id = users.userid 
     WHERE company_id = ?  LIMIT 20",[$company_id]);
    echo  $job->actionSuccess(['data' => $job->_result]);
    return;     
 } catch (\Throwable $th) {
        echo $job->actionFailure('Opps! Something went wrong, error code xm112c3'. $th->getMessage()); 
        return;
    }

