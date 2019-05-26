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
      content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI."
    />
    <meta name="keywords" content="Semantic-UI, Theme, Design, Template" />
    <meta name="author" content="PPType" />
    <meta name="theme-color" content="#ffffff" />
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

      @media only screen and (max-width: 700px) {
        .ui.fixed.menu {
          display: none !important;
        }

        .secondary.pointing.menu .item,
        .secondary.pointing.menu .menu {
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
    </style>
  </head>

  <body id="root">
    <div class="ui large top fixed hidden menu">
      <div class="ui container">
        
        <a class="item"><img src="static/images/avatar/ononiru.png" alt="">noniru</a>
        <div class="right menu">
            <a class="item">I want to hire</a>
            <a class="item">Subscribe</a>
          <div class="item"><a class="">Log in</a></div>
          <div class="item"><a class="ui primary button">Sign Up</a></div>
        </div>
      </div>
    </div>
    <!--Sidebar Menu-->
    <div class="ui vertical inverted sidebar menu">
        <a class="item"><img src="static/images/avatar/ononiru.png" alt="">noniru</a>
        <a class="item">I want to hire</a> 
        <a class="item">Subscribe</a>
        <a class="item">Login</a> 
        <a class="item">Signup</a>
    </div>
    <!--Page Contents-->
    <div class="pusher">
      <div class="ui inverted vertical masthead center aligned segment">
        <div class="ui container">
          <div class="ui large secondary inverted pointing menu">
            <a class="toc item"><i class="sidebar icon"></i></a>
            
            <a class="item"><img src="static/images/avatar/ononiru.png" alt="">noniru</a>
            <div class="right item">
              <a class="item">I want to hire</a>
              <a class="item">Subscribe</a>
              <a class="item">Log in</a>
              <a class="ui inverted button">Sign Up</a>
            </div>
          </div>
        </div>
        <div class="ui text container">
          <h1 class="ui inverted header">Ononiru Jobs</h1>
          <h2>Can't think of a tag line right now :(</h2>
          <div class="ui huge action input" style="width: 100%">
              <input onkeyup="instantiateSearch(this.value)" id="search_input" type="text" placeholder="Search...">
              <button onclick="searchinit()" type="button" id="search_btn" class="ui green button">Search</button>
            </div>
          <div class="ui huge primary button" id="search_result" style="display:none">
            
          </div>
        </div>
      </div>
      <section id="category-grid">
        <h2 class="" style="text-align: center;">Popular Categories</h2>
          <div class="ui grid container stackable">
              <div class="four wide column">
                  <div class="ui cards">
                      <div class="card categories-card">
                          <i class="huge yellow bullhorn icon categories-img" style="margin: auto;"></i>
                          
                          <div class="content content-border">
                            <div class="header">Art and multimedia</div>
                            <div class="meta">
                              <a>2 open positions</a>
                            </div>
                           
                          </div>
                      </div>
                  </div>
              </div>
              <div class="four wide column">
                  <div class="ui cards">
                      <div class="card categories-card">
                          <i class="huge brown car icon categories-img" style="margin: auto;"></i>
                          
                          <div class="content content-border">
                            <div class="header">Web Design & IT</div>
                            <div class="meta">
                              <a>15 open positions</a>
                            </div>
                           
                          </div>
                      </div>
                  </div>
              </div>
              <div class="four wide column">
                  <div class="ui cards">
                      <div class="card categories-card">
                          <i class="huge green bullseye icon categories-img" style="margin: auto;"></i>
                          
                          <div class="content content-border ">
                            <div class="header">Account & Finance</div>
                            <div class="meta">
                              <a>7 open positions</a>
                            </div>
                           
                          </div>
                      </div>
                  </div>
              </div>
              <div class="four wide column">
                  <div class="ui cards">
                      <div class="card categories-card">
                          <i class="huge bug orange icon categories-img" style="margin: auto;"></i>                       
                          <div class="content content-border">
                            <div class="header">Human Resource</div>
                            <div class="meta">
                              <a>4 open positions</a>
                            </div>
                           
                          </div>
                      </div>
                  </div>
              </div>
             
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
          <div class="ui equal width center aligned padded grid">
              <div class="row">
                <div class="green column call-to-action-column" style="">
                  <h3>I'M A RECRUITER</h3>
                  <p>O One of our jobs has some kind of flexibility jobs has some kind of flexibility option such as telecommuting, a part-time schedule or a flexible or flextime.</p>
							<a href="#" title="" class="ui button  green huge">Post new job</a>
                </div>
                <div class="yellow column call-to-action-column2">
                    <h3>I AM JOBSEEKER!</h3>
                    <p>One of our One of our jobs has some kind of flexibility jobs has some kind of flexibility option such as telecommuting, a part-time schedule or a flexible or flextime.</p>
                    <a href="#" title="" class="ui button yellow huge">Browse Jobs</a>
                </div>
              </div>
          </div>
      </section>
      <section id="for-who">
          <h2 class="" style="text-align: center;">Who is ononiru jobs for</h2>
          <p class="ui center aligned">Ononiru jobs is for job seekers and companies looking to find jobs tailored for them or find qualified candidate in less than 48 hours</p>
          <div class="ui equal width left aligned padded grid for-who-row">
            <div class="row">
              <div class="column pad-3">
                <div class="ui items">
                  <div class="item">
                    
                      <i class="bug huge icon"></i>
                    
                    <div class="content">
                      <a class="header">Fast and convienent</a>
                      <div class="description">
                        <p>This is a little message that tries to explain the meaning of the header above. I think I need to make it a little longer so that it will look nicer than it is now.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" column pad-3">
                <div class="ui items">
                  <div class="item">
                      <i class="bug huge icon"></i>
                    <div class="content">
                      <a class="header">Safe and reliable</a>
                      <div class="description">
                        <p>This is a little message that tries to explain the meaning of the header above. I think I need to make it a little longer so that it will look nicer than it is now.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="column pad-3">
                <div class="ui items">
                    <div class="item">
                        <i class="bug huge icon"></i>
                      <div class="content">
                        <a class="header">Safe and reliable</a>
                        <div class="description">
                          <p>This is a little message that tries to explain the meaning of the header above. I think I need to make it a little longer so that it will look nicer than it is now.</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="column pad-3">
                <div class="ui items">
                    <div class="item">
                        <i class="bug huge icon"></i>
                      <div class="content">
                        <a class="header">Safe and reliable</a>
                        <div class="description">
                          <p>This is a little message that tries to explain the meaning of the header above. I think I need to make it a little longer so that it will look nicer than it is now.</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </section>

      <section id="for-who">
        <div class="ui container">
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
                            SUBSCRIBE
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
                            SUBSCRIBE
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
                            SUBSCRIBE
                        </div>
          
                    </div>
                </div>
            </div>
          </div>
      </section>
      <!-- <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
          <div class="row">
            <div class="eight wide column">
              <h3 class="ui header">We Help Companies and Companions</h3>
              <p>
                We can give your company superpowers to do things that they
                never thought possible. Let us delight your customers and
                empower your needs...through pure data analytics.
              </p>
              <h3 class="ui header">We Make Bananas That Can Dance</h3>
              <p>
                Yes that's right, you thought it was the stuff of dreams, but
                even bananas can be bioengineered.
              </p>
            </div>
            <div class="six wide right floated column">
              <img
                class="ui large bordered rounded image"
                src="./static/images/wireframe/white-image.png"
              />
            </div>
          </div>
          <div class="row">
            <div class="center aligned column">
              <a class="ui huge button">Check Them Out</a>
            </div>
          </div>
        </div>
      </div>
      <div class="ui vertical stripe segment">
        <div class="ui equal width stackable very relaxed grid">
          <div class="center aligned row">
            <div class="column">
              <h3>"What a Company"</h3>
              <p>That is what they all say about us</p>
            </div>
            <div class="column">
              <h3>"I shouldn't have gone with their competitor."</h3>
              <p>
                <img
                  class="ui avatar image"
                  src="./static/images/avatar/nan.jpg"
                />
                <b>Nan</b> Chief Fun Officer Acme Toys
              </p>
            </div>

          </div>
        </div>
      </div>
      <div class="ui vertical stripe segment">
        <div class="ui text container">
          <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
          <p>
            Instead of focusing on content creation and hard work, we have
            learned how to master the art of doing nothing by providing massive
            amounts of whitespace and generic content that can seem massive,
            monolithic and worth your attention.
          </p>
          <a class="ui large button">Read More</a>
          <h4 class="ui horizontal header divider">
            <a href="#root"> Case Studies</a>
          </h4>
          <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
          <p>
            Yes I know you probably disregarded the earlier boasts as
            non-sequitur filler content, but its really true. It took years of
            gene splicing and combinatory DNA research, but our bananas can
            really dance.
          </p>
          <a class="ui large button">I'm Still Quite Interested</a>
        </div>
      </div> -->
      <div class="ui inverted vertical footer segment">
        <div class="ui container">
          <div
            class="ui stackable inverted divided equal height stackable grid"
          >
            <div class="three wide column">
              <h4 class="ui inverted header">About</h4>
              <div class="ui inverted link list">
                <a class="item" href="#root">Sitemap</a>
                <a class="item" href="#root">Contact Us</a>
                <a class="item" href="#root">Religious Ceremonies</a>
                <a class="item" href="#root">Gazebo Plans</a>
              </div>
            </div>
            <div class="three wide column">
              <h4 class="ui inverted header">Services</h4>
              <div class="ui inverted link list">
                <a class="item" href="#root">Banana Pre-Order</a>
                <a class="item" href="#root">DNA FAQ</a>
                <a class="item" href="#root">How To Access</a>
                <a class="item" href="#root">Favorite X-Men</a>
              </div>
            </div>
            <div class="seven wide column">
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
