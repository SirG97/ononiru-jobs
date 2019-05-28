<?php
session_start();
require 'vendor/autoload.php';

use Ononiru\Config\Database;
use Ononiru\Core\Job;

$category = isset($_GET['c_id']) ? $_GET['c_id'] : null;

 //sql query
  $db = new Database();
  $job = new Job($db->getConnection());

// get keywords
$keywords=isset($_GET["s"]) ? $_GET["s"] : null;
trim($keywords);
strtolower($keywords);
$keywords = htmlspecialchars($keywords);


if(isset($category)){

  $stmt = $job->filter(trim($category));  
  $num = $job->_count;

  // var_dump($job->_result);
  $jobs_arr = $job->_result;
}else if(isset($keywords)){

// query jobs
$stmt = $job->search(trim($keywords));
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // jobs array
    $jobs_arr = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $job_item=array(
            "job_id" => $job_id,
            "description" => html_entity_decode($description),
            "company_id" => $company_id,
            'title' => $title,
            'display_name' => $display_name,
            'location' => $location
        );

        array_push($jobs_arr, $job_item);
    }
}
}



 
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
      content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI."
    />
    <meta name="keywords" content="Semantic-UI, Theme, Design, Template" />
    <meta name="author" content="PPType" />
    <meta name="theme-color" content="#ffffff" />
    <title>Ononiru::jobs</title>
    <link rel="stylesheet" href="semantic/dist/semantic.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/style.css">
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
          <h1 class="ui inverted header">Browse Jobs</h1>
          <div class="ui huge action input" style="width: 100%">
              <input onkeyup="instantiateSearch(this.value)" id="search_input" type="text" placeholder="Search...">
              <button onclick="searchinit()" type="button" id="search_btn" class="ui green button">Search</button>
            </div>
          <div class="ui huge primary button" id="search_result" style="display:none">
          
          </div>
        </div>
      </div>
     
      <section id="featured-grid">
           <div class="ui container segments">
              <div class="ui divided items items-pad">
                <?php 
if($num > 0) {
  foreach ($jobs_arr as $key ) {
    echo "
    <br>
    <br>
    
    <div class='item'>  
    <div class='image'>
      <img src='static/images/avatar/nan.jpg' style='width: 8em; height: 8em; max-width: 100%; border-radius: 50%;margin:auto'>
    </div>
    <div class='content'>
      <a class='header'>
      ".$key['title']."
      </a>
      <br>
      <br>
  
      <p>
      ".$key['description']."
      </p>
      <div class='meta'>
        <span class='cinema'>".$key['location']."</span>
      </div>
      <div class='description'>
        <p></p>
      </div>
      <div class='extra'>
          <a class='ui right floated primary basic button apply' href='job.php?id=".$key['job_id']."'>View</a>
        <div class='ui label'>".$key['display_name']."</div>
      </div>
    </div>
  </div>
  
  ";
  }
  
}else{
  echo '<h1>No Job Found!</h1>';
}
  
                    ?>
                </div>
           </div>
           <button class="ui inverted center aligned orange button">Load more jobs</button>
        </section>
     
      <div class="ui inverted vertical footer segment">
        <div class="ui container">
          <div class="ui stackable inverted divided equal height stackable grid">
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
    <script src="./js/search.js"></script>
  </body>
</html>
