<?php

  include('connection.php');


  if(isset($_POST['xlogin'])){
    $loginuserid=$_POST['loginuserid'];
    $loginpassword=$_POST['loginpassword'];
    $type=$_POST['type'];

    $query= "SELECT * FROM logindatabase WHERE username='".$loginuserid."' and password='".$loginpassword."';";
    //echo"<Scirpt>alert('$query')</script>";
    $r=mysqli_query($connect,$query);
    if(mysqli_affected_rows($connect)>0)
    {
        
        session_start();

        $_SESSION['loginuserid']=$loginuserid;
    
        if($type==1){
            header('Location:onSignin.php');

        }

    }
     else if($type==2 && $loginuserid=="root" && $loginpassword=="root"){
    
            header('Location:staff.php');

        }

       else if($type==3 && $loginuserid=="root" && $loginpassword=="root"){
            //writr code
            header('Location:faculty.php');

        }
     else{ 
            echo "<div class=\"alert alert-danger\">Username/Password is Incorrect.</div>"; 
    }
  
  }
if(isset($_POST['xregister'])){
    $xuserid=$_POST['xuserid'];
    $password=$_POST['password'];
    $name=$_POST['xname'];
    $rollnumber=$_POST['xrollnumber'];
    $email=$_POST['xemail'];
    $number=$_POST['xnumber'];
    $xpassword=$_POST['xpassword'];
      $type=$_POST['type'];
      $Gender=$_POST['Gender'];

     $query="INSERT into logindatabase(username,password,name,mobile,emailid,rollno,type,Gender) values ('$xuserid','$password','$name','$number','$email','$rollnumber','$type','$Gender');";
     //echo $query;
     $r=mysqli_query($connect,$query);
     if($r){
      echo"<script>alert('successfully registered')</script>";
     }
   }


?>

<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

      <script>
          $(document).ready(function() {
          $('select').material_select();
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
        <b>INDIAN INSTITUTE OF TECHNOLOGY,JODHPUR</b>
        </p>
      </div>  
      </div>
<!--       <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
 -->
      <div class="row container">
        
      <div class="col s6">
        <p class="row center" style="color:#00695c; font-size: 20px"><b>Login</b></p>
        <p><center>(For all users)</center></p>
        <form class="col s12" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input username="username" name="loginuserid" id="first_name" type="text" required>
          <label for="first_name">userid</label>
        </div>
        <div class="input-field col s12">
          <input password="password" id="last_name" name="loginpassword" type="password" required>
          <label for="last_name">password</label>
        </div>
        <div class="input-field col s12">
               <select name="type" required>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Student</option>
                  <option value="2">Staff</option>
                  <option value="3">Faculty</option>
                </select>
                <label>Select Type</label>
          </div>
        <button class="waves-effect waves-light btn" name="xlogin" type='submit'>LOGIN</button>
      </div>
      </form>
      

      </div>

      <div class="col s6">
                 <p class="row center" style="color:#00695c; font-size: 20px"><b>SignUp</b></p>
                 <p><center>(Option only for Students newly entering the Institute in Btech,Mtech or Phd)</center></p>
                 <form class="col s12" method="POST">
            <div class="row">
                <div class="input-field col s12">
                <input name="xname" id="name" type="text" required>
                <label for="name">name</label>
              </div>
                <div class="input-field col s12">
                <input name="xrollnumber" id="rollnumber" type="text" required>
                <label for="rollnumber">roll-Number</label>
              </div>
                <div class="input-field col s12">
                <input name="xemail" id="email" type="email" required>
                <label for="email">email-Address</label>
              </div>
                <div class="input-field col s12">
                <input name="xnumber" id="number" type="tel" minlength=10 maxlength=10 required>
                <label for="number">phone-Number</label>
              </div>
              <div class="input-field col s12">
                <input username="username" name="xuserid" id="first_name" type="text" required>
                <label for="first_name">userid</label>
              </div>
              <div class="input-field col s12">
                <input password="password" id="last_name" name="password" type="password" required>
                <label for="last_name">password</label>
              </div>
              <div class="input-field col s12">
                <input password="password" id="last_name" name="xpassword" type="password" required>
                <label for="last_name">re-type password</label>
              </div>

            <div>
                   <div class="input-field col s12">
                    <select name="Gender">
                      <option value="" disabled selected>Choose your option</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Others">Others</option>
                    </select>
                    <label>Select Gender</label>
                  </div>
              </div>

              <div>
                   <div class="input-field col s12">
                    <select name="type">
                      <option value="" disabled selected>Choose your option</option>
                      <option value="Btech">Btech</option>
                      <option value="Mtech">Mtech</option>
                      <option value="Phd">Phd</option>
                    </select>
                    <label>Select Type</label>
                  </div>
              </div>
            
              <button class="waves-effect waves-light btn" name="xregister" type='submit'>REGISTER</button>
            </div>
            </form>
            

      </div>

      </div>

    
</script>
    </body>
  </html>
