<?php
   include('connection.php');
    session_start() ;

    $qry="SELECT name,messdue,librarydue FROM logindatabase WHERE username= '".$_SESSION['loginuserid']."';";
    $records=mysqli_query($connect,$qry) or die("error getting from database");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dues Clearance</title>
		<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <b>DUES CLEARANCE</b>
        </p>
      </div>        <a class="waves-effect waves-light btn" href="logout.php">LogOut</a>
 
      </div>
                <button class="btn-floating btn-large waves-effect waves-light red" onclick="goBack()"><i class="material-icons">skip_previous</i></button>

      <br>
      <p>These Are the Dues of The respective Mess records and Library Records as per your last academic year.<br>For Due Payment Vist Room Number 2003.<br>In case of any descripencies contact staff</p>
      <table class="striped && centered">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Mess Due</th>
              <th data-field="price">Library Due</th>
          </tr>
        </thead>

        <tbody>
        <?php
            while($data=mysqli_fetch_assoc($records)){
                echo "<tr><td>";
                echo $data['name'];
                echo "</td><td>";
                echo $data['messdue'];
                echo "</td><td>";
                echo $data['librarydue'];
                echo "</td></tr>";
            }
        ?>
        </tbody>
      </table>

     <!--  <p><b>Mess Due</b></p>
    <a class="waves-effect waves-light btn" name="xmess" id-"xmess" type='submit' disabled>Pay MessDue</a><br>
    <p><b>Library Due</b></p>
    <a class="waves-effect waves-light btn" id="xsem" type='submit' id='xsem' disabled>Pay LibraryDue</a>
       -->
</body>
</html>