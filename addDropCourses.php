<?php
 include('connection.php');

    session_start() ;
  if(isset($_POST['addcourse'])){

 // echo"<Script>alert('ehfcehfj')</script>";
   $i="";
      foreach ($_POST['courses'] as $key) {
        $i=$i.$key." ";
      }
     // echo $i;
      
      //$name=mysql_escape_string($_POST['name']);
      $qry="UPDATE logindatabase SET Courses='$i' WHERE username= '".$_SESSION['loginuserid']."';";
     // echo $qry;
      $r=mysqli_query($connect,$qry) or die("Error!!!!");


  }

  $qry="SELECT Courses FROM logindatabase WHERE username= '".$_SESSION['loginuserid']."';";
 $records=mysqli_query($connect,$qry) or die("error getting from database");

   while($data=mysqli_fetch_assoc($records)){
              
                  $Courses=$data['Courses'];
                
                  
              }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Courses</title>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <link href="multiple/css/multi-select.css" media="screen" rel="stylesheet" type="text/css">

      <script>
        $('#my-select').multiSelect();
      
      </script>
       <script>
          function goBack() {
              window.history.back();
          }
</script>
</head>
<body>
		<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
    	 <!-- <script type="text/javascript" src="materialize/js/materialize.min.js"></script> -->

    	 <div class="row" style="background-color: #e1f5fe;">
      <div class="col s12 center">
        <p style='color:#00695c;font-size: 40px'; style="align-content: center";>
        <b>Add Courses</b>
        </p>
      </div>        <a class="waves-effect waves-light btn" href="logout.php">LogOut</a>
 
      </div>
               <button class="btn-floating btn-large waves-effect waves-light red" onclick="goBack()"><i class="material-icons">skip_previous</i></button>

     	 <div class="row">
	   		<form method="POST">
          <div class="c1">
          <select name="courses[]" size="15" multiple>
            <option value="" disabled selected>Choose your courses</option>
            <option value="CS111">CS111</option>
            <option value="CS112">CS112</option>
            <option value="CS122">CS122</option>
            <option value="CS121">CS121</option>
            <option value="CS211">CS211</option>
            <option value="CS221">CS221</option>
            <option value="CS212">CS212</option>
            <option value="CS223">CS223</option>
            <option value="CS232">CS232</option>
            <option value="HS121">HS121</option>
            <option value="HS121">HS121</option>
            <option value="MA121">MA121</option>
            <option value="MS211">MS211</option>
            <option value="MS221">MS221</option>
            <option value="MS212">MS212</option>
            <option value="MS223">MS223</option>
            <option value="MS232">MS232</option>
            <option value="MA122">MA122</option>
            <option value="PH111">PH111</option>

          </select>
          </div>
          <br>
          <div class="c2">
          <label>Select Courses</label>
          <a class="waves-effect waves-light btn"><input type="submit" name="addcourse"></a>
          </div>
        
        </form>
  		</div> 
<!-- 
            <select multiple="multiple" id="my-select" name="my-select[]">
            <option value='elem_1'>elem 1</option>
            <option value='elem_2'>elem 2</option>
            <option value='elem_3'>elem 3</option>
            <option value='elem_4'>elem 4</option>
            ...
            <option value='elem_100'>elem 100</option>
    </select> -->
    <script src="multiple/js/jquery.multi-select.js" type="text/javascript"></script>

</body>
</html>