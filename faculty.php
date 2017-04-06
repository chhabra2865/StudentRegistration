<?php
 include('connection.php');
 session_start();

$qry="SELECT name,mobile,emailid,rollno,Courses FROM logindatabase";
$records=mysqli_query($connect,$qry) or die("error getting from database");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Database</title>

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
        <p style='color:#00695c;font-size: 20px'>
        <b>Registered Students</b>
        </p>
      </div>  
 
      </div>
        
      <table class="striped && centered">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Contact</th>
              <th data-field="price">Email-ID</th>
              <th data-field="price">Roll Number</th>
              <th data-field="price">Courses</th>

          </tr>
        </thead>

        <tbody>
        <?php
            while($data=mysqli_fetch_assoc($records)){
                echo "<tr><td>";
                echo $data['name'];
                echo "</td><td>";
                echo $data['mobile'];
                echo "</td><td>";
                echo $data['emailid'];
                echo "</td><td>";
                echo $data['rollno'];
                echo "</td><td>";
                echo $data['Courses'];      
                echo "</td></tr>";
            }
        ?>
          <!-- <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr> -->
        </tbody>
      </table>
           <!-- <br><br> <center><a class="waves-effect waves-light btn">Save</a></center> -->


</body>
</html>