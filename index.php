<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Homo photographicus</title>
<!--

Template 2085 Neuron

http://www.tooplate.com/view/2085-neuron

-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
				<div class="logo">
					<a href="index.php" class="navbar-brand" style="border-style:solid; padding:20px; height: 100%; border-radius: 25px;">
					<span>Homo</br>photographicus</span>
					</a>
				</div>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <form method="post" action="logic/login-logic.php">
                         <div class="col-md-4 col-sm-4">
                              <input name="username" type="text" class="form-control" id="name" placeholder="Nume">
                         </div>
						 <div class="col-md-4 col-sm-4">
                              <input name="password" type="password" class="form-control" id="password" placeholder="Parolă">
                         </div>
                         <div class="col-md-3 col-sm-6">
						      <input name="submit" type="submit" class="form-control" id="submit" value="Autentifică-te">
                         </div>
                    </form>
                   <?php
                   if(isset($_SESSION['iserror']) && $_SESSION['iserror']=="true")
                   {
                       echo '<h1>The username or password are incorrect!</h1>';
                       session_destroy();
                   }
                   ?>
               </ul>

          </div>
		  <div class="col align-self-end"><p class="text-right"><a href="inscriere.html">Nu ai cont? Înscrie-te!</a></p></div>

  </div>
</div>

<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1 style="color: white;">O fotografie face cât o mie de cuvinte.</h1>
                    <h4>Află dacă este așa!</h4>
                    <!-- <a href="#blog" class="smoothScroll btn btn-default">Discover More</a> -->
               </div>

          </div>
     </div>
</section>

<!-- Blog Section -->

<section id="blog">
     <div class="container">
          <div class="row justify-content-md-center">
			<div class="row"><p style="font-size:30px;" align="center">Dar dacă nu poți citi cuvintele? </br>Te ajutăm să înțelegi mesajul fotografiei!</p></div>
			</br>
			<div class="row"><p style="font-size:30px;">Cine?</p></div>
			<div class="row">
				<div class="col"><p style="font-size:30px;">Unde?</p></div>
				<div class="col-6">
				<img src="images/800px-Adunare_Piaţa_Palatului_August_1968.jpg" class="indexphoto" alt="Gallery Image">
				</div>
				<p class="dece"><b>DE CE?</b></p>
				<div class="col"><p  style="font-size:30px;" >Când?</p></div>
			</div>
			<p style="font-size:30px;">Ce?</p>
          </div>
     </div>
</section>

<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

          </div>
     </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>