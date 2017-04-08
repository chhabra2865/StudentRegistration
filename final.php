<?php
 include('connection.php');
 session_start();
 $qry="SELECT name,username,Courses,rollno,emailid,mobile,paidMessFee,paidSemesterFee,librarydue,messdue,type,Gender FROM logindatabase WHERE username= '".$_SESSION['loginuserid']."';";
 $records=mysqli_query($connect,$qry) or die("error getting from database");

 while($data=mysqli_fetch_assoc($records)){
              
                $name=$data['name'];
                $Courses=$data['Courses'];
                $rollno=$data['rollno'];
                $emailid=$data['emailid'];
                $mobile=$data['mobile'];
                $paidMessFee=$data['paidMessFee'];
                $paidSemesterFee=$data['paidSemesterFee'];
                $messdue=$data['messdue'];
                $librarydue=$data['librarydue'];
                $username=$data['username'];
                $type=$data['type'];
                $Gender=$data['Gender'];
                
            }

   //  if(isset($_POST['print'])){
              
   //            if($messdue==0 and $librarydue==0 and $paidSemesterFee=="PAID" and $paidMessFee=="PAID"){
   //                      echo"<script>myFunction()</script>";

   //            }
   //            else if($messdue!=0 or $librarydue!=0){
   //                echo "hi";
   //                echo"document.write('Dues Not Cleared');";
   //            }

   //            else if($paidSemesterFee!="PAID" or $paidMessFee!="PAID"){
   //                                  echo "hi";

   //                echo "document.write('Fees Not Paid');";
   //            }

   //            else if(($messdue!=0 or $librarydue!=0) and ($paidSemesterFee!="PAID" or $paidMessFee!="PAID")){
   //                                echo "hi";

   //                echo"document.write('Fess Not Paid and Dues Not Cleared');";
   //            }
   // }

?>

<!DOCTYPE html>
<html>
<head>
  <title>roomAllotment</title>

  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

            <style>
              table{
                padding: 5%;

              }
            </style>
      <script>
          $(document).ready(function() {
          $('select').material_select();
        });
    </script>
          <script>
      function myFunction() {
          window.print();
      }
      </script>
       <script>
          function goBack() {
              window.history.back();
          }
</script>

</head>
<body>
  <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <div class="row" style="background-color: #e1f5fe;">
      <div class="col s12 center">
        <p style='color:#00695c;font-size: 20px'>
        <b>Generate Reciept</b>
        </p>
      </div> <a class="waves-effect waves-light btn" href="logout.php">LogOut</a> 
      </div>
          <button class="btn-floating btn-large waves-effect waves-light red" onclick="goBack()"><i class="material-icons">skip_previous</i></button>

      <div class="row">
    <table class="col s12">
    <tr class="row">
        <td class="col s6">
          Name of the Candidate
          
        </td>
        <td class="col s6">
          <?php
          echo $name;
          ?>
          
        </td>
      </tr>

    
  
    <tr class="row" style="padding:5%;">
        <td class="col s6">
          Roll Number
          
        </td>
        <td class="col s6">
          <?php
          echo $rollno;
          ?>
          
        </td>
      </tr>

      <tr class="row">
        <td class="col s6">
          Username of The Student
          
        </td>
        <td class="col s6">
          <?php
          echo $username;
          ?>
          
        </td>
      </tr>
 
    <tr class="row">
        <td class="col s6">
          Contact Number
          
        </td>
        <td class="col s6">
          <?php
          echo $mobile;
          ?>
          
        </td>
      </tr>

    

    <tr class="row">
        <td class="col s6">
          Email Id
          
        </td>
        <td class="col s6">
          <?php
          echo $emailid;
          ?>
          
        </td>
      </tr>
       <tr class="row">
        <td class="col s6">
          Type
          
        </td>
        <td class="col s6">
          <?php
          echo $type;
          ?>
          
        </td>
      </tr>
       <tr class="row">
        <td class="col s6">
          Gender
          
        </td>
        <td class="col s6">
          <?php
          echo $Gender;
          ?>
          
        </td>
      </tr>
       <tr class="row">
        <td class="col s6">
          Courses Registered
          
        </td>
        <td class="col s6">
          <?php
          echo $Courses;
          ?>
          
        </td>
      </tr>



      </div>
       </table>
       
      <br><br><br>

      <div class="row">
        <div class="col s12">
        <br><br>
          Signature(Faculty Advisor)
        </div>
        </div>

    <br><br>
        <button class="waves-effect waves-light btn" name="print" id='print' onclick='myFunction()'>Print</button>
   

  </div>    

</body>
</html>