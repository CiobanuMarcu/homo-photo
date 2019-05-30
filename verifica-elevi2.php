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
<section id="about">
    <?php
    // idp=id poza
    // ide=ide elev
    // y=clasa
    // z=nume prof
    // nume= nume elev
    $idp=$_GET['id'];
    $y=$_GET['clasa'];
    $z=$_GET['np'];
    include('service/DatabaseManager.php');
    $connection = getConnection();
    $rowSQL = mysqli_query($connection, "SELECT * FROM poze WHERE id='$idp'" );
    while($row = mysqli_fetch_array( $rowSQL )){$imagine=$row['id']; $titlu=$row['titlu'];echo"<img src=logic/download-logic.php?id=$imagine/></br>";echo $titlu;$iprof=$row['intrebare'];}
    echo "<table class=\"table\">
    <thead>
    <tr>
        <th scope=\"col\">Numele elevului</th>
        <th scope=\"col\">Personaje</th>
        <th scope=\"col\">Obiecte</th>
        <th scope=\"col\">Acțiuni</th>
        <th scope=\"col\">Locul acțiunii</th>
        <th scope=\"col\">Poziția autorului</th>
        <th scope=\"col\">Perioada istorică</th>
        <th scope=\"col\">Publicația în care apare poza</th>
        <th scope=\"col\">".$iprof."</th>
        <th scope=\"col\">Întrebarea adresată profesorului</th>
        <th scope=\"col\">Poză</th>
    </tr>
    </thead><tbody>";
    $rowSQL = mysqli_query($connection, "SELECT * FROM utilizatori WHERE Prof='$z' AND Clasa='$y'" );
    while($row = mysqli_fetch_array( $rowSQL )) {
        $nume=$row['Nume'];
        $ide=$row['id'];
        echo
        "<tr>
            <td>".$nume."</td>";
        $rasp = mysqli_query($connection, "SELECT * FROM raspunsuri WHERE poza_id='$idp' AND user_id='$ide'" );
        while($rasprow = mysqli_fetch_array($rasp))
        {
            $r11=$rasprow['r11'];
            $r12=$rasprow['r12'];
            $r13=$rasprow['r13'];
            $r14=$rasprow['r14'];
            $r21=$rasprow['r21'];
            $r22=$rasprow['r22'];
            $r23=$rasprow['r23'];
            $r24=$rasprow['r24'];
            $r3=$rasprow['r3'];
            echo"<td>".$r11."</td>
            <td>".$r12."</td>
            <td>".$r13."</td>
            <td>".$r14."</td>
            <td>".$r21."</td>
            <td>".$r22."</td>
            <td>".$r23."</td>
            <td>".$r24."</td>
            <td>".$r3."</td>
            <td><a href='logic/verifica-poza.php?idp=$idp&ide=$ide'><p>Către poză</p></a></td>
            </tr>";
        }
    }
    echo"</tbody></table>";
    ?>
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