<?php
/* Processing the login form */
if ((!empty($_POST['email']) && !empty($_POST['password'])) || !empty($_POST['remember'])) {
  $email = $_POST['email'];
  $password = sha1($_POST['password']);

  if (!empty($_POST['remember'])) {
    $remember = $_POST['remember'];
  }

  $request = $db->prepare('SELECT id FROM users WHERE email = :email AND password = :password');
  $request->execute(array(
    'email' => $email,
    'password' => $password));

  $result = $request->fetch();

  if ($result)
  {
    echo 'Connected !';
  }
  else
  {
    setFlash("Email or password is incorrect.");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Charset Meta Tag -->
    <meta charset="utf-8">
    <!-- IE Edge Meta Tag -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title><?php if(isset($title)) { echo $title; } else { echo 'EFREI'; }?></title>
    <!-- Other Meta Tag -->
    <meta name="description" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Default CSS -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Special CSS -->
    <?php if(isset($css)) { echo $css; }?>

    <!-- Optional IE8 Support -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" id="navigation" role="navigation">
      <div class="container">
        <div class="row">
          <div class="navbar-header">   
            <!-- Hamburger Button Responsive -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <!-- End Hamburger Button Responsive -->
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
              <div class="logo">
                <img src="img/logo.png" alt="EFREI Logo" class="responsive">
              </div>
            </a>
            <!-- End Logo -->
          </div>
          <!-- Nav -->
          <div class="collapse navbar-collapse">
            <!-- List -->
            <ul class="nav navbar-nav">
              <li> <a href="student.php">Students</a> </li>
              <li> <a href="employer.php">Employers</a> </li>
              <li> <a href="offers.php">Job offers</a> </li>
            </ul>
            <!-- End List -->
            <!-- Register / Login -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="register.php" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li>
                <button data-toggle="modal" data-target="#loginModal" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> Sign in</button>
              </li>
            </ul>
            <!-- End Register / Login -->
          </div>
          <!-- End Nav -->
        </div>
      </div>
    </nav>
    <!-- End Navigation -->