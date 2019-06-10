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
                    <h2 class="ui item borderless medium header navbar-title">Applicants</h2>
                    <div class="right menu">
                        <div class="ui item navbar-logout borderless">
                            Logout 
                        </div>
                        <a class="toc item borderless navbar-sidebar-toggle"><i class="sidebar icon"></i></a>
                    </div>
                </div>
                <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                    <!-- <div class="row">
                        <h1 class="ui huge dividing header">Applicants</h1>
                    </div> -->
                    <div class="ui grid padded">    
                        <div class="ui sixteen wide column">
                            <div class="ui segment">
                                <div class="ui link divided items pad-1" id="applicants">
                                        
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
            </div>
        </div>

        <script src="../js/jquery.min.js"></script>
        <script src="../js/iziToast.min.js"></script>
        <script src="../semantic/dist/semantic.min.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/allApplicants.js"></script>
        <script src="../js/shortlist.js"></script>
    </body>
</html>