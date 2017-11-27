<?php

require_once('mcl_Oci.php');
require_once('src/php/require.php');
$authorized = ($user["status"] == "authorized" ? 1 : 0);
if($authorized) {
  header("Location: http://{$_SERVER['SERVER_NAME']}:{$_SERVER['SERVER_PORT']}/");
  die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>OEP Dashboard</title>

  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
  <link href="css/login.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <div class="login">
    <div class="container">
      <form class="form-signin" role="form" action="index.php" method='post'>
        <h2 class="form-signin-heading">OEP Dashboard</h2>
        <label>Username:</label>

        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
        <label>Password:</label>

        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        <br>
        <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block" style="height: 10%; width: 10%; margin: auto;">
        <br>
      </form>
    </div>
  </div>

  <div id="login_footer" style="
      background-image: url(img/dte_logo.png);    
      text-align: right;
      margin: auto;
      width: 30%;
      height: 20%;
      border-style: solid;
      border-width: thin;
      border-color: #00457B;
      color: #00457B;
      padding: 50px;
      background-repeat: no-repeat;
      background-color: white;">
  <b>Dashboard Admins:</b>
  <br>
  Nelu Andrei [:nelu.andrei@dteenergy.com]
  
 <!-- <a href="changelog.php"><font color="white">Version 0.9.0</font></a> -->
</div>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>