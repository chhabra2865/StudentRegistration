<?php
 include('connection.php');
    session_start() ;

  if(isset($_POST['submit'])){
    $roll=$_POST['roll'];
    if(!file_exists("detail/".$roll))
      mkdir("detail/".$roll);
    $target_file = "detail/".$roll . basename($_FILES["xname"]["name"]);
    //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["xname"]["tmp_name"], $target_file))
      echo "<script>alert('File Uploaded');</script>";

  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Late Registartion</title>
		<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/> -->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
      <!-- <script type="text/javascript" src="materialize/js/materialize.min.js"></script> -->

      <div class="row" style="background-color: #e1f5fe;">
      <div class="col s12 center">
        <p style='color:#00695c;font-size: 20px'>
        <b>LATE REGISRATION</b>
        </p>
      </div>  
      </div>

      <div class="row">
    <form class="col s12">
      <!-- <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Name</label>
        </div> -->
        <!-- <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telephone</label>
        </div>
      </div> -->
    </form>
  </div>
   <form method="POST">
        <div class="row container">

                <div class="input-field col s12">
          <input id="rollnumber" name="roll" type="text"><br>
          <label for="rollnumber">Roll Number</label><br><br>
        </div>
      </div>




        <div class="container">
     
      <div class="file-field input-field">
        <div class="btn">
          <span>File</span>&nbsp&nbsp
         <input type="file" name="xname"/><br><br><br>
        </div>
        <!-- <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Upload all medical certificates and journey tickets">
        </div> -->
      </div>
    
           <input name="submit" type='submit'>
      </div>
</form>




</body>
</html>