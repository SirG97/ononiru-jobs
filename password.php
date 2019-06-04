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
 .ui.middle.aligned.center.grid {
      height: 100%;
    }
    .ui.middle.aligned.center.grid > .column {
      max-width: 450px;
      margin: auto;
      text-align: center;
    }
</style>
    </head>
    <body>
        <?php include 'includes/candidate_sidebar_menu.php' ?>
        <?php include 'includes/candidate_mobile_sidebar.php'; ?>
        <div class='page-div'>
            <div>
                <div class="ui small huge menu">
                <a class="item borderless navbar-logo" href="/"><img src="../static/images/avatar/ononiru.png" alt="ononiru">noniru</a>
                <h2 class="ui item borderless medium header navbar-title">Change password</h2>
                <div class="right menu">
                    <div class="ui item navbar-logout borderless">
                        Logout 
                    </div>
                    <a class="toc item borderless navbar-sidebar-toggle"><i class="sidebar icon"></i></a>
                </div>
            </div>
            <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                <div class="ui grid">    
                    <div class="ui sixteen wide column">
                        <div class="ui middle aligned center grid">
                            <div class="column">
                            <h2 class="ui green image header">
                                Change password
                            </h2>
                                <form class="ui large form">
                                <div class="ui stacked segment">
                                    <div class="field">
                                    <div class="ui left icon input">
                                        <i class="user icon"></i>
                                        <input type="password" name="email" placeholder="Old password">
                                    </div>
                                    </div>
                                    <div class="field">
                                    <div class="ui left icon input">
                                        <i class="key icon"></i>
                                        <input type="password" name="location" placeholder="New password">
                                    </div>
                                    </div>
                                    <div class="field">
                                    <div class="ui left icon input">
                                        <i class="key icon"></i>
                                        <input type="password" name="Phone" placeholder="New password">
                                    </div>
                                    </div>
                                
                                    <div class="ui fluid large green submit button">Change</div>
                                </div>

                                <div class="ui error message"></div>

                                </form>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="semantic/dist/semantic.min.js"></script>
        <script src="js/script.js"></script>

    </body>
</html>