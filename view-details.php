<?php
   if(empty($_SESSION)){
       session_start();
   } 
   
   if(!isset($_SESSION['username'])) { //if not yet logged in
       header("Location: index.html");// send to login page
       exit;
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
         .box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
         .box .space { height: 30px; }
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
                  <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span><?php echo $_SESSION['username']; ?>
                  <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="./">My Account</a></li>
                     <li><a tabindex="-1" href="logout.php">Logout</a></li>
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
                  <li><a href="main.php"><span class="fa fa-caret-right"></span> Main</a></li>
                  <li ><a href="view-details.php"><span class="fa fa-caret-right"></span> View Details</a></li>
                  <li ><a href="view-profile.php"><span class="fa fa-caret-right"></span> User Profile</a></li>
                  <li ><a href="registeration/synopsis-thesis.html"><span class="fa fa-caret-right"></span> Synopsis & Thesis</a></li>
                  <li ><a href="view-feedback.php"><span class="fa fa-caret-right"></span> View Feedback</a></li>
                  <li ><a href="team.html"><span class="fa fa-caret-right"></span> Team</a></li>
               </ul>
            </li>
         </ul>
      </div>
      <div class="content">
         <div class="header">
            <h1 class="page-title">Dashboard</h1>
            <ul class="breadcrumb">
               <li><a href="main.php">Home</a> </li>
               <li class="active">View Details</li>
            </ul>
         </div>
         <div class="main-content">
            <?php
           
               $a= $_SESSION['username'];
           
               $xml = simplexml_load_file("registeration/student_account.xml");
               foreach($xml->student as $item){
                 
                 if(strstr($item['id'], $a)){
                 
                 echo "
               
               
                        <div class='row'>
                        <div class='col-sm-6 col-md-6'>
                        <div class='panel panel-default'>
                       <div class='panel-heading no-collapse'>View Details<span class='label label-warning'>+10</span></div>
                       <table class='table table-bordered table-striped'>
                       <tbody>
                       <tr>
                          <td>Name: </td>
                          <td>";?><?php echo $item->name;?><?php echo"</td>
               </tr>
                <tr>
                  <td>Roll no: </td>
                  <td>";?><?php echo $item->Rollno;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Email: </td>
                  <td>";?><?php echo $item->email;?><?php echo"</td></tr>
               <tr>
                  <td>Campus: </td>
                  <td>";?><?php echo $item->campus?><?php echo"</td>
               </tr>
               <tr>
                  <td>Department: </td>
                  <td>";?><?php echo $item->dept;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Admission Date: </td>
                  <td>";?><?php echo $item->admdate;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Admission Status: </td>
                  <td>";?><?php echo $item->adm_status;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Progress Status: </td>
                  <td>";?><?php echo $item->progress_status;?><?php echo"</td>
               </tr>
               <tr>
                  <th colspan='2'><center>GAT</center></th>
               </tr>
               <tr>
                  <td>Score: </td>
                  <td>";?><?php echo $item->GAT->score;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Total Marks: </td>
                  <td>";?><?php echo $item->GAT->totalMarks;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Test Year: </td>
                  <td>";?><?php echo $item->GAT->testyear;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Test Expire: </td>
                  <td>";?><?php echo $item->GAT->testExpire;?><?php echo"</td>
               </tr>
               <tr>
                  <th colspan='2'><center>SSC</center></th>
               </tr>
               <tr>
                  <td>Marks: </td>
                  <td>";?><?php echo $item->ssc->marks;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Total Marks: </td>
                  <td>";?><?php echo $item->ssc->totalMarks;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Study Place: </td>
                  <td>";?><?php echo $item->ssc->studyplace;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Test Year: </td>
                  <td>";?><?php echo $item->ssc->testyear;?><?php echo"</td>
               </tr>
               <tr>
                  <th colspan='2'><center>FSC</center></th>
               </tr>
               <tr>
                  <td>Marks: </td>
                  <td>";?><?php echo $item->fsc->marks;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Total Marks: </td>   
                  <td>";?><?php echo $item->fsc->totalMarks;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Study Place: </td>
                  <td>";?><?php echo $item->fsc->studyplace;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Test Year: </td>   
                  <td>";?><?php echo $item->fsc->testyear;?><?php echo"</td>
               </tr>
               <tr>
                  <th colspan='2'><center>BSC<center></th>
               </tr>
               <tr>
                  <td>GPA: </td>
                  <td>";?><?php echo $item->BSC->GPA;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Study Place: </td>
                  <td>";?><?php echo $item->BSC->studyplace;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Completion Year: </td>
                  <td>";?><?php echo $item->BSC->completionyear;?><?php echo"</td>
               </tr>
               <tr >
                  <th colspan='2'><center>MSC</center></th>
               </tr>
               <tr>
                  <td>Phone No: </td>
                  <td>";?><?php echo $item->MSC->GPA;?><?php echo"</td>
               </tr>
               <tr>
                  <td>CNIC: </td>
                  <td>";?><?php echo $item->MSC->totalGPA;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Supervisor: </td>
                  <td>";?><?php echo $item->MSC->studyplace;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Funding: </td>
                  <td>";?><?php echo $item->MSC->completionyear?><?php echo"</td>
               </tr>
               <tr>
                  <td>HEC Pincode: </td>
                  <td>";?><?php echo $item->MSC->HEC_pincode;?><?php echo"</td>
               </tr>
               <tr>
                  <th colspan='2'><center>Other Details:</center></th>
               </tr>
               <tr>
                  <td>Phone: </td>
                  <td>";?><?php echo $item->phone;?><?php echo"</td>
               </tr>
               <tr>
                  <td>CNIC: </td>
                  <td>";?><?php echo $item->CNIC;?><?php echo"</td>
               </tr>
               <tr>
                  <td>Funding: </td>
                  <td>";?><?php echo $item->funding;?><?php echo"</td>
               </tr>
               <tr>
                  <td>HEC Pincode: </td>
                  <td>";?><?php echo $item->HEC_pincode;?><?php echo"</td>
               </tr>
               </tbody>
               </table>
               </div>
               </div>
               
               <div class='col-sm-6 col-md-6'>
               <div class='panel panel-default'>
               <a href='#widget1container' class='panel-heading' data-toggle='collapse'>Collapsible </a>
               <div id='widget1container' class='panel-body collapse in'>";?>
            <?php
               echo '<center><img src="'.$item->photograph->attributes().'" height="250" width="250"></center>';    
               
               ?><?php echo"</div>
               </div>
               </div>
               
               </div>";
               
               }
               }
                
               ?>
         </div>
         <footer>
            <hr>
            <p class="pull-right">A <a href="http://local.com/" target="_blank">PHD Student NEON</a> by <a href="http://www.pwr.nu.edu.pk" target="_blank">FAST PESHAWAR</a></p>
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