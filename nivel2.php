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
            <a href="elev.php" class="navbar-brand" style="border-style:solid; border-radius: 25px; padding:20px; height: 100%">
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
                <h1>Nivel II - Asociere</h1>
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
                    <div class="blog-comment-form">
<!--                        <form action="logic/rasp/r2.php" method="get">-->
<!--<!--                            -->
<!--//                                $x=$_GET['id'];-->
<!--//                                echo"<div class=\"blog-post-image\"><img src=logic/download-logic.php?id=$x class='indexphoto'></div>";-->
<!--//                                echo "<input type=\"text\" style=\"display: none;\" name=\"id\" id=\"id\" value=$x >"-->
<!--//                            -->
<!--                            <div align="left">-->
<!--                                Poziția autorului fotografiei în raport cu evenimentul/personajul principal:-->
<!--                                <input name="pozitie" type="radio" value="sustinator">Susținător-->
<!--                                <input name="pozitie" type="radio" value="opozant">Opozant-->
<!--                                <input name="pozitie" type="radio" value="neutru">Neutru-->
<!--                            </div>-->
<!--                            <input type="text" class="form-control" placeholder="Perioada istorică din care datează fotografia" name="cand" required>-->
<!--                            <input type="text" class="form-control" placeholder="Unde a fost realizată și/sau publicată fotografia" name="unde" required>-->
<!--                            <div  align="left" style="float: left; margin-right:15px;"><i>Întrebarea profesorului: </i></div>-->
<!--                            <p style="font-size: 100%;" align="left">-------</p>-->
<!--                            <input type="text" class="form-control" placeholder="Răspuns" name="raspuns" required>-->
<!--                            <div class="col-md-3 col-sm-4"><input name="submit" type="submit" class="form-control" id="submit" value="Trimite răspunsurile"></div>-->
<!--                        </form>-->
                        <form action="logic/rasp/r2.php" method="get">
                            <?php
                            $x=$_GET['id'];
                            echo "<div class=\"blog-post-image\"><img src=logic/download-logic.php?id=$x class='indexphoto' alt='Blog Image 3'></div>";
                            echo "<input type=\"text\" style=\"display: none;\" name=\"id\" id=\"id\" value=$x >";
                            //echo 'Poziția autorului fotografiei în raport cu evenimentul/personajul principal:';
                            echo "Poziția autorului fotografiei în raport cu evenimentul/personajul principal: <input type='radio' name='pozitie' id='pozitie' value='Sustinator'>Sustinator";
                            echo  "<input type='radio' name='pozitie' id='pozitie' value='Opozant'>Opozant";
                            echo  "<input type='radio' name='pozitie' id='pozitie' value='Neutru'>Neutru";
                            echo "<input type='text' class='form-control' placeholder='Perioada istorică din care datează fotografia' name='cand' id='cand' required>";
                            echo "<input type='text' class='form-control' placeholder='Unde a fost realizată și/sau publicată fotografia' name='unde' id='unde' required>";
                            $username = "root";
                            $password = "";
                            $database = "homo-photo";
                            $mysqli = new mysqli("localhost", $username, $password, $database);
                            $query = "SELECT intrebare FROM poze WHERE id=$x";
                            if ($result = $mysqli->query($query)) {

                                while ($row = $result->fetch_assoc()) {
                                    $intrebare = $row["intrebare"];
                                    echo "<div align=\"left\" style=\"float: left; margin-right:15px;\"><i>Întrebarea profesorului: </i>".$intrebare."</div>";
                                }
                            }
                            ?>
                            <input type="text" class="form-control" placeholder="Răspuns" name="raspuns" id="raspuns" required>
                            <div class="col-md-3 col-sm-4">
                                <input name="submit" type="submit" class="form-control" id="submit" value="Nivelul următor">
                            </div>
                        </form>
                    </div>
                </div>
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