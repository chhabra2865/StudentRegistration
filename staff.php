<?php
 include('connection.php');
 session_start();

$qry="SELECT name,messdue,librarydue FROM logindatabase";
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


      function change(argument){
        
        var ele1="messfee"+argument;
        var ele2="semfee"+argument;
        var valuemessfee=document.getElementById(ele1).innerHTML;
        var valuesemfee=document.getElementById(ele2).innerHTML;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           alert(this.responseText);
           
          }
        };
        xhttp.open("POST", "ajax_change.php?name="+argument+"&messfee="+valuemessfee+"&semfee="+valuesemfee, true);
        xhttp.send();

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
        <b>Mess and Library Database</b>
        </p>
      </div>  
      </div>
        
      <table class="striped && centered">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Mess Fee</th>
              <th data-field="price">Semester Fee</th>
          </tr>
        </thead>

        <tbody>

        <?php
         
            while($data=mysqli_fetch_assoc($records)){
                
                $name=$data['name'];

                echo "<tr><td>";
                echo $data['name'];
                echo "</td><td contenteditable='true' name='messfeeakshat' id='messfee".$name."'>";
                echo $data['messdue'];
                echo "</td><td contenteditable='true' name='semfeeakshat' id='semfee".$name."'>";
                echo $data['librarydue'];
                echo "</td>";

                echo"<td><Button class='btn' onclick=change('".$name."')>save</button></td></tr>";

            }
        ?>
          
        </tbody>
      </table>


</body>
</html>