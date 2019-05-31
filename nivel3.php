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
                <h1>Nivel III - Concluzie</h1>
            </div>

        </div>
    </div>
</section>

<!-- Blog Single Post Section -->

<section id="blog-single-post">
<!--    <div class="container">-->
<!--        <div class="row">-->
<!---->
<!--            <div class="col-md-offset-1 col-md-10 col-sm-12">-->
<!--                <div class="blog-single-post-thumb">-->
<!--                    <div>-->
<!--                        <!-- Rasp elev-->
<!--                        <div style="float: left;">-->
<!--                            <h4>Răspunsurile tale:</h4>-->
<!--                            <p>Personaje1</p>-->
<!--                            <p>Obiecte1</p>-->
<!--                            <p>Actiuni1</p>-->
<!--                            <p>Locuri1</p>-->
<!--                            <p>Perioada1</p>-->
<!--                            <p>Publicarea1</p>-->
<!--                        </div>-->
<!--                        <!-- Rasp prof-->
<!--                        <div>-->
<!--                            <h4>Răspunsurile profesorului:</h4>-->
<!--                            <p>Personaje2</p>-->
<!--                            <p>Obiecte2</p>-->
<!--                            <p>Actiuni2</p>-->
<!--                            <p>Locuri2</p>-->
<!--                            <p>Perioada2</p>-->
<!--                            <p>Publicarea2</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    </br>-->
<!--                    </br>-->

                        <?php
                        session_start();
                        if (!isset ($_SESSION['user'])) {
                            header('Location: index.php');
                        }
                        $x=$_GET["id"];
                        include('service/DatabaseManager.php');
                        $connection = getConnection();
                        $rowSQL = mysqli_query($connection, "SELECT * FROM poze WHERE id='$x';" );
                        while($row = mysqli_fetch_array( $rowSQL )){$titlu=$row['titlu'];}
                        echo " <div class=\"blog-post-image\"><img src=logic/download-logic.php?id=$x class='indexphoto'></div>";
                        echo "<i style='margin-left: 675px;'>".$titlu."</i>";
                        $idu = $_SESSION['id'];
                        $mysqli = new mysqli("localhost", "root", "", "homo-photo");
                        $query = "SELECT r11, r12, r13, r14, r21, r22, r23, r24 FROM raspunsuri WHERE user_id=$idu";
                                echo "<div style='text-align: center;'><div class=\"col-md-4 col-sm-4\"><p>Răspunsurile tale:</p>";
                        if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                $r11 = $row["r11"];
                                $r12 = $row["r12"];
                                $r13 = $row["r13"];
                                $r14 = $row["r14"];
                                $r21 = $row["r21"];
                                $r22 = $row["r22"];
                                $r23 = $row["r23"];
                                $r24 = $row["r24"];
                                echo $r11 . '<br />';
                                echo $r12 . '<br />';
                                echo $r13 . '<br />';
                                echo $r14 . '<br />';
                                echo $r21 . '<br />';
                                echo $r22 . '<br />';
                                echo $r23 . '<br />';
                                echo $r24 . '</div>';
                            }
                        }
                        else echo "NU";
                        echo "<div class=\"col-md-4 col-sm-4\"><p>Răspunsurile profesorului:</p>";
                        $queryp = "SELECT r11, r12, r13, r14, r21, r22, r23, r24 FROM poze WHERE id=$x";
                        if ($resultp = $mysqli->query($queryp)) {
                            while ($rowp = $resultp->fetch_assoc()) {
                                $r11p = $rowp["r11"];
                                $r12p = $rowp["r12"];
                                $r13p = $rowp["r13"];
                                $r14p = $rowp["r14"];
                                $r21p = $rowp["r21"];
                                $r22p = $rowp["r22"];
                                $r23p = $rowp["r23"];
                                $r24p = $rowp["r24"];
                                echo $r11p . '<br />';
                                echo $r12p . '<br />';
                                echo $r13p . '<br />';
                                echo $r14p . '<br />';
                                echo $r21p . '<br />';
                                echo $r22p . '<br />';
                                echo $r23p . '<br />';
                                echo $r24p . '</div></div><br />';
                            }
                        }
                        else echo "NU";

                    echo "<form action='logic/rasp/r3.php' method='get'>";
                        echo"<h4 style='margin-top: 200px;'>Adresează o întrebare profesorului pe baza fotografiei:</h4>";
                        echo"<input type='text' class='form-control' name='raspuns' id='raspuns' style='width: 500px;' required>";
                        echo"<input type=\"text\" style=\"display: none;\" name=\"id\" id=\"id\" value=$x >";
                        echo"<div class='col-md-3 col-sm-4'>";
                            echo"<input name='submit' type='submit' class='form-control' id='submit' value='Trimite întrebarea'>";
                        echo "</div>";
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