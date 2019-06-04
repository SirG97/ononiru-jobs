<?php
session_start();
require '../../../../vendor/autoload.php';

use Ononiru\Config\Database;
use Ononiru\Core\Job;

/**
 * 
 * Code to shortlist a candidate
 * 
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


if($_SERVER['REQUEST_METHOD']  != 'POST'){
    die('Use the right method bro');
}

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare job object
$job = new job($db);

// set job id to be deleted

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    if($user_id == null){
        http_response_code(403);
        echo $job->forbidden('You cannot go any further');
        return;
    }
$job->query("SELECT * FROM users
INNER JOIN company_profile ON company_profile.user_id = users.userid
 WHERE userid = ?",[$user_id]);

if($job->_count <= 0){
    http_response_code(403);
    echo $job->forbidden('No company profile set up for user');
    return;
}
$job->company_id = $job->_result[0]->company_id;

$job->id = $_REQUEST['job_id'];
$user = $_REQUEST['user_id'];

if(!$job->is_workable()){
    http_response_code(404);

    echo $job->forbidden('Job is not Avialable');
    die;
} 

$job->query("SELECT * FROM job_applications WHERE
 user_id=? AND company_id=? AND job_id=? AND is_shortlisted=?",[$user,$job->company_id,$job->id,$job->not_active],false,true);

if(empty($job->_count)){
    http_response_code(400);
    
    echo $job->actionFailure('User has already been shortlisted');
    return;
}

try{
    $sc_id =  time().uniqid('sc',true);
    $job->query("INSERT INTO jobs_shortlisted_candidates 
    SET company_id = ?,sc_id = ?,job_id =?,user_id = ?",
     [$job->company_id,$sc_id,$job->id,$user],false,false);

}catch(\Throwable $er){
    http_response_code(500);

    echo $job->actionFailure('Opps! Something went wrong '.$er->getMessage(). $er->getLine(). $er);
    return;

}catch(\Exception $exec){
    http_response_code(500);

    echo $job->actionFailure('Opps! Something went wrong an exception '.$exec->getMessage());
    return;
}

// update row on job_application

$job->_result = '';
$job->_count = '';
try {
 
$job->query("UPDATE job_applications SET is_shortlisted = ? WHERE
user_id = ? AND company_id = ? AND job_id = ? AND is_shortlisted = ? ",[$job->active_status,$user,$job->company_id,$job->id,$job->not_active],true,false);
        http_response_code(200);

echo $job->actionSuccess('User has been shortlisted successfully');
return;

} catch (\Throwable $th) {
    echo $job->actionFailure('Opps! Something went wrong While updating table '.$th->getMessage());
    return;
}




