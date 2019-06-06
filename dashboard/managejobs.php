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
                    <h2 class="ui item borderless medium header navbar-title">Manage jobs</h2>
                    <div class="right menu">
                        <div class="ui item navbar-logout borderless">
                            Logout 
                        </div>
                        <a class="toc item borderless navbar-sidebar-toggle"><i class="sidebar icon"></i></a>
                    </div>
                </div>
            <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                <!-- <div class="row">
                    <h1 class="ui huge dividing header">Manage Jobs</h1>
                </div> -->
                <div class="ui grid padded">    
                    <div class="ui sixteen wide column">
                            <table class="ui celled green table large">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Application</th>
                                            <th>Created</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="company_jobs">

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">
                                                <div class="ui right floated pagination menu">
                                                <a class="icon item"><i class="left chevron icon"></i></a>
                                                <a class="item">1</a>
                                                <a class="item">2</a>
                                                <a class="item">3</a>
                                                <a class="item">4</a>
                                                <a class="icon item"><i class="right chevron icon"></i></a>
                                                </div>
                                            </th>
                                        </tr>
                                    </tfoot>
                            </table>
                    </div>
                            
                </div>
            </div>
            
        </div>
    </div>

    <script src="../js/jquery.min.js"></script>
        <script src="../js/iziToast.min.js"></script>
        <script src="../semantic/dist/semantic.min.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/managejobs.js"></script>
</body>
</html>