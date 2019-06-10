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
            <h2 class="ui item borderless medium header navbar-title">Applicant</h2>
            <div class="right menu">
                <div class="ui item navbar-logout borderless">
                    Logout 
                </div>
                <a class="toc item borderless navbar-sidebar-toggle"><i class="sidebar icon"></i></a>
            </div>
        </div>
            <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                    <!-- <div class="row">
                        <h1 class="ui huge dividing header">Applicant</h1>
                    </div> -->
                    <div class="ui hidden section divider"></div>
                    <div class="ui segment">
                        <div class="ui center aligned " style=""->
                            <!-- ======================= -->
                            <!-- Personal Information -->
                            <!-- ======================= -->
                            <img class="ui centered circular small image" src="static/images/avatar/nan.jpg">
                            <div class="content" style="text-align:center">
                                <h3 class="ui huge header">Veronika Ossi</h3>
                                <div class="ui large meta">UI/UX Designer</div>
                            </div>
                        </div>
                            <!-- ======================= -->
                            <!-- Education -->
                            <!-- ======================= -->
                            <div class="row">
                                <h3 class="ui big dividing header">Education</h3>
                            </div>
                            <div class="ui items">
                            <div class="item">
                                <a class="ui image">
                                <i class="big graduation cap icon"></i>
                                </a>
                                <div class="content">
                                <a class="header">Stevie Feliciano</a>
                                <div class="meta">
                                    <span class="price">2007 - 2013</span>
                                </div>
                                <div class="description">
                                    <p>Stevie Feliciano is a <a>library scientist</a> living in New York City. She likes to spend her time reading, running, and writing.</p>
                                </div>
                                </div>
                            </div>
                            <div class="item">
                                <a class="ui image">
                                    <i class="big graduation cap icon"></i>
                                </a>
                                <div class="content">
                                <a class="header">Veronika Ossi</a>
                                <div class="meta">
                                    <span class="price">2007 - 2013</span>
                                </div>
                                <div class="description">
                                    <p>Veronika Ossi is a set designer living in New York who <a>enjoys</a> kittens, music, and partying.</p>
                                </div>
                                </div>
                            </div>
                            <div class="item">
                                <a class="ui image">
                                    <i class="big graduation cap icon"></i>
                                </a>
                                <div class="content">
                                <a class="header">Jenny Hess</a>
                                <div class="meta">
                                        <span class="price">2007 - 2013</span>
                                    </div>
                                <div class="description">
                                    <p>Jenny is a student studying Media Management at <a>the New School</a>.</p>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- ======================= -->
                            <!-- Work Experience -->
                            <!-- ======================= -->
                            <div class="row">
                                <h3 class="ui big dividing header">Work & Experience</h3>
                            </div>
                            <div class="ui items">
                            <div class="item">
                                <a class="ui image">
                                <i class="big green briefcase icon"></i>
                                </a>
                                <div class="content">
                                <a class="header">Paystack</a>
                                <div class="meta">
                                    <span class="price">2007 - 2013</span>
                                    <span class="price">Integration Engineer</span>
                                </div>
                                <div class="description">
                                    <p>Stevie Feliciano is a <a>library scientist</a> living in New York City. She likes to spend her time reading, running, and writing.</p>
                                </div>
                                </div>
                            </div>
                            <div class="item">
                                <a class="ui image">
                                    <i class="big green briefcase icon"></i>
                                </a>
                                <div class="content">
                                <a class="header">Flutterwave</a>
                                <div class="meta">
                                    <span class="price">2007 - 2013</span>
                                    <span class="price">Lead Frontend Engineer</span>
                                </div>
                                <div class="description">
                                    <p>Veronika Ossi is a set designer living in New York who <a>enjoys</a> kittens, music, and partying.</p>
                                </div>
                                </div>
                            </div>
                            <div class="item">
                                <a class="ui image">
                                    <i class="big green briefcase icon"></i>
                                </a>
                                <div class="content">
                                <a class="header">Andela</a>
                                <div class="meta">
                                        <span class="price">2007 - 2013</span>
                                        <span class="price">UI/UX Designer</span>
                                    </div>
                                <div class="description">
                                    <p>Jenny is a student studying Media Management at <a>the New School</a>.</p>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- ======================= -->
                            <!-- Skills -->
                            <!-- ======================= -->
                            <div class="row">
                                <h3 class="ui big dividing header">Skills</h3>
                            </div>
                            <div class="skill-progress pad-1">
                                <div class="ui progress red skill small" data-percent="94">
                                    <div class="bar">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="label">HTML & CSS</div>
                                </div>
                            <div class="ui progress red skill small" data-percent="70">
                                <div class="bar">
                                    <div class="progress"></div>
                                </div>
                                <div class="label">JavaScript</div>
                            </div>
                            <div class="ui progress red skill small" data-percent="64">
                                <div class="bar">
                                    <div class="progress"></div>
                                </div>
                                <div class="label">React</div>
                            </div>
                            <div class="ui progress red skill small" data-percent="80">
                                    <div class="bar">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="label">PHP</div>
                                </div>
                            </div>
                            <button class="ui green button right floated" id="shortlist_btn">Shortlist candidate</button>
                    </div>
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