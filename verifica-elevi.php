<?php
session_start();
if (!isset ($_SESSION['user'])) {
    header('Location: index.php');
}
?>
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
            <a href="elev.php" class="navbar-brand" style="border-style:solid; padding:20px; height: 100%; border-radius: 25px;">
                <span>Homo</br>photographicus</span>
            </a>
        </div>
        <a href="logic/logout-logic.php" class="smoothScroll btn btn-default">Deconectează-te</a>

    </div>
</div>

<!-- Home Section -->

<section id="home" class="main-about parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1>Verifică elevii</h1>
            </div>

        </div>
    </div>
</section>

<!-- About Section -->

<section id="about">
    <h3>Caută răspunsurile elevilor:</h3>
        <style>
            .dropbtn {
                background-color: white;
                color: #999;
                padding: 16px;
                font-size: 16px;
                border: none;
            }

            .dropdown {
                /*position: relative;*/
                display: inline-block;
                margin-left: 200px;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                height: 300px;
                min-width: 500px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                overflow: scroll;
            }

            .dropdown-content input {
                color: black;
                padding: 6px 8px;
                text-decoration: none;
                display: block;
            }
            img {
                max-width: 200px;
            }
            .dropdown-content input:hover {background-color: #ddd;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>
    <?php
    include('service/DatabaseManager.php');
    $connection = getConnection();
    $rowSQL = mysqli_query($connection, "SELECT * FROM poze" );
    echo "<div class=\"col-md-4 col-sm-4\"><div class=\"dropdown\"><button class=\"dropbtn\">Fișa de lucru</button>";
    echo "<form action='logic/cauta-elevi.php' method='get'>";
    echo "<div class=\"dropdown-content\">";
    while($row = mysqli_fetch_array( $rowSQL )){
        $titlu=$row['titlu'];
        $imagine=$row['poza'];
        $id=$row['id'];
        echo"<div><img src=logic/download-logic.php?id=$id/>           <input style='margin-left: 200px; float: left' name='poza' id='poza' type='radio' value=$id>".$titlu."</div>";
    }
    echo "</div></div></div>";
    echo "<i>Clasa se va trece cu cifre arabe, urmată ,fără spațiu, de index (ex.: 10B, 6C).</i>";
    echo "<input type='text' style='width: 500px;' placeholder='Clasa' class='form-control' name='clasa' id='clasa'>";
    echo "<input name=\"submit\" style='width: 500px;' type=\"submit\" class=\"form-control\" id=\"submit\" value=\"Caută\">";
    echo "</form>";
    ?>
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
           </div>-->

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