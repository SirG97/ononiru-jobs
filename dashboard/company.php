<?php
session_start();

require '../vendor/autoload.php';
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
 header('Location: company_new.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel="stylesheet" href="../semantic/dist/semantic.min.css">
        <link rel='stylesheet' type='text/css' href='../css/space_app.css'/>
        <link rel='stylesheet' type='text/css' href='../css/style.css'/>
<style>
    *{
        padding: 0;
        margin: 0;
    }
</style>
</head>
    <body>
        <?php include '../includes/company_sidebar_menu.php' ?>
        <div class='page-div'>
            <div>
                <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                    <div class="row">
                        <h1 class="ui huge dividing header">Company profile</h1>
                    </div>
                    <div class="ui grid">    
                        <div class="ui sixteen wide column">
                            <div class="ui equal width form">
                                <div class="fields">
                                    <div class="field">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="Congredia">
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="field">
                                        <label>Company Description</label>
                                        <textarea placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="field">
                                        <label>Industry</label>
                                        <select class="ui search dropdown">
                                        <option value="">Programming</option>
                                        <option value="AF">Human Resource</option>
                                        <option value="AX">Finance</option>
                                        <option value="AL">Web Design</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="field">
                                    <label>Company Name</label>
                                    <input type="text" placeholder="Company">
                                    </div>
                                    <div class="field">
                                        <label>Company ID</label>
                                        <input type="text" placeholder="Salary Range">
                                    
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="field">
                                    <label>Company Logo</label>
                                    <input type="file" placeholder="Location">
                                    </div>
                                    <div class="field">
                                        <label>Location</label>
                                        <input type="text" placeholder="Location">
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                    <div class="row">
                        <h1 class="ui huge dividing header">Social Media information</h1>
                    </div>
                    <div class="ui grid">    
                            <div class="ui sixteen wide column">
                                <div class="ui equal width form">
                                    <div class="fields">
                                        <div class="field">
                                            <label>Facebook</label>
                                            <input type="text" placeholder="https://facebook.com/acompany">
                                        </div>
                                        <div class="field">
                                            <label>Twitter</label>
                                            <input type="text" placeholder="https://twitter.com/acompany">
                                        </div>
                                        <div class="field">
                                            <label>LinkedIn</label>
                                            <input type="text" placeholder="https://linkedin.com/acompany">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    
                    </div>
                    <div class="row">
                            <h1 class="ui huge dividing header">Contact information</h1>
                        </div>
                        <div class="ui grid">    
                                <div class="ui sixteen wide column">
                                    <div class="ui equal width form">
                                        <div class="fields">
                                            <div class="field">
                                                <label>Phone</label>
                                                <input type="text" placeholder="+234700004758">
                                            </div>
                                            <div class="field">
                                                <label>Email</label>
                                                <input type="text" placeholder="admin@acompany.com">
                                            </div>
                                            <div class="field">
                                                <label>Website</label>
                                                <input type="text" placeholder="https://acompany.com">
                                            </div>
                                        </div>
                                        <div class="fields">
                                                <div class="field">
                                                    <label>City</label>
                                                    <input type="text" placeholder="Lagos">
                                                </div>
                                                <div class="field">
                                                    <label>Country</label>
                                                    <input type="text" placeholder="Nigeria">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                        
                        </div>
                </div>
            </div>
        </div>

        <script src="../js/jquery.min.js"></script>
        <script src="../semantic/dist/semantic.min.js"></script>
    </body>
</html>