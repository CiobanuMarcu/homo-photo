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
                <a href="elev.php" class="navbar-brand" style="border-style:solid; border-radius: 25px; padding:20px; height: 100%">
                    <span>Homo</br>photographicus</span>
                </a>
            </div>
        </div>
        <a href="logic/logout-logic.php" class="smoothScroll btn btn-default">Deconectează-te</a>
        </div>
<!--        <div class="col align-self-end"><p class="text-right"><a href="inscriere.php">Nu ai cont? Înscrie-te!</a></p></div>-->

    </div>
</div>

<!-- Home Section -->

<section id="home" class="main-home parallax-section">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1 style="color: white;">Setări</h1>
<!--                <h4>Află dacă este așa!</h4>-->
                <!-- <a href="#blog" class="smoothScroll btn btn-default">Discover More</a> -->
            </div>

        </div>
    </div>
</section>

<!-- Blog Section -->

<section id="blog">
    <div class="container">
        <div class="row justify-content-md-center">
            <style>
                .dropbtn {
                    background-color: white;
                    color: #999;
                    padding: 16px;
                    font-size: 16px;
                    border: none;
                }

                .dropdown {
                    position: relative;
                    display: inline-block;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f1f1f1;
                    height: 200px;
                    min-width: 210px;
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

                .dropdown-content input:hover {background-color: #ddd;}

                .dropdown:hover .dropdown-content {display: block;}

                .dropdown:hover .dropbtn {background-color: #3e8e41;}
            </style>
                    <?php
                        session_start();
                        if (!isset ($_SESSION['user'])) {
                            header('Location: index.php');
                        }
                        include('service/DatabaseManager.php');
                        $connection = getConnection();
                        $je = $_SESSION['judet'];
                        $rowSQL = mysqli_query($connection, "SELECT * FROM utilizatori WHERE Admin='1' AND Judet='$je' ;" );
                        //$row = mysqli_fetch_array( $rowSQL );
                        // W H I L E
                        //for($i = $row['max']; $i > 0; $i--) echo "<a href=nivel1.php?id=$i><img src=logic/download-logic.php?id=$i/></a></br>";
                        echo "<div class=\"row\"><div class=\"col-md-4 col-sm-4\">";
                        echo"<div class=\"dropdown\">
                                <button class=\"dropbtn\">Profesori din județul tău</button>
                                    <div class=\"dropdown-content\" required>";
                        echo "<form action='logic/schimba-prof.php' method='get'>";
                        while($row = mysqli_fetch_array( $rowSQL )){
                            $n=$row['Nume'];
                            echo"<input name='prof' type='radio' value=$n>".$n;
                        }
                        echo "</div></div>";
                        echo "<input name=\"submit\" style='width: 300px;' type=\"submit\" class=\"form-control\" id=\"submit\" value=\"Schimbă profesorul\">";
                        echo "</form>";
                        echo "</div>";

                        echo "<div class=\"col-md-4 col-sm-4\">";
                        echo "<form action='logic/schimba-clasa.php' method='get'>";
                                echo "<i>Clasa se va trece cu cifre arabe, urmată ,fără spațiu, de index (ex.: 10B, 6C).</i>";
                                echo "<input type='text' name='clasa' placeholder='Clasa'>";
                                echo "<input name=\"submit\" style='width: 300px;' type=\"submit\" class=\"form-control\" id=\"submit\" value=\"Schimbă clasa\">";
                        echo "</form>";
                        echo "</div></div>";
                    ?>
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