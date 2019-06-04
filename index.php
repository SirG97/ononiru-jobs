<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no"
    />
    <meta
      name="description"
      content="Ononiru jobs is a platform for job seekers looking for their dream job and commpanies who wish to secure the right candidates."/>
    
    <title>Ononiru::jobs</title>
    <link rel="stylesheet" href="semantic/dist/semantic.min.css" type="text/css"/>
    <!-- <link rel="stylesheet" href="fontawesome-free-5.8.1-web/css/fontawesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
      body {
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: grayscale;
      }

      .hidden.menu {
        display: none;
      }

      .masthead.segment {
        min-height: 600px;
        padding: 1em 0em;
      }

      .masthead .logo.item img {
        margin-right: 1em;
      }

      .masthead .ui.menu .ui.button {
        margin-left: 0.5em;
      }

      .masthead h1.ui.header {
        margin-top: 2em;
        margin-bottom: 0em;
        font-size: 4em;
        font-weight: normal;
      }

      .masthead h2 {
        font-size: 1.7em;
        font-weight: normal;
      }

      .ui.vertical.stripe {
        padding: 8em 0em;
      }

      .ui.vertical.stripe h3 {
        font-size: 2em;
      }

      .ui.vertical.stripe .button + h3,
      .ui.vertical.stripe p + h3 {
        margin-top: 3em;
      }

      .ui.vertical.stripe .floated.image {
        clear: both;
      }

      .ui.vertical.stripe p {
        font-size: 1.33em;
      }

      .ui.vertical.stripe .horizontal.divider {
        margin: 3em 0em;
      }

      .quote.stripe.segment {
        padding: 0em;
      }

      .quote.stripe.segment .grid .column {
        padding-top: 5em;
        padding-bottom: 5em;
      }

      .footer.segment {
        padding: 5em 0em;
      }

      .secondary.pointing.menu .toc.item {
        display: none;
      }

      .toc.item{
          
        }

      @media only screen and (max-width: 700px) {
        .ui.fixed.menu {
          display: none !important;
        }

        .secondary.pointing.menu .right.item .item{
        /* .secondary.pointing.menu .menu { */
          display: none;
        }

       
        

        .secondary.pointing.menu .toc.item {
          display: block;
        }

        .masthead.segment {
          min-height: 350px;
        }

        .masthead h1.ui.header {
          font-size: 2em;
          margin-top: 1.5em;
        }

        .masthead h2 {
          margin-top: 0.5em;
          font-size: 1.5em;
        }
      }
      @media screen and (max-width: 320px){
        .secondary.pointing.menu .menu>.item{
          display: inline-block;
        }
      }
    </style>
  </head>

  <body id="root">
    <div class="ui large top fixed hidden menu">
      <div class="ui container">
        
        <a class="item" href="/"><img src="static/images/avatar/ononiru.png" alt="ononiru">noniru</a>
        <div class="right menu">
            <a class="item" href="company.php">I want to hire</a>
            <a class="item" href="#subscribe">Subscribe</a>
          <div class="item" href="#"><a class="">Log in</a></div>
          <div class="item" href="#"><a class="ui primary button">Sign Up</a></div>
        </div>
      </div>
    </div>
    <!--Sidebar Menu-->
    <div class="ui vertical inverted sidebar menu">
        <a class="item" href="/"><img src="static/images/avatar/ononiru.png" alt="ononiru">noniru</a>
        <a class="item" href="company.php">I want to hire</a> 
        <a class="item" href="#subscribe">Subscribe</a>
        <a class="item">Login</a> 
        <a class="item">Signup</a>
    </div>
    <!--Page Contents-->
    <div class="pusher">
      <div class="ui inverted vertical masthead center aligned segment">
        <div class="ui container">
          <div class="ui large secondary inverted pointing menu">
            <!-- former hambuger menu icon -->
            
            <a class="item" href="/"><img src="static/images/avatar/ononiru.png" alt="ononiru">noniru</a>
            <a class="toc item" style="position: absolute;right: 0;top: 30px;"><i class="sidebar icon"></i></a>
            <div class="right item">
              <a class="item" href="company.php">I want to hire</a>
              <a class="item" href="#subscribe">Subscribe</a>
              <a class="item">Log in</a>
              <a href="" class="item">Sign Up</a>
              
            </div>
          </div>
        </div>
        <div class="ui text container">
          <h1 class="ui inverted header">Ononiru Jobs</h1>
          <h2>Can't think of a tag line right now :(</h2>
          <div class="ui huge action input ">
            <input onkeyup="instantiateSearch(this.value)" id="search_input" type="text" placeholder="Search...">
            <button onclick="searchinit()" type="button" id="search_btn" class="ui green button">Search</button>
          </div>
          <div class="ui huge primary button" id="search_result" style="display:none">
            
          </div>
        </div>
      </div>
      <section id="category-grid">
        <h2 class="" style="text-align: center;">Popular Categories</h2>
          <div class="ui grid container stackable" id="job_featured_container">
              
          </div>
      </section>
      <section id="featured-grid">
          <h2 class="" style="text-align: center;">Featured Jobs</h2>
         <div class="ui container segments">
            <div class="ui divided items items-pad" id="featured_jobs">
               
              
            </div>
         </div>

      </section>
      
      <section id="call-to-action">
          <div class="ui two column stackable center aligned padded grid">
              <div class="row">
                <div class="green column call-to-action-column" style="">
                  <h3>I'M A RECRUITER</h3>
                  <p>O One of our jobs has some kind of flexibility jobs has some kind of flexibility option such as telecommuting, a part-time schedule or a flexible or flextime.</p>
							    <a href="dashboard/postjob.php" title="" class="ui button  green huge">Post new job</a>
                </div>
                <div class="yellow column call-to-action-column2">
                    <h3>I AM JOBSEEKER!</h3>
                    <p>One of our One of our jobs has some kind of flexibility jobs has some kind of flexibility option such as telecommuting, a part-time schedule or a flexible or flextime.</p>
                    <a href="jobs.php?s=" title="" class="ui button yellow huge">Browse Jobs</a>
                </div>
              </div>
          </div>
      </section>
      <section class="how-it-works">
        <div class="how-it-works-title">
          <h2>How does it work</h2>
        </div>
        <div class="ui stackable three column grid padded how-steps-container">
          <div class="column">
            <div class="how-steps">
              <div class="how-steps-icon">
                <span class="icon-main">
                  <i class="icon user"></i>
                </span>
              </div>
              <h3>Create your profile</h3>
              <p>We have qualified candidates and jobs that match your specification. Create a profile to access it.</p>
            </div>
           
          </div>
          <div class="column">
            <div class="how-steps">
              <div class="how-steps-icon">
                <span class="icon-main">
                  <i class="search engine icon"></i>
                </span>
              </div>
              <h3>Search and apply for a job</h3>
              <p>See a job you like? Click to view more and apply for jobs one the platform.</p>
            </div>

          </div>
          <div class="column">
            <div class="how-steps">
              <div class="how-steps-icon">
                <span class="icon-main">
                <i class="h square icon"></i>
                </span>
              </div>
              <h3> Get hired</h3>
              <p>That's it! very simple. Relax and wait for the calls for interview if you are shortlisted.</p>
            </div>
            
          </div>
        </div>
      </section>
      <section id="for-who">
          <h2 class="" style="text-align: center;">Who is ononiru jobs for</h2>
          <p style="text-align: center">Ononiru jobs is for job seekers and companies looking to find jobs tailored for them or find qualified candidate in less than 48 hours</p>
          <div class="ui stackable four column grid padded">
            <div class="column">
            <div class="for-who-tabs">
                <div class="image">
                  <img src="static/images/webdesign.png" alt="">
                </div>
                <div class="content">
                    <h4 class="header">Software Engineers</h4>
                    <div class="description">
                      <p>This is a little message that tries to explain the meaning of the header above. I think I need</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="column">
               <div class="for-who-tabs">
               <div class="image">
                  <img src="static/images/network.png" alt="">
                </div>
                <div class="content">
                    <h4 class="header">Network Engineers</h4>
                    <div class="description">
                      <p>This is a little message that tries to explain the meaning of the header above. I think I need </p>
                    </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="for-who-tabs">
                <div class="image">
                  <img src="static/images/design.png" alt="">
                </div>
                <div class="content">
                  <h4 class="header">UX/UI Designers</h4>
                  <div class="description">
                    <p>This is a little message that tries to explain the meaning of the header above. I think I need </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="for-who-tabs">
                <div class="image">
                  <img src="static/images/linechart.png" alt="">
                </div>
                <div class="content">
                    <h4 class="header">Sales professionals</h4>
                    <div class="description">
                      <p>This is a little message that tries to explain the meaning of the header above. I think I need</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </section>

      <section id="subscribe">
      <h2 style="text-align:center">Subscribe to our services</h2>
        <div class="ui container" id="subscribe">
            <div class="ui three columns stackable grid">
                <div class="column">
                    <div class="ui segments plan">
                        <div class="ui top attached segment grey inverted plan-title">
                            <span class="ui header">Basic</span>
                        </div>
                        <div class="ui  attached segment feature"> 
                          <div class="amount">$0</div>
                        </div>
                        <div class="ui  attached secondary segment feature">
                          <i class="icon green check"></i>  
                          Email Subscription
                        </div>
                        <div class="ui  attached segment feature">
                          <i class="icon green check"></i>
                            Personalized jobs
                        </div>         
                        <div class="ui  attached segment feature">
                            <i class="icon red remove"></i>
                              SMS notification
                        </div>    
                        <div class="ui  attached segment feature">
                        <i class="icon red remove"></i>
                            Automatic application
                        </div>  
                        <div class="ui  attached segment feature">
                          <i class="icon red remove"></i>
                              Professional CV writing
                          </div> 
                          <div class="ui  attached segment feature">
                          <i class="icon red remove"></i>
                              Ready made CV templates
                          </div> 
                        <div class="ui  attached segment feature">
                        <i class="icon red remove"></i>
                            CV review
                        </div>  
                        <div class="ui  attached segment feature">
                        <i class="icon red remove"></i>
                            Cover letter review
                        </div>  

                        <div class="ui bottom attached grey button btn-plan">
                            <i class="cart icon"></i>
                            <a href="freeform.php">SUBSCRIBE</a>
                        </div>
          
                    </div>
                </div>
              <div class="column">
                    <div class="ui segments plan principal">
                        <div class="ui top attached segment violet inverted plan-title">
                            <span class="plan-ribbon red">RECOMMENDED</span>
                            <span class="ui header">Premium</span>
                        </div>
                        <div class="ui  attached segment feature">
                          
                            <div class="amount">$100</div>
                          </div>
                        <div class="ui  attached secondary segment feature">
                            <i class="icon green check"></i>  
                            Email Subscription
                          </div>
                          <div class="ui  attached segment feature">
                            <i class="icon green check"></i>
                              Personalized jobs
                          </div>         
                          <div class="ui  attached segment feature">
                              <i class="icon green check"></i>
                                SMS notification
                            </div>    
                            <div class="ui  attached segment feature">
                              <i class="icon green check"></i>
                                Automatic application
                            </div>  
                            <div class="ui  attached segment feature">
                            <i class="icon green check"></i>
                                Professional CV writing
                            </div> 
                            <div class="ui  attached segment feature">
                            <i class="icon green check"></i>
                                Ready made CV templates
                            </div> 
                            <div class="ui  attached segment feature">
                              <i class="icon green check"></i>
                                Multiple CV review
                            </div>  
                            <div class="ui  attached segment feature">
                              <i class="icon green check"></i>
                                Cover letter review
                            </div>    
                            
                        <div class="ui bottom attached violet button btn-plan">
                            <i class="cart icon"></i>
                            <a href="premiumform.php">SUBSCRIBE</a>
                        </div>
          
                    </div>
                </div>
              <div class="column">
                    <div class="ui segments plan">
                        <div class="ui top attached segment brown inverted plan-title">
                            
                            <span class="ui header">Classic</span>
                        </div>
                        <div class="ui attached segment feature">
                          <div class="amount">$50</div>
                        </div>
                        <div class="ui  attached secondary segment feature">
                            <i class="icon green check"></i>  
                            Email Subscription
                          </div>
                          <div class="ui  attached segment feature">
                            <i class="icon green check"></i>
                              Personalized jobs
                          </div>         
                          <div class="ui  attached segment feature">
                              <i class="icon green check"></i>
                                SMS notification
                          </div>    
                          <div class="ui  attached segment feature">
                          <i class="icon red remove"></i>
                              Automatic application
                          </div>  
                          <div class="ui  attached segment feature">
                          <i class="icon red remove"></i>
                              Professional CV writing
                          </div> 
                          <div class="ui  attached segment feature">
                          <i class="icon red remove"></i>
                              Ready made CV templates
                          </div> 
                          <div class="ui  attached segment feature">
                          <i class="icon green check"></i>
                              1 CV review 
                          </div>  
                          <div class="ui  attached segment feature">
                          <i class="icon red remove"></i>
                              Cover letter review
                          </div>           
                          
                          <div class="ui bottom attached brown button btn-plan">
                            <i class="cart icon"></i>
                            <a href="/paidform.php">
                              SUBSCRIBE
                            </a>
                        </div>
          
                    </div>
                </div>
            </div>
          </div>
      </section>

      <div class="ui inverted vertical footer segment">
        <div class="ui container">
          <div
            class="ui stackable inverted divided equal height stackable grid"
          >
            <div class="five wide column">
              <h4 class="ui inverted header">Ononiru Jobs</h4>
              <div class="ui inverted link list">
                <a class="item">Plot C9 MacDonald Mall, UUC Global, Onitsha-Owerri Road, Owerri</a>
                <a class="item">+2347054345675</a>
                <a class="item">admin@ononiru.com</a>
              </div>
            </div>
            <div class="three wide column">
              <h4 class="ui inverted header">Find Jobs by Category</h4>
              <div class="ui inverted link list">
                <a class="item"></a>
                <a class="item">+2347054345675</a>
                <a class="item">admin@ononiru.com</a>
                <a class="item"></a>
              </div>
            </div>
            <div class="five wide column">
              <h4 class="ui inverted header">Footer Header</h4>
              <p>
                Extra space for a call to action inside the footer that could
                help re-engage users.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <script>
      $(document).ready(function() {
        // fix menu when passed
        $(".masthead").visibility({
          once: false,
          onBottomPassed: function() {
            $(".fixed.menu").transition("fade in");
          },
          onBottomPassedReverse: function() {
            $(".fixed.menu").transition("fade out");
          }
        });

        // create sidebar and attach to menu open
        $(".ui.sidebar").sidebar("attach events", ".toc.item");
      });
    </script>
    <script src="js/search.js"></script>
    <script src="js/featuredjobs.js"></script>
  </body>
</html>
