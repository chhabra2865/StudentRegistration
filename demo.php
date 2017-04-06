<?php
 include('connection.php');
 session_start();
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
</head>
<body>
  <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <div class="row" style="background-color: #e1f5fe;">
      <div class="col s12 center">
        <p style='color:#00695c;font-size: 20px'>
        <b>Late Registration</b>
        </p>
      </div>  
      </div>

      <div class="row">
    <form class="col s12" method="POST">
                  <form action="#">
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" placeholder="Upload Medical Certificate" type="text">
              </div>
            </div>
          </form>
            </form>

      </div>

  </div>     

</body>
</html>