
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <div class="row" style="background-color: #e1f5fe;">
      <div class="col s12 center">
        <p style='color:#00695c;font-size: 20px'>
        <b>REGISRATION PORTAL</b>
        </p>
      </div>  
      </div>

      <div class="row container">
        
      <div class="col s6">
        <p class="row center" style="color:#00695c; font-size: 15px"><b>Login</b></p>
        <form class="col s12" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input username="username" name="loginuserid" id="first_name" type="text">
          <label for="first_name">userid</label>
        </div>
        <div class="input-field col s12">
          <input password="password" id="last_name" name="loginpassword" type="password">
          <label for="last_name">password</label>
        </div>
        <button class="waves-effect waves-light btn" name="xlogin" type='submit'> login</button>
      </div>
      </form>
      

      </div>

      <div class="col s6">
                 <p class="row center" style="color:#00695c; font-size: 15px"><b>SignUp</b></p>
                 <form class="col s12" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <input username="username" name="xuserid" id="first_name" type="text">
                <label for="first_name">userid</label>
              </div>
              <div class="input-field col s12">
                <input password="password" id="last_name" name="password" type="password">
                <label for="last_name">password</label>
              </div>
              <div class="input-field col s12">
                <input password="password" id="last_name" name="xpassword" type="password">
                <label for="last_name">Re-type password</label>
              </div>
              <button class="waves-effect waves-light btn" name="xregister" type='submit'>Register</button>
            </div>
            </form>
            

      </div>

      </div>


      <div class="row" style=" bottom:0%;position: absolute;">
        <div class="col s12 l12 m12 " style="background-color: #e1f5fe;">
          <p class='center col s12' style="color: #00695c;">Indian Institute of Technology,Jodhpur,Ratanda,Pincode-342005</p>
        </div>
      </div>

    </body>
  </html>
