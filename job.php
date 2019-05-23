<?php
session_start();
//start server side rendering
$job_id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$activa_status = 1;
$table_name = 'jobs';

trim($job_id);
htmlspecialchars($job_id);
$job_id = strtolower($job_id);

if (is_null($job_id)) {
    header('Location: index.html');
} else {
    if (file_exists('api/config/db.php') && file_exists('api/core/index.php')) {
        include_once 'api/config/db.php';
        include 'api/core/index.php';

    } else {
        throw new Exception('Some Files could not be found', 404);
    }

    try {

        //sql query
        $db = new Database();
        $job = new Job($db->getConnection());
        $job->id = $job_id;
        $job->readOne();
    
    } catch (\Throwable $th) {
        echo $th->getMessage();
        die('SQL query Failed');
    }

}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel="stylesheet" href="semantic/dist/semantic.min.css">
        <link rel='stylesheet' type='text/css' href='css/space_app.css'/>
        <link rel='stylesheet' type='text/css' href='css/style.css'/>
<style>
*{
    padding: 0;
    margin: 0;
}
</style>
    </head>
    <body>
        <div class='menu-div s-hide m-hide l-show' style='height: 100%;'>
            <div class="pad-2 ">
                <div class="logo-container">
                    <img src="static/images/avatar/ononiru.png" alt="" style="width: 60px; height: auto;"><h6 style="font-size: 22px; display: inline-block;font-weight: normal;">noniru</h6>
                </div>
                <div class="ui vertical borderless fluid text pad">
                    <a href="/ojob/dashboard.html" class="pad-1 active item pad">Dashboard</a>
                    <a href="/ojob/company.html" class="pad-1 item pad">Company profile</a>
                    <a href="/ojob/managejobs.html" class="pad-1 item pad">Manage Jobs</a>
                    <a href="/ojob/applicants.html" class="pad-1 item pad">Applicants</a>
                    <a href="/ojob/postjob.html" class="pad-1 item pad">Post new job</a>
                    <a href="/ojob/password.html" class="pad-1 item pad">Change password</a>
                    <a class="pad-1 item pad">Logout</a>
                </div>
            </div>
        </div>
        <div class='page-div'>
            <div>
                <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                    <div class="row">
                        <h1 class="ui huge dividing header"><?=$job->title?></h1>
                    </div>
                    <div class="ui grid padded">
                        <div class="ui sixteen wide column">
                            <div class="ui segment">
                                <div class="ui center aligned meta-list">
                                    <div class="ui large horizontal divided list">
                                        <div class="item">
                                            <i class="marker alternate icon"></i>
                                          <div class="content">
                                            <div class="header"><?=$job->location?></div>
                                          </div>
                                        </div>
                                        <div class="item">
                                            <i class="phone icon"></i>
                                          <div class="content">
                                            <div class="header">+ <?=$job->phone?></div>
                                          </div>
                                        </div>
                                        <div class="item">
                                            <i class="envelope outline icon"></i>
                                          <div class="content">
                                            <div class="header"><?=$job->company_email?></div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <div class="ui message">
                                    <ul class="ui list">
                                        <div class="item">
                                            <i class="money icon"></i>
                                            <div class="content">
                                                Salary: <?=$job->salary_range?>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <i class="shield icon"></i>
                                            <div class="content">
                                                Experience level: <?=$job->experience_level?> years
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                    <!-- ======================= -->
                                    <!-- Education -->
                                    <!-- ======================= -->
                                    <div class="row">
                                        <h3 class="ui big dividing header">Job Description</h3>
                                    </div>
                                    <div class="ui message">
                                        <?=$job->description?>
                                    </div>
                                    <!-- ======================= -->
                                    <!-- Work Experience -->
                                    <!-- ======================= -->
                                    <div class="row">
                                        <h3 class="ui big dividing header">Required skills, knowledge and abilities</h3>
                                    </div>
                                    <div class="ui message">
                                        <div class="ui list">
                                      
                                    <?=$job->qualification?>
                                    </div>
                                    </div>

                                    <!-- ======================= -->
                                    <!-- Skills -->
                                    <!-- ======================= -->

                                    <div class="row">
                                        <h3 class="ui big dividing header">Education + Experience</h3>
                                    </div>
                                    <div class="ui message">
                                        <?=$job->education?>
                                    </div>

                            </div>
                            <button class="ui green button right floated apply-button">Apply</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ui mini modal" 
                <i class="close icon"></i>
                <div class="header">
                  Confirmation
                </div>
                <div class="content">
                  <div class="description">
                    Please confirm that you want to apply to this job
                  </div>
                </div>
                <div class="actions">
                  <div class="ui button red">Cancel</div>
                  <div class="ui button green" onclick=jobApplyInit("<?=$job_id?>","<?=$job->company_id?>")>OK</div>
                </div>  
              </div>
        <script src="js/jquery.min.js"></script>
        <script src="semantic/dist/semantic.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.mini.modal')
                .modal('attach events', '.apply-button.button', 'show')

            });
        </script>
        <script src="./js/jobApply.js"></script>
    </body>
</html>
