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

$company = $job->query("SELECT * FROM company_profile WHERE user_id = ? AND is_active = ?",[$user_id,1]);
$cp = $company->_result[0];
?>

<!DOCTYPE html>
<html>
<head>
<?php include '../includes/header.php' ?>
<title><?=$cp->name?> on Ononiru Jobs</title>
</head>
    <body>
        <?php include '../includes/company_sidebar_menu.php' ?>
        <?php include '../includes/company_mobile_sidebar.php' ?>

        <div class='page-div'>
            <div>
                <div class="ui small huge menu">
                    <a class="item borderless navbar-logo" href="/"><img src="../static/images/avatar/ononiru.png" alt="ononiru">noniru</a>
                    <h2 class="ui item borderless medium header navbar-title">Company profile</h2>
                    <div class="right menu">
                        <div class="ui item navbar-logout borderless">
                            <a href="logout.php"Logout</a> 
                        </div>
                        <a class="toc item borderless navbar-sidebar-toggle"><i class="sidebar icon"></i></a>
                    </div>
                </div>

                <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                    <form action="" enctype="multipart/form-data" id="company_profile">
                        <!-- <div class="row">
                            <h1 class="ui huge dividing header">Company profile</h1>
                        </div> -->
                        <div class="ui grid">    
                            <div class="ui sixteen wide column">
                                <div class="ui equal width form">
                                    <div class="fields">
                                        <div class="field">
                                            <label>Company Name</label>
                                            <input id="company_name" name="company_name" type="text" placeholder="Company Inc" value="<?=$cp->name?>">
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>Company Description</label>
                                            <textarea id="about" placeholder="">
                                                <?=$cp->about?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>Sector</label>
                                            <select id="sector" class="ui search dropdown" disabled>
                                                <option value="<?=$cp->sector?>"><?=$cp->sector?></option>
                                               
                                            </select>
                                        </div>
                                        <div class="field">
                                            <label>Company RCC</label>
                                            <input id="rcc" type="text" placeholder="Company RCC" value="<?=$cp->RCC?>">
                                        </div>
                                        <div class="field">
                                            <label>Company Logo</label>
                                            <input id="logo" type="file" name="logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    
                        </div>
                        <div class="row">
                            <h2 class="ui huge dividing header">Social Media information</h2>
                        </div>
                        <div class="ui grid">    
                                <div class="ui sixteen wide column">
                                    <div class="ui equal width form">
                                        <div class="fields">
                                            <div class="field">
                                                <label>Facebook</label>
                                                <input id="facebook" value="<?=$cp->facebook_url?>" type="text" placeholder="https://facebook.com/acompany">
                                            </div>
                                            <div class="field">
                                                <label>Twitter</label>
                                                <input id="twitter" value="<?=$cp->twitter_url?>" type="text" placeholder="https://twitter.com/acompany">
                                            </div>
                                            <div class="field">
                                                <label>LinkedIn</label>
                                                <input id="linkedin" value="<?=$cp->linkedin_url?>" type="text" placeholder="https://linkedin.com/acompany">
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
                                            <input id="phone1" type="text" value="<?=$cp->phone1?>" placeholder="+234700004758">
                                        </div>
                                        <div class="field">
                                            <label>Phone 2</label>
                                            <input id="phone2" type="text" value="<?=$cp->phone2?>" placeholder="+234700004758">
                                        </div>
                                        
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>Website</label>
                                            <input id="website" type="text" value="<?=$cp->website?>" placeholder="https://acompany.com">
                                        </div>
                                        <div class="field">
                                            <label>Email</label>
                                            <input id="email" type="email" value="<?=$cp->email?>" placeholder="admin@acompany.com">
                                        </div>
                                        <div class="field">
                                            <label>Fax </label>
                                            <input id="fax" type="text" value="<?=$cp->fax?>" placeholder="Fax">
                                        </div>
                                    </div>
                                    <div class="fields">
                                            <div class="field">
                                                <label>Address</label>
                                                <input id="address" value="<?=$cp->address?>" type="text" placeholder="No 23 vinyl street,Ikota">
                                            </div>
                                            <div class="field">
                                                <label>Location</label>
                                                <input id="city" value="<?=$cp->location?>" type="text" placeholder="Lagos">
                                            </div>
                                        </div>
                                </div>
                                <input type="submit" value="Update" class="ui green button right floated submit" id="submit-btn"/>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="../js/jquery.min.js"></script>
        <script src="../js/iziToast.min.js"></script>
        <script src="../semantic/dist/semantic.min.js"></script>
        <script src="../js/create_company_profile.js"></script>
        <script src="../js/script.js"></script>
    </body>
</html>