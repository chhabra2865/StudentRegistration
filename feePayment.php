<?php
    include('connection.php');
    session_start() ;
      $qry="SELECT paidMessFee,paidSemesterFee FROM logindatabase WHERE username='".$_SESSION['loginuserid']."'; ";
          $records=mysqli_query($connect,$qry) or die("error getting from database");

           while($data=mysqli_fetch_assoc($records)){
                        
                          $paidMessFee=$data['paidMessFee'];
                          $paidSemesterFee=$data['paidSemesterFee'];
                          
                      }

      if(isset($_POST['xmess']) and $paidMessFee!="PAID"){
          

          $qry="UPDATE logindatabase SET paidMessFee='PAID' WHERE username= '".$_SESSION['loginuserid']."';";
          $r=mysqli_query($connect,$qry) or die("Error!!!!");
          echo"<script>Alert('MESS')</script>";

      }

      else if( isset($_POST['xmess']) and $paidMessFee){
                echo"<script>alert('Mess Fee Already PAID')</script>";

      }

      if(isset($_POST['xsem']) and $paidSemesterFee!="PAID"){
          
          $qry="UPDATE logindatabase SET paidSemesterFee='PAID' WHERE username= '".$_SESSION['loginuserid']."';";
          $r=mysqli_query($connect,$qry) or die("Error!!!!");
      }

      elseif(isset($_POST['xsem']) and $paidSemesterFee=="PAID"){
           echo"<script>alert('Semester Fee Already PAID')</script>";

      }
?>

<!DOCTYPE html>
<html>
<head>
	<title>feepayment</title>
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <script type="text/javascript">
        

        function Alert(argument){
          alert(argument+' fees paid.');
        }
      </script>

      <script>
          function goBack() {
              window.history.back();
          }
</script>
</head>
<body>

      <div class="row" style="background-color: #e1f5fe;">
      <div class="col s12 center">
        <p style='color:#00695c;font-size: 20px'>
        <b>Fee Payment</b>
        </p>
      </div>         <a class="waves-effect waves-light btn" href="logout.php">LogOut</a>

      </div>
      <br>
          <button class="btn-floating btn-large waves-effect waves-light red" onclick="goBack()"><i class="material-icons">skip_previous</i></button>

       <div class="row">
       <form class="col s12" method="POST">      
        <div class="col s12">
       <p><b>FEE STRUCTURE</b></p>
       </div>
       <div class="row">
        <table class="highlight">
        <thead>
          <tr>
              <th data-field="id">Serial-no.</th>
              <th data-field="name">Fee Type</th>
              <th data-field="price">Amount</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>Mess Fee</td>
            <td>12,000</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Semester Fee</td>
            <td>40,000</td>
          </tr>
        </tbody>
      </table>
      </div>
<br>
   <p><b>Mess Fee</b></p>
    <button class="waves-effect waves-light btn" name="xmess" id='xmess' >Pay MessFee</button><br>
    <p><b>Semester Fee</b></p>
    <button class="waves-effect waves-light btn" name ="xsem" id='xsem' onclick='Alert("Semester")'>Pay SemesterFee</button>
            
            </form>
            </div>


            	


   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

        
</body>
</html>