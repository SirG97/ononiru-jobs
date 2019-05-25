<?php
session_start();
require '../../vendor/autoload.php';

use Ononiru\Config\Database;
use Ononiru\Core\Base;
use Ononiru\Core\job;

/**
 * Dump and die a data
 * @return mixed
 * @param required
 */
function dd($data = '') : void
{
    echo '<pre>';
    echo var_dump($data);
    echo '</pre>';
}

/**
 * Baptize the value
 * @param mixed required $data , data to sanitize
 * @return mixed
 */
function sanitize($data)
{
    trim($data);
    \htmlspecialchars($data);
    \strip_tags($data);
    stripcslashes($data);
    return $data;
}
// subscribe users to job alert
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// include database and object files
include_once '../config/database.php';
include_once '../core/index.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare job object
$job = new job($db);

require '../../vendor/autoload.php';

// use Ramsey\Uuid\Uuid;

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



$job_category = isset($_REQUEST['category_id']) ? $_REQUEST['category_id'] : null;
$job_location = isset($_REQUEST['location_id']) ? $_REQUEST['location_id'] : null;
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
$plan = isset($_REQUEST['plan_id']) ? $_REQUEST['plan_id'] : null;
$phone_number = isset($_REQUEST['phonenumber']) ? $_REQUEST['phonenumber'] : null;
$cv = isset($_FILES['cv']) ? $_FILES['cv'] : null;
$active = 1;
$not_active = !$active;
$job_sub_id = uniqid() . time() . md5('ononirujobs');

$response = new Base();

if (is_null(sanitize($job_category))) {
    echo $response->forbidden('Job Category cannot be empty');
    return;
} else if (sanitize($job_location) == null) {
    echo $response->forbidden('Job Location cannot be empty');
    return;

} else if (sanitize($plan) == null || empty(sanitize($plan))) {
    echo $response->forbidden('Job Plan cannot be empty');
    return;
}

//check if job plan exists

try {

    $job->query("SELECT * FROM job_subscription_plan WHERE plan_id = ? ", [sanitize($plan)]);

    if (empty($job->_result)) {
        echo $response->actionFailure('Opps! Something went wrong, error code 09876tyuix - number' . $job->_count);
        return;
    }

} catch (\Throwable $th) {

    echo $response->actionFailure($th->getMessage());
    return;
}

//check plan and requirements
$job->query("SELECT plan_id,requirements FROM job_subscription_plan", []);
$res = $job->_result;

$basicPlan = $res[0];
$premiumPlan = $res[1];
$classicPlan = $res[2];

if ($plan == $basicPlan->plan_id) {
    // subscribe to basic plan

    $requirements = json_decode(($basicPlan->requirements));

    foreach ($requirements as $key) {

        if (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '') {
            if (!($Key == 'cv')) {
                echo $response->forbidden($key . ' is required for this plan o');
                return;
            }

        }

    }

    try {

        $job->query("SELECT * FROM job_subscribers WHERE email = ? AND status = ?", [$email, $active]);

        if (!empty($job->_result)) {
            echo $response->actionFailure('User trying to subcribe the second time');
            return;
        }
        if ($user_id == null || $user_id == '') {

            $job->query("INSERT INTO job_subscribers SET email = ?,status = ?,job_subscribers_id = ?,job_subscription_plan_id = ?",
                [$email, $not_active, $job_sub_id, $basicPlan->plan_id], false, false);
            echo $response->actionSuccess('Go ahead with payments');
            return;

        } else {
            //insert where user id session is found

            $job->query("INSERT INTO job_subscribers SET emaill=?,status = ?,job_subscribers_id = ?,job_supscription_plan_id = ?,user_id = ?",
                [$email, $not_active, $job_sub_id, $plan, $user_id], false, false);

            echo $response->actionSuccess('Go ahead with payments');
            return;
        }

    } catch (\Throwable $th) {
        echo $response->actionFailure($th->getMessage());
        return;
    }

} else if ($plan == $premiumPlan->plan_id) {
// subscribe user to premium
$requirements = json_decode(($premiumPlan->requirements));

foreach ($requirements as $key) {

    if ($key == 'cv') {

        if (!isset($_FILES['cv']) || $_FILES['cv'] == '') {

            echo $response->forbidden($key . ' is required for this plan ' . $cv);
            return;
        }
    } else {
        if (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '') {

            echo $response->forbidden($key . ' is required for this plan o');
            return;

        }
    }
}

try {

    $job->query("SELECT * FROM job_subscribers WHERE email = ? AND status = ?", [$email, $active]);

    if (!empty($job->_result)) {
        echo $response->actionFailure('User trying to subcribe the second time');
        return;
    }

    if ($user_id == null || $user_id == '') {

        $job->query("INSERT INTO job_subscribers SET phone_number = ?,email = ?,status = ?,job_subscribers_id = ?,job_subscription_plan_id = ?",
            [$phone,$email, $not_active, $job_sub_id, $premiumPlan->plan_id], false, false);
            echo $response->actionSuccess('Go ahead with payments');

        return;

    } else {
        //insert where user id session is found

        $job->query("INSERT INTO job_subscribers SET phone_number = ?,emaill=?,status = ?,job_subscribers_id = ?,job_supscription_plan_id = ?,user_id = ?",
            [$phone,$email, $not_active, $job_sub_id, $plan, $user_id], false, false);

        echo $response->actionSuccess('Go ahead with payments');
        return;
    }

} catch (\Throwable $th) {
    echo $response->actionFailure($th->getMessage());
    return;
}
   

} else if ($plan == $classicPlan->plan_id) {
    //classic plan

 $requirements = json_decode(($classicPlan->requirements));

    foreach ($requirements as $key) {

        if ($key == 'cv') {

            if (!isset($_FILES['cv']) || $_FILES['cv'] == '') {

                echo $response->forbidden($key . ' is required for this plan ' . $cv);
                return;
            }
        } else {
            if (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '') {

                echo $response->forbidden($key . ' is required for this plan o');
                return;

            }
        }
    }

    try {

        $job->query("SELECT * FROM job_subscribers WHERE email = ? AND status = ?", [$email, $active]);

        if (!empty($job->_result)) {
            echo $response->actionFailure('User trying to subcribe the second time');
            return;
        }

        if ($user_id == null || $user_id == '') {

            $job->query("INSERT INTO job_subscribers SET email = ?,status = ?,job_subscribers_id = ?,job_subscription_plan_id = ?",
                [$email, $not_active, $job_sub_id, $classicPlan->plan_id], false, false);

            //upload cv

            if ($cv['size'] > 300000) {
                echo $job->forbidden('File size too large');
                return;
            }

            $type = explode('/', $cv['type']);
            if ($type[1] != 'pdf') {
                echo $job->forbidden('Only pdf file type is allowed');
                return;
            }
            if ($cv['error']) {
                echo $job->actionFailure('File could not be uploaede');
                return;
            }
            $filename = time() . uniqid() . '.' . $type[1];

            $uploaded = move_uploaded_file($cv['tmp_name'], '../uploads/cv/' . $filename);

            if ($uploaded && !($cv['error'])) {
                // add cv to table
                $_query = "INSERT INTO job_application_cv SET cv_id = :cv_id , user_id = :userid, path = :path,job_subscriber_id = :job_subscriber_id";
                $cv_id = time() . uniqid('cv', true);
                $stmt = $db->prepare($_query);
                $stmt->bindParam(':cv_id', $cv_id);
                $stmt->bindParam(':userid', $user_id);
                $stmt->bindParam(':path', $filename);
                $stmt->bindParam(':job_subscriber_id', $job_sub_id);

                if (!$stmt->execute()) {
                    echo $job->actionFailure('Opps! Table could not be updated');
                    return;
                }
            }

            echo $response->actionSuccess('Go ahead with payments');

            return;

        } else {
            //insert where user id session is found

            $job->query("INSERT INTO job_subscribers SET emaill=?,status = ?,job_subscribers_id = ?,job_supscription_plan_id = ?,user_id = ?",
                [$email, $not_active, $job_sub_id, $plan, $user_id], false, false);

            echo $response->actionSuccess('Go ahead with payments');
            return;
        }

    } catch (\Throwable $th) {
        echo $response->actionFailure($th->getMessage());
        return;
    }

}
