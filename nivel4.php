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
            <a href="index.php" class="navbar-brand" style="border-style:solid; padding:20px; height: 100% border-radius: 25px;">
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
                <h1>Temă</h1>
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
                    <h4 style="font-size: 130%">Realizează și tu o fotografie care să transmită un mesaj asemănător/opus celui din fotografia
                        analizată (nu uita să ceri acordul dacă alegi o persoană!). Încarcă fotografia.
                        <br>Analizează fotografiile colegilor, pune întrebări și dă răspunsuri.</h4>
                </div>
                <form action="elev.html">
                    <input type="file" name="pic" accept="image/*">
                    <input type="submit">
                </form>
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
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>

</body>
</html>