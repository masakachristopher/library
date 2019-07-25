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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- custom for indexpage -->
  <link href="wonder/css/one-page-wonder.min.css" rel="stylesheet">
  

</head>

<body >
<div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <ul class="navbar-nav ml-auto text-left">
        <li class="nav-item">
       <a class="nav-link" href="indexpage.php">Home</a>
        </li>
        </ul>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto text-right">
          <li class="nav-item">
            <a class="nav-link" href="indexpage.php?option=about">About</a>
          </li>
	        <li class="nav-item">
            <a class="nav-link" href="indexpage.php?option=contact">Admin</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="indexpage.php?option=New_user">Student sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="indexpage.php?option=login">Student sign in</a>
          </li>
          
        </ul>
      </div>
    </div>
   
  </nav>
 </div>
 

  <header style="background-image:url('images/hall.jpg');height:100%;width:100%;" class="masthead text-center text-white">
    <div class="masthead-content">
    <h1 style="font-size:60px;color:black;">Online Notice Board Platform</h1>
    <div class="responsive">
    <div  class="d-flex justify-content-center">
<div   class="panel-body" style="width:70%;">
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
			header("Location: admin/login.php");
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
  
    <h2 style="color:yellow;" class="desc">communicate !! Get Informed !! advertisement and inspiration !!</h2>

      </div>
     </div>
  </header>
  
  
 
  <!-- footer -->
  <footer style="margin-top:;" class="py-5 bg-black">
   <div style="margin-top:-2%">
   <ul class="text-center">
   
    <a href="#" style="transform:scale(1.25)" class="fa fa-facebook"></a>
    <a href="#" style="transform:scale(1.25)" class="fa fa-twitter"></a>
    <a href="#" style="transform:scale(1.25)" class="fa fa-whatsapp"></a>
    <a href="#" style="transform:scale(1.25)" class="fa fa-instagram"></a>
    <a href="#" style="transform:scale(1.25)" class="fa fa-google"></a>
    <a href="#" style="transform:scale(1.25)" class="fa fa-youtube"></a>
    <a href="#" style="transform:scale(1.25)" class="fa fa-yahoo"></a>
    <a href="#" style="transform:scale(1.25)" class="fa fa-wechat"></a>
    
   
   </ul>
   </div>
    <div style="margin-bottom:-2%" class="container">
      <p class="m-0 text-center text-white large">Copyright &copy; www.noticeboardsystem.com 2019  - Mwaulanga.  Masaka.  Mgini</p>
    </div>
  
  </footer> 

  

</body>

</html>
