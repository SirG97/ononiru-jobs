<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/candidate_header_files.php'; ?>
    <style>
    .ui.middle.aligned.center.grid {
      height: 100%;
    }
    .ui.middle.aligned.center.grid > .column {
      max-width: 450px;
      margin: auto;
      text-align: center;
    }

    .ui.large.form{
        text-align: left;
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
            <h2 class="ui item borderless medium header navbar-title">Subscribe</h2>
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
                            Select a plan and subscribe
                        </h2>
                            <form class="ui large form">
                            <div class="ui stacked segment">
                                <div class="field">
                                    <label>Plans</label>
                                    <select id="plan" class="ui search dropdown" required>
                                    <option value="basic">Basic</option>
                                    <option value="classic">Classic</option>
                                    <option value="premium">Premium</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Category</label>
                                    <select id="job_category" class="ui search dropdown" required>
                                    <option value="programming">Programming</option>
                                    <option value="design">UX/UI design</option>
                                    <option value="finance">Finance</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Location</label>
                                    <select id="job_location" class="ui search dropdown" required>
                                    <option value="lagos">Lagos</option>
                                    <option value="abuja">Abuja</option>
                                    <option value="portharcourt">Port Harcourt</option>
                                    <option value="owerri">Owerri</option>
                                    <option value="benin">Benin</option>
                                    <option value="calabar">calabar</option>
                                    <option value="aba">Aba</option>
                                    </select>
                                </div>
                            
                                <div class="field">
                                    <label>Email</label>
                                    <div class="ui left icon input">
                                        <i class="user icon"></i>
                                        <input type="email" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="field" id="phone_container">
                                    <label>Phone number</label>
                                    <div class="ui left icon input">
                                        <i class="phone icon"></i>
                                        <input id="phone_number" type="text" name="phone" placeholder="phone">
                                    </div>
                                </div>
                                <div class="field" id="cv_container">
                                    <label>CV</label>
                                    <div class="ui left icon input">
                                        <i class="key icon"></i>
                                        <input type="file" id="cv" name="CV" placeholder="">
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="amount">Amount</label>
                                    <div class="ui right labeled input">
                                    <label for="amount" class="ui label">$</label>
                                    <input type="text" placeholder="Amount" id="amount" value="0" readonly>
                                    <div class="ui basic label">.00</div>
                                    </div>
                                </div>
                                <div class="field">
                                    <button type="submit" class="ui green button floated right" id="subscribe_btn">
                                        Checkout &nbsp;
                                        <i class="cart icon"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="ui error message"></div>

                            </form>
                        </div>
                    </div> 
                    </div>     
                </div>
            </div>
            
        </div>
    </div>

<script src="js/jquery.min.js"></script>
<script src="semantic/dist/semantic.min.js"></script>
<script src="js/iziToast.min.js"></script>
<script src="js/script.js"></script>
<script src="js/subscribe.js"></script>


</body>
</html>