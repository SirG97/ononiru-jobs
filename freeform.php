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

   
    body > .grid {
      height: 100%;
    }
    .column {
      max-width: 450px;
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
  <div class="ui fixed menu">
    <div class="ui container">
      <a href="#" class="header item">
      <a class="item"><img src="static/images/avatar/ononiru.png" alt="">noniru</a>
      <a href="#" class="item">Home</a>
      <div class="ui simple dropdown item">
        Dropdown <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="#">Link Item</a>
          <a class="item" href="#">Link Item</a>
          <div class="divider"></div>
          <div class="header">Header Item</div>
          <!-- <div class="item">
            <i class="dropdown icon"></i>
            Sub Menu
            <div class="menu">
              <a class="item" href="#">Link Item</a>
              <a class="item" href="#">Link Item</a>
            </div>
          </div> -->
          <a class="item" href="#">Link Item</a>
        </div>
      </div>
    </div>
  </div>
  <div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui grey image header">
      <div class="content">
        Ononiru Basic
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="bookmark icon"></i>
            <input type="text" name="location" placeholder="Location eg. Lagos, Nigeria">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <select name="states" class="ui selection dropdown" multiple="" id="multi-select" placeholder="Job Category">
                <option value="">Job Category</option>
                <option value="IT">IT & Software</option>
                <option value="Finance">Finance</option>
                <option value="HR">Human Resource</option>
                <option value="Travel">Travel & Logistics</option>
            </select>
          </div>
        </div>
        <div class="ui fluid large grey submit button">Let's go</div>
      </div>

      <div class="ui error message"></div>

    </form>
  </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#multi-select')
            .dropdown()
            ;
        // fix menu when passed
        // $(".masthead").visibility({
        //   once: false,
        //   onBottomPassed: function() {
        //     $(".fixed.menu").transition("fade in");
        //   },
        //   onBottomPassedReverse: function() {
        //     $(".fixed.menu").transition("fade out");
        //   }
        // });

        // // create sidebar and attach to menu open
        // $(".ui.sidebar").sidebar("attach events", ".toc.item");
      });
    </script>
    <script src="js/search.js"></script>
    <script src="js/featuredjobs.js"></script>
  </body>
</html>
