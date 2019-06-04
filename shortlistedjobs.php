<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel="stylesheet" href="semantic/dist/semantic.min.css">
        <link rel='stylesheet' type='text/css' href='css/space_app.css'/>
        <link rel='stylesheet' type='text/css' href='css/style.css'/>
        <title>ShortListed Jobs </title>
<style>
*{
    padding: 0;
    margin: 0;
}
</style>
    </head>
    <body>
        <?php include 'includes/candidate_sidebar_menu.php';?>
        <?php include 'includes/candidate_mobile_sidebar.php'; ?>
        <div class='page-div'>
            <div>
                <div class="ui small huge menu">
                <a class="item borderless navbar-logo" href="/"><img src="../static/images/avatar/ononiru.png" alt="ononiru">noniru</a>
                <h2 class="ui item borderless medium header navbar-title">All Shortlisted Jobs
                <br>    
                <hr>
                <small>Here, you can see all successful job applications.</small>
                </h2>
                <div class="right menu">
                    <div class="ui item navbar-logout borderless">
                        Logout 
                    </div>
                    <a class="toc item borderless navbar-sidebar-toggle"><i class="sidebar icon"></i></a>
                </div>
            </div>
                <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                    <div class="ui grid padded">    
                        <div class="ui sixteen wide column">
                                <table class="ui celled green table large">
                                        <thead>
                                            <tr>
                                                <th>Job Title</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody id="applied_job_row">
                                        <tr>
                                            <td data-label="Name">Loading..</td>
                                            <td data-label="">
                                                
                                                    <div class="ui icon buttons">
                                                        <button class="ui blue button" disabled>
                                                                <i class="eye icon"></i>
                                                        </button>
                                                        <button class="ui yellow button" disabled>
                                                            <i class="pencil icon"></i>
                                                        </button>
                                                        <button class="ui red button" disabled>
                                                            <i class="trash alternate outline icon"></i>
                                                        </button>
                                                    </div>
                                            
                                            </td>
                                            </tr>
                                              
                                        </tbody>
                                        <tfoot  id="pagination_row">
                                           
                                        </tfoot>
                                </table>
                        </div>
                                
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="semantic/dist/semantic.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/user_shortlisted_jobs.js"></script>
    </body>
</html>