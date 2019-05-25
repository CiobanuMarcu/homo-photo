<?php session_start(); ?>
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
<?php
if (!isset ($_SESSION['user'])) {
    header('Location: index.php');
}
?>
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
            <a href="index.php" class="navbar-brand" style="border-style:solid; padding:20px; border-radius: 25px; height: 100%">
                <span>Homo</br>photographicus</span>
            </a>
        </div>
        <a href="logic/logout-logic.php" class="smoothScroll btn btn-default">Deconectează-te</a>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--
                     <li><a href="index.html">Home</a></li>
                     <li><a href="about.html">About</a></li>
                     <li><a href="gallery.html">Gallery</a></li>
                     <li><a href="contact.html">Contact</a></li>
                </ul> -->
        </div>

    </div>
</div>

<!-- Home Section -->

<section id="home" class="main-single-post parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1>Nivel III - Concluzie</h1>
            </div>

        </div>
    </div>
</section>

<!-- Blog Single Post Section -->

<section id="blog-single-post">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="blog-single-post-thumb">
                    <div class="blog-post-image">
                        <img src="images/800px-Adunare_Piaţa_Palatului_August_1968.jpg" class="indexphoto" alt="Blog Image 3">
                    </div>
                    <div>
                        <!-- Rasp elev-->
                        <div style="float: left;">
                            <h4>Răspunsurile tale:</h4>
                            <p>Personaje1</p>
                            <p>Obiecte1</p>
                            <p>Actiuni1</p>
                            <p>Locuri1</p>
                            <p>Perioada1</p>
                            <p>Publicarea1</p>
                        </div>
                        <!-- Rasp prof-->
                        <div>
                            <h4>Răspunsurile profesorului:</h4>
                            <p>Personaje2</p>
                            <p>Obiecte2</p>
                            <p>Actiuni2</p>
                            <p>Locuri2</p>
                            <p>Perioada2</p>
                            <p>Publicarea2</p>
                        </div>
                    </div>
                    </br>
                    </br>
                    <h4 align="left">Adresează o întrebare profesorului pe baza fotografiei:</h4>
                    <form action="nivel4.php" method="post">
                        <input type="text" class="form-control" placeholder="" name="" required>
                        <div class="col-md-3 col-sm-4">
                            <input name="submit" type="submit" class="form-control" id="submit" value="Trimite întrebarea">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>

<!-- Footer Section -->

<footer>
    <div class="container">
        <div class="row">
            <!--
           <div class="col-md-5 col-md-offset-1 col-sm-6">
                <h3>Neuron Studio</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                <div class="footer-copyright">
                     <p>Copyright &copy; 2017 Your Company - Design: Tooplate</p>
                </div>
           </div>

           <div class="col-md-4 col-md-offset-1 col-sm-6">
                <h3>Talk to us</h3>
                <p><i class="fa fa-globe"></i> 512 Delicious Street, San Francisco, CA 10880</p>
                <p><i class="fa fa-phone"></i> 010-020-0990</p>
                <p><i class="fa fa-save"></i> info@company.com</p>
           </div>

           <div class="clearfix col-md-12 col-sm-12">
                <hr>
           </div>

           <div class="col-md-12 col-sm-12">
                <ul class="social-icon">
                     <li><a href="#" class="fa fa-facebook"></a></li>
                     <li><a href="#" class="fa fa-twitter"></a></li>
                     <li><a href="#" class="fa fa-google-plus"></a></li>
                     <li><a href="#" class="fa fa-dribbble"></a></li>
                     <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
           </div>
           -->
        </div>
    </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>

</body>
</html>