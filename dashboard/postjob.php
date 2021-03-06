<?php
session_start();
require '../vendor/autoload.php';
$_SESSION['user_id'] = 'dnwenicwo-qfqefwfwfw-fwqfqfq';
use Ononiru\Config\Database;
use Ononiru\Core\Job;


 //sql query
  $db = new Database();
  $job = new Job($db->getConnection());

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
if(is_null($user_id)){
  $_SESSION['user_error_message'] = 'User_Id is null';
  header('Location: ../../login.php');

}
//verify user 

$user = $job->query("SELECT * FROM users WHERE userid = ?",[$user_id]);
if($job->_count <= 0 ){
  $_SESSION['user_error_message'] = 'User not found';
  header('Location: ../../login.php');
}

//check if user uses company
$_user =  $job->_result[0];
if(!$_user->uses_job){
  header('Location: company.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
    <?php include '../includes/header.php' ?>
    </head>
    <body>
      <?php include '../includes/company_sidebar_menu.php' ?>
      <?php include '../includes/company_mobile_sidebar.php' ?>
        <div class='page-div'>
            <div>
            <div class="ui small huge menu">
                    <a class="item borderless navbar-logo" href="/"><img src="../static/images/avatar/ononiru.png" alt="ononiru">noniru</a>
                    <h2 class="ui item borderless medium header navbar-title">Post job</h2>
                    <div class="right menu">
                        <div class="ui item navbar-logout borderless">
                            Logout 
                        </div>
                        <a class="toc item borderless navbar-sidebar-toggle"><i class="sidebar icon"></i></a>
                    </div>
                </div>
                <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                    <!-- <div class="row">
                        <h1 class="ui huge dividing header">Post Job</h1>
                    </div> -->
                    <div class="ui grid padded">    
                        <div class="ui sixteen wide column">
                          <form action="" class="ui form" id="create_job_form" method="POST">
                            <div class="ui equal width form">
                                <div class="fields">
                                  <div class="field">
                                    <label>Job Title</label>
                                    <input type="text" id="job_title" placeholder="Junior Software Developer" required>
                                  </div>
                                </div>
                                <div class="fields">
                                  <div class="field">
                                    <label>Description</label>
                                    <textarea id="job_description" placeholder="Job Description" required></textarea>
                                  </div>
                                </div>
                                <div class="fields">
                                  <div class="field">
                                    <label>Job type</label>
                                    <select id="sector" name="sector" class="ui search dropdown" required>
                                      <option value="ASDFEQQ-QFQCWFDW2FW-QVQVQ-GVB4EBE">Web Design & IT</option>
                                      <option value="SSCWQDVVC-WUYGBNCQ-WDCQCA">Engineering</option>
                                      <option value="ASOIUYWGCW-VWCQCNIEQ-QECQSCXQ">Finance</option>
                                      <option value="SKJYTFVBNWCX-HGVBNKJHGCX-WCXGVBNWM">Oil & Gas</option>
                                      
                                    </select>
                                  </div>
                                  <div class="field">
                                      <label>Gender</label>
                                      <select id="gender" name="dropdown" class="ui dropdown" required>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                      </select>
                                  </div>
                                  
                                </div>
                                <div class="fields">
                                    <div class="field">
                                      <label>Company Name</label>
                                      <input type="text" id="company_name" placeholder="Company" required>
                                    </div>
                                    <div class="field">
                                        <label>Experience Level</label>
                                        <select id="experience_level" class="ui search dropdown" required>
                                          <option value="1">1 year</option>
                                          <option value="2">2 years</option>
                                          <option value="3">3 years</option>
                                          <option value="4">4 years</option>
                                          <option value="5+">5+ years</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="field">
                                      <label>Minimum Age</label>
                                      <input type="number" min="18" max="40" id="min_age" placeholder="18" required>
                                    </div>
                                    <div class="field">
                                      <label>Minimum Age</label>
                                      <input type="number" min="18" max="40" id="max_age" placeholder="40" required>
                                    </div>
                                    <div class="field">
                                        <label>Location</label>
                                        <input type="text" id="location" placeholder="Location" required>
                                    </div>
                                </div>
                              
                                <div class="fields">
                                    <div class="field">
                                      <label>Salary Range</label>
                                      <input type="text" id="salary_range" placeholder="200k - 500k" required>
                                    </div>
                                    <div class="field">
                                        <label>Working Hours</label>
                                        <input type="text" id="working_hours" placeholder="8:00am - 4:00pm GMT+1" required>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="ui green button right floated submit" id="submit-btn">Submit</button>
                            <div class="ui error message"></div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../js/jquery.min.js"></script>
        <script src="../js/iziToast.min.js"></script>
        <script src="../semantic/dist/semantic.min.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/createjob.js"></script>
    </body>
</html>