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
    <link
      rel="stylesheet"
      href="semantic/dist/semantic.min.css"
      type="text/css"
    />
    <style type="text/css">
      body {
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: grayscale;
      }

      .hidden.menu {
        display: none;
      }

      .masthead.segment {
        min-height: 300px;
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
            <a class="item">For Companies</a>
            <a class="item">I want to hire</a>
          <div class="item"><a class="">Log in</a></div>
          <div class="item"><a class="ui primary button">Sign Up</a></div>
        </div>
      </div>
    </div>
    <!--Sidebar Menu-->
    <div class="ui vertical inverted sidebar menu">
        <a class="item"><img src="static/images/avatar/ononiru.png" alt="">noniru</a>
        <a class="item">For Companies</a> 
        <a class="item">I want to hire</a>
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
              <a class="item">For Companies</a>
              <a class="item">I want to hire</a>
              <a class="item">Log in</a>
              <a class="ui inverted button">Sign Up</a>
            </div>
          </div>
        </div>
        <div class="ui text container">
           <h1 class="ui inverted header">Fill Company Profile</h1>
        </div>
      </div>
      <div class="ui grid">
        <div class="ui three wide column"></div>
          <div class="ui ten wide column">
              <div class="ui equal width form">
                  <div class="fields">
                    <div class="field">
                      <label>Company Name</label>
                      <input type="text" placeholder="Congredia">
                    </div>
                  </div>
                  <div class="fields">
                    <div class="field">
                      <label>Company RCC</label>
                      <textarea placeholder=""></textarea>
                    </div>
                  </div>
                  <div class="fields">
                    <div class="field">
                      <label>Sector</label>
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
          <div class="ui three wide column"></div>
      </div>
      
      
      
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
  </body>
</html>
