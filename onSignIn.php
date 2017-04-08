<?php 
include ('connection.php');
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
    	ul li a{
    		border:1px solid blue;
    		padding:5%;
    	}
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
        $('ul.tabs').tabs();
      });
      </script>
</head>
<body>
	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

   
      <div class="row" style="background-color: #e1f5fe;">
      <div class="col s12 center">
        <p style='color:#00695c;font-size: 30px'>
        <b>REGISTRATION PORTAL</b>
        </p>

      </div>  
       <a class="waves-effect waves-light btn" href="logout.php">LogOut</a>
      </div>

      <!-- <div>
      <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo right">Logo</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="feePayment.php">Fee Payment</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
        </div>
      </nav>
      </div>
 -->
      <div class="row">
    <div class="col s12">
      <ul>
        <!-- <li class="tab col s2"><a href="formFilling.php">Form Filling</a></li> -->
      	<li class="tab col s2"><a href="feePayment.php">Fee Payment</a></li>
        <li class="tab col s2"><a href="duesClearance.php">Dues Clearance</a></li>
        <li class="tab col s2"><a href="roomAllotment.php">Room Allotment</a></li> 
        <li class="tab col s2"><a href="addDropCourses.php">Add Courses</a></li>
        <li class="tab col s2"><a href="final.php">Generate reciept</a></li>
        <!-- <li class="tab col s2"><a href="lateRegistration.php">Late Registration</a></li> -->

      </ul>
    </div>

    </div>

        <img style="margin-left:280px;" width="800" src="regestration.jpg">


     <div class="row">
     <div class="cols s12 center" style="background-color: #e1f5fe;">
     <p style="color: #00695c;">Indian Institute of Technology,Jodhpur</p>
     </div></div>

</body>
</html>