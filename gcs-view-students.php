<?php
   if(empty($_SESSION)){
     session_start();
   } // if the session not yet started 
    
   
   if(!isset($_SESSION['username1'])) { //if not yet logged in
     header("Location: gcs-index.html");// send to login page
     exit;
   } 
   
   
   $xml = new DOMDocument('1.0', 'utf-8');
   $xml->load('student_account.xml');
   
   
   
   
   $student_id = array();
   $name = array();
   $campus = array();
   $email = array();
   
   $students = $xml->getElementsByTagName("student");
   foreach ($students as $student) {
     array_push($student_id, $student->getAttribute("id"));
     array_push($name, $student->getElementsByTagName("name")[0]->childNodes[0]->nodeValue);
     array_push($campus, $student->getElementsByTagName("campus")[0]->childNodes[0]->nodeValue);
     array_push($email, $student->getElementsByTagName("email")[0]->childNodes[0]->nodeValue);
   
   }
   
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Welcome</title>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
      <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script src="lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
      <script type="text/javascript">
         $(function() {
             $(".knob").knob();
         });
      </script>
      <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
      <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">
   </head>
   <body class=" theme-blue">
      <style type="text/css">
         #line-chart {
         height:300px;
         width:800px;
         margin: 0px auto;
         margin-top: 1em;
         }
         .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
         color: #fff;
         }
         @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
         @import "http://fonts.googleapis.com/css?family=Roboto:400,500";
         .box > .icon { text-align: center; position: relative; }
         .box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #63B76C; vertical-align: middle; }
         .box > .icon:hover > .image { background: #333; }
         .box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
         .box > .icon:hover > .image > i { color: white !important; }
         .box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; }
         .box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
         .box > .icon > .info > h3.title { font-family: "Roboto",sans-serif !important; font-size: 16px; color: #222; font-weight: 500; }
         .box > .icon > .info > p { font-family: "Roboto",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
         .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
         .box > .icon > .info > .more a { font-family: "Roboto",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
         .box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #355C7D; }
         .box .space { height: 30px; }
         .heading{
         text-align: center;
         padding-bottom: 50px;
         padding-top: 0px;
         }
      </style>
      <script type="text/javascript">
         $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
         });
      </script>
      <div class="navbar navbar-default" role="navigation">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="" href="main.html"><span class="navbar-brand"><img src="img/flex-header.png" alt="logo"></a>
         </div>
         <div class="navbar-collapse collapse" style="height: 1px;">
            <ul id="main-menu" class="nav navbar-nav navbar-right">
               <li class="dropdown hidden-xs">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span><?php echo $_SESSION['username1']; ?>
                  <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="gcs-view-profile.php">My Account</a></li>
                     <li class="divider"></li>
                     <li><a tabindex="-1" href="gcs-logout.php">Logout</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
      </div>
      <div class="sidebar-nav">
         <ul>
            <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>
            <li>
               <ul class="dashboard-menu nav nav-list collapse in">
                  <li><a href="gcs-main.php"><span class="fa fa-caret-right"></span> Main</a></li>
                  <li ><a href="gcs-view-students.php"><span class="fa fa-caret-right"></span> View Students</a></li>
                  <li ><a href="gcs-view-details.php"><span class="fa fa-caret-right"></span> Give Feedback</a></li>
                  <li ><a href="gcs-view-profile.php"><span class="fa fa-caret-right"></span> View Profile</a></li>
                  <li ><a href="team.html"><span class="fa fa-caret-right"></span> Team</a></li>
               </ul>
            </li>
         </ul>
      </div>
      <div class="content">
         <div class="header">
            <h1 class="page-title">Dashboard</h1>
            <ul class="breadcrumb">
               <li><a href="gcs-main.php">Home</a> </li>
               <li class="active">Dashboard</li>
            </ul>
         </div>
         <div class="heading">
            <h1>Welcome to Dashboard</h1>
         </div>
         <div class="main-content">
            <div class="row">
               <div class="col-sm-6 col-md-6">
               </div>
               <table class='table table-bordered table-striped'>
                  <thead>
                     <tr>
                        <th class="th-sm">Roll no
                        </th>
                        <th class="th-sm">Name
                        </th>
                        <th class="th-sm">Campus
                        </th>
                        <th class="th-sm">Email
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        for($i=0; $i < count($student_id); $i++){
                          echo "<tr>
                           <td>".$student_id[$i]."</td>
                           <td>".$name[$i]."</td>
                           <td>".$campus[$i]."</td>
                           <td>".$email[$i]."</td>
                           </tr>";
                        }
                        ?>
                  </tbody>
               </table>
            </div>
         </div>
         <footer>
            <hr>
            <p class="pull-right">A <a href="http://local.com/" target="_blank">PHD Student NEON</a> by <a href="http://www.pwr.nu.edu.pk" target="_blank">PESHAWAR</a></p>
            <p>© 2018 <a href="http://www.pwr.nu.edu.pk" target="_blank">FAST PESHAWAR</a></p>
         </footer>
      </div>
      </div>
      <script src="lib/bootstrap/js/bootstrap.js"></script>
      <script type="text/javascript">
         $("[rel=tooltip]").tooltip();
         $(function() {
             $('.demo-cancel-click').click(function(){return false;});
         });
      </script>
   </body>
</html>