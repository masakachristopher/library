<?php
include('connection.php');
session_start();
?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Notice Board Online Platform</title>

  <!-- Bootstrap core CSS -->
  <link href="wonder/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="wonder/css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body style="background-color:black;">
<div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="indexpage.php"><span class="glyphicon glyphicon-home"></span>Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="indexpage.php?option=about"><span class="glyphicon glyphicon-user"></span> About Us</a>
          </li>
	  <li class="nav-item">
            <a class="nav-link" href="indexpage.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="indexpage.php?option=New_user"><span class="glyphicon glyphicon-user"></span>Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="indexpage.php?option=login"><span class="glyphicon glyphicon-login"></span>Log In</a>
          </li>
        </ul>
      </div>
    </div>
   
  </nav>
 </div>
 

  <header class="masthead text-center text-white">
    <div class="masthead-content">

      <div class="container">
        <h1 class="masthead-heading mb-0">welcome to this platform</h1>
        <h2 class="masthead-subheading mb-0">home of every update you need</h2>
        <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">LEARN MORE</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
  
  <section style="background-color:silver;">
    <div  class="col-sm-4">
<div   class="panel-body">
	<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		
		?>
		
	</div>
  </div>
  </section>
  <section>


   
    <div style="background-color:silver;" class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="images/vote.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Are you ready for the election??!! </h2>
            <p>It will be held after few weeks.Who is going to be our president?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background-clolor:;">
    <div style="background-color:brown;"  class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="images/nb1.jpeg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">It is time</h2>
            <p>Names for all students who require loan money</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div style="background-color:blueviolet;"  class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="images/water.jpeg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Water problem in the hostels</h2>
            <p>Dawasco explained to the Waden about water shortage for these late months</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; www.noticeboardsystem.com 2019    <span>  </span>The Team: Shaban Masaka Mgini</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
