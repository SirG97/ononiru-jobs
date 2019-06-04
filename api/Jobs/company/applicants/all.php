<?php
session_start();
/**
 * 
 * Here we get all applicantions a company
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

//uncomment in production
$_SESSION['user_id'] = 'dnwenicwo-qfqefwfwfw-fwqfqfq';

// prepare job object
$job = new job($db);

/**
 * We want to verify that only authenticated users can proceed so we need a token,else we use the user_id
 */
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    if($user_id == null){
        echo $job->forbidden('You cannot go any further');
        return;
    }
$job->query("SELECT * FROM users
INNER JOIN company_profile ON company_profile.user_id = users.userid
 WHERE userid = ?",[$user_id]);

if($job->_count <= 0){
    echo $job->forbidden('No company profile set up for user');
    return;
}
$company_id = $job->_result[0]->company_id;
/**
 * More security measures should be implemented for now skipping it
 */

 try {
    $job->query("SELECT *
     FROM job_applications
     INNER JOIN users ON job_applications.user_id = users.userid WHERE  company_id = ?",[$company_id]);
     //job applications for a particular company
    echo  $job->actionSuccess(['data' => $job->_result]);
    return;     
 } catch (\Throwable $th) {
        echo $job->actionFailure('Opps! Something went wrong, error code xm112c3'. $th->getMessage()); 
        die;
    }

