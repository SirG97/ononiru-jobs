<?php

session_start();
require '../../../vendor/autoload.php';

/**
 * 
 * Here we get all shortlisted candidates for a company
 * 
 */
use Ononiru\Config\Database;
use Ononiru\Core\Job;

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get database connection
$database = new Database();
$db = $database->getConnection();
$_SESSION['user_id'] = 'ddwdwdcwo-qfqefwfwfw-ww';
// prepare job object
$job = new job($db);
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null ;

if(is_null($user_id)){
    echo $job->forbidden('User session not found');
    return;
}

try {
    // fectch user
    $job->query("SELECT * FROM users WHERE userid = ?",[$user_id]);

    if($job->_count <= 0){
        echo $job->forbidden('User not found');
        return;
    }else {
        
         $job->query("SELECT * FROM job_applications
         INNER JOIN jobs ON jobs.job_id = job_applications.job_id
         WHERE user_id = ? AND is_shortlisted = ?
         ",[$user_id,1]);
         echo  $job->success($job->_result);
         return;

    }    

} catch (\Throwable $th) {
    http_response_code(403);
echo $job->forbidden($th->getMessage());
return;
}
