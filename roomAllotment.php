<?php

  include('connection.php');
  session_start() ;

    if(isset($_POST['xsubmit'])){
          $rollnumber1=$_POST['rollnumber1'];
          $rollnumber2=$_POST['rollnumber2'];
          $rollnumber3=$_POST['rollnumber3'];
          $floor=$_POST['floor'];
          $rollnumber="";
          $rollnumber=$rollnumber.$rollnumber1." ";
          $rollnumber=$rollnumber.$rollnumber2." ";
          $rollnumber=$rollnumber.$rollnumber3." ";

         $qry="UPDATE logindatabase SET roomchoices='$rollnumber',floor='$floor' WHERE username= '".$_SESSION['loginuserid']."';";
     // echo $qry;
         $r=mysqli_query($connect,$qry) or die("Error!!!!");
  }

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

      <script>
          $(document).ready(function() {
          $('select').material_select();
        });
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
        <b>Room Allotment</b>
        </p>
      </div> <a class="waves-effect waves-light btn" href="logout.php">LogOut</a> 
      </div>
                <button class="btn-floating btn-large waves-effect waves-light red" onclick="goBack()"><i class="material-icons">skip_previous</i></button>

      <div class="row">
    <form class="col s12" method="POST">
      <div class="row">
      <div class="row">
        <p>Enter The Roll number of 3 students with which you may want to live in.</p>
        </div>
        <div class="input-field col s4">
          <input name="rollnumber1" id="rollnumber1" type="text" required>
          <label for="choices">First Choice</label>
        </div>
        <div class="input-field col s4">
          <input name="rollnumber2" id="rollnumber2" type="text" required>
          <label for="choices">Second Choice</label>
          </div>
        <div class="input-field col s4">
          <input name="rollnumber3" id="rollnumber3" type="text" required>
          <label for="choices">Third Choice</label>
        </div>
      </div>
      
      <div class="row">
         <div class="input-field col s12">
            <select name="floor" required>
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Ground Floor</option>
              <option value="2">1st Floor</option>
              <option value="3">2nd Floor</option>
            </select>
            <label>Floor Type</label>
          </div>
        </div>
          <button class="waves-effect waves-light btn" name="xsubmit" id="xsubmit" style="margin-left:1200px;" type='submit'>Submit
  </button>

            </form>

      </div>

  </div>     

</body>
</html>