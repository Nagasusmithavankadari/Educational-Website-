<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>

<header id="header">
      <div class="container">


        <!-- Navigation -->
        <nav id="nav">
          <ul class="main-menu nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="register.php">Courses</a></li>
            <li><a href="register.php">Register and Login</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
        <!-- /Navigation -->

      </div>
    </header>


  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post"  onsubmit="courses.html">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <input type="submit" class="btn" name="reg_user" value="submit">
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>