<?php
session_start();
require '../../../vendor/autoload.php';
header('Content-Type: Application/json',true);
$_SESSION['user_id'] = 'dnwenicwo-qfqefwfwfw-fwqfqfqh';
use Ononiru\Config\Database;
use Ononiru\Core\Job;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

try {
    $uuid4 = Uuid::uuid4();
} catch (UnsatisfiedDependencyException $e) {

    // Some dependency was not met. Either the method cannot be called on a
    // 32-bit system, or it can, but it relies on Moontoast\Math to be present.
    http_response_code(500);
    echo 'Caught exception: ' . $e->getMessage() . "\n";
    return;
}

$db = new Database();
$Job = new Job($db->getConnection());
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if(!isset($user_id)){   
    http_response_code(403);
    echo $Job->forbidden('No user session found');
    return;
}

// check if user already has an existing company profile on the table

$Job->query("SELECT company_id FROM company_profile WHERE user_id  =? AND is_active = ?",[$user_id,$Job->active_status]);

if($Job->_count > 0){
    http_response_code(403);
    echo $Job->forbidden('Cannot create multiple company profile');
    return;
}

function sanitize($data){
    trim($data);
    htmlspecialchars($data);
    htmlentities($data);
    strip_tags($data);
    return $data;
}


foreach ($_REQUEST as $key => $value) {
    sanitize($value);
}

$company_name = isset($_REQUEST['company_name']) ? $_REQUEST['company_name'] : null;
$company_email =  isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
$company_phone1 =  isset($_REQUEST['phone1']) ? $_REQUEST['phone1'] : null;
$company_phone2 =  isset($_REQUEST['phone2']) ? $_REQUEST['phone2'] : null;
$sector =  isset($_REQUEST['sector']) ? $_REQUEST['sector'] : null;
$about =  isset($_REQUEST['about']) ? $_REQUEST['about'] : null;
$address =  isset($_REQUEST['address']) ? $_REQUEST['address'] : null;
$city =  isset($_REQUEST['location']) ? $_REQUEST['location'] : null;
$facebook_link =  isset($_REQUEST['facebook']) ? $_REQUEST['facebook'] : null;
$twitter_link =  isset($_REQUEST['twitter']) ? $_REQUEST['twitter'] : null;
$linkedin =  isset($_REQUEST['linkedin']) ? $_REQUEST['linkedin'] : null;
$website =  isset($_REQUEST['website']) ? $_REQUEST['website'] : null;
$fax =  isset($_REQUEST['fax']) ? $_REQUEST['fax'] : null;
$logo =  isset($_FILES['logo']) ? $_FILES['logo'] : null;
$rcc =  isset($_REQUEST['rcc']) ? $_REQUEST['rcc'] : null;

// send api request to ncc to verify company

$email = filter_var($company_email,FILTER_VALIDATE_EMAIL); 
if(!$email){
    http_response_code(403);
    echo  $Job->validationFailed('Email must be valid',$company_email . ' should match hello@examplesite.com');
    return;
}

// Algorithm to validate urls

foreach ($_REQUEST as $key => $value) {

    $ex = explode('_',$key);
    foreach ($ex as $k => $v) {
        if($v == 'url'){

$url = filter_var($value,FILTER_VALIDATE_URL,FILTER_FLAG_HOST_REQUIRED);

        if(!$url){
    http_response_code(403);
    echo  $Job->validationFailed('Website must be valid',$key . ' should match http://www.examplesite.com, attach protocol');
    return;
            }     
        }  
    }
}


// send confirmation email


//upload company_logo

if ($logo['size'] > 300000) {
    echo $job->forbidden('File size too large');
    return;
}

$type = explode('/', $logo['type']);
if ($type[0] != 'image') {
    http_response_code(403);
    echo $job->forbidden('Only image file type is allowed');
    return;
}
if ($logo['error']) {
    http_response_code(409);
    echo $job->actionFailure('File could not be uploaede');
    return;
}
$filename = time() . uniqid() . '.' . $type[1];

$uploaded = move_uploaded_file($logo['tmp_name'], '../../../uploads/company_logo/' . $filename);

if (!$uploaded || ($logo['error'])) {
        http_response_code(409);
        echo $Job->actionFailure('Company Logo could not uploaded');
        return;
}

try {
    $Job->query("INSERT INTO company_profile SET
    company_id=?,email=?,name=?,phone1=?,phone2=?,sector=?,about=?,
    user_id=?,logo=?,located_at=?,RCC=?,fax=?,website=?,linkedin_url=?,
    twitter_url=?,facebook_url=?,is_active=?",
    [$uuid4,$company_email,$company_name,$company_phone1,
    $company_phone2,$sector,$about,$user_id,'uploads/company_logo/'.$filename,$city,
    $rcc,$fax,$website,$linkedin,$twitter_link,$facebook_link,$Job->active_status],
    false,false);
    http_response_code(201);
    echo $Job->actionSuccess('Company profile created');
    return;
       
} catch (\Throwable $th) {
    http_response_code(500);
  echo  $Job->actionFailure($th->getMessage());
    return;
}

