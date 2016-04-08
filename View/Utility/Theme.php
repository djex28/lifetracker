<?php

class Theme {
    
    public function __construct() {
    }
    
    public function createHead() {
        echo "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <meta name='description' content=''>
            <meta name='author' content=''>
            <link rel='icon' href='../../favicon.ico'>

            <title>LifeTracker 5000</title>

            <!-- Bootstrap core CSS -->
            <link href='View/CSS/dist/css/bootstrap.min.css' rel='stylesheet'>

            <!-- Custom styles for this template -->
            <link href='View/CSS/jumbotron.css' rel='stylesheet'>

            <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
            <!--[if lt IE 9]><script src='../../assets/js/ie8-responsive-file-warning.js'></script><![endif]-->
            <link rel='stylesheet' href='//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
            <script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
            <script src='View/CSS/dist/js/bootstrap.min.js'></script>
            <script src='View/CSS/assets/js/ie-emulation-modes-warning.js'></script>

            </head>";
    }
    
    public function showHeader() {
        $signUpLink = new Linkify("Sign Up", "SIGNUP", null);
        echo "
            <nav class='navbar navbar-inverse navbar-fixed-top'>
                <div class='container'>
                  <div class='navbar-header'>
                    <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
                      <span class='sr-only'>Toggle navigation</span>
                      <span class='icon-bar'></span>
                      <span class='icon-bar'></span>
                      <span class='icon-bar'></span>
                    </button>
                    <a class='navbar-brand' href='#'>LIFE TRACKER 5000</a>
                  </div>
                  <div id='navbar' class='navbar-collapse collapse'>
              <ul class='nav navbar-nav'>
                <li class='active'><a href='#'>Home</a></li>
                <li><a href='#about'>About</a></li>
                <li><a href='#contact'>Contact</a></li>
                <li class='dropdown'>
                  <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Dropdown <span class='caret'></span></a>
                  <ul class='dropdown-menu'>
                    <li><a href='#'>Action</a></li>
                    <li><a href='#'>Another action</a></li>
                    <li><a href='#'>Something else here</a></li>
                    <li role='separator' class='divider'></li>
                    <li class='dropdown-header'>Nav header</li>
                    <li><a href='#'>Separated link</a></li>
                    <li><a href='#'>One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <ul class='nav navbar-nav navbar-right'>
                  <li>";
            $signUpLink->create();
            echo "</li>
                <!--<li class='active'><a href=''>Static top <span class='sr-only'>(current)</span></a></li>
                <li><a href=''>Fixed top</a></li>!-->
              </ul>
            </div>
                  <!--<div id='navbar' class='navbar-collapse collapse'>
                    <form class='navbar-form navbar-right'>
                      <div class='form-group'>
                        <input type='text' placeholder='Email' class='form-control'>
                      </div>
                      <div class='form-group'>
                        <input type='password' placeholder='Password' class='form-control'>
                      </div>
                      <button type='submit' class='btn btn-success'>Sign in</button>
                    </form>
                  </div>!--><!--/.navbar-collapse -->
                </div>
              </nav>";
    }
    
    public function showPreContent() {
        echo "
<div style='width:auto; height:auto; margin:0px; background-image: url("."View/Templates/Images/IMG_9695.jpg"."); background-size: cover; -webkit-background-size: cover;'>
<div class='container'>
    <center>";
    }
    
    public function showPostContent() {
        echo "</center></div></div>";
    }
    
    public function showFooter() {
        echo "<!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src='View/CSS/assets/js/ie10-viewport-bug-workaround.js'></script>
            <script src='View/CSS/datepicker/js/bootstrap-datepicker.js'>
            <script src='View/CSS/datepicker/css/bootstrap-datepicker.css'>
            <script>
                $('.datepicker').datepicker({
                    clearBtn: true,
                    todayHighlight: true
                });
            </script>";
    }
}

