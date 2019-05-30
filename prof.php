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
               <a href="prof.php" class="navbar-brand" style="border-style:solid; padding:20px; height: 100%; border-radius: 25px;">
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
                    <h1>Încarcă o nouă</br>fișă de lucru</h1>
               </div>

          </div>
     </div>
</section>

<!-- About Section -->

<section id="about">
<!--     <h3>Caută elevii:</h3>-->
<!--     -->
<!--     session_start();-->
<!--     if (!isset ($_SESSION['user'])) {-->
<!--          header('Location: index.php');-->
<!--     }-->
<!--     include('service/DatabaseManager.php');-->
<!--     $connection = getConnection();-->
<!--     $numep = $_SESSION['user'];-->
<!--     $rowSQL = mysqli_query($connection, "SELECT * FROM utilizatori WHERE Prof='$numep' AND Clasa='' ;" );-->
<!--     while($row = mysqli_fetch_array( $rowSQL )){-->
<!--          $n=$row['Nume'];-->
<!--          echo"<input name='prof' type='radio' value=$n>".$n;-->
<!--     }-->

<!--     <div class="container">-->
<!--          <div class="row">-->
<!---->
<!--               <div class="col-md-offset-1 col-md-10 col-sm-12">-->
<!--                    <div class="col-md-4 col-sm-4">-->
<!--                         <h2>Our Story</h2>-->
<!--                         <p>Integer eget tortor justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>-->
<!--                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit <strong>Ut enim ad minim veniam, quis nostrud</strong> exercitation ullamco.</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-4 col-sm-4">-->
<!--                         <h2>New Design</h2>-->
<!--                         <p>Quisque vitae felis eros. Suspendisse quis leo molestie, iaculis sapien id, hendrerit augue. Phasellus fermentum.</p>-->
<!--                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Ut enim ad minim veniam, quis nostrud exercitation.</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-4 col-sm-4">-->
<!--                         <h2>HTML CSS</h2>-->
<!--                         <p>Vivamus non scelerisque ex, et interdum leo. In bibendum lacus vitae felis egestas, at consectetur metus facilisis.</p>-->
<!--                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Ut enim ad minim veniam, quis nostrud exercitation.</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-6 col-sm-6">-->
<!--                         <h3>Fully Customizable!</h3>-->
<!--                         <p>Maecenas quis pulvinar neque, non dapibus orci. Integer non suscipit dui. In eu tempor sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras porta lacus ac sagittis imperdiet. Vestibulum eget mattis quam.</p>-->
<!--                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita.</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-6 col-sm-6">-->
<!--                         <img src="images/about-image.jpg" class="img-responsive" alt="About Image">-->
<!--                    </div>-->
<!---->
<!--                    <div class="clearfix"></div>-->
<!---->
<!--                    <div class="col-md-4 col-sm-4">-->
<!--                         <img src="images/about-image1.jpg" class="img-responsive" alt="Blog Image">-->
<!--                         <h3>Section One</h3>-->
<!--                         <p>Pellentesque lobortis velit mi, sed volutpat enim facilisis at. Maecenas quis pulvinar neque, non dapibus orci.</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-4 col-sm-4">-->
<!--                         <img src="images/about-image2.jpg" class="img-responsive" alt="Blog Image">-->
<!--                         <h3>Section Two</h3>-->
<!--                         <p>Pellentesque lobortis velit mi, sed volutpat enim facilisis at. Maecenas quis pulvinar neque, non dapibus orci.</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-4 col-sm-4">-->
<!--                         <img src="images/about-image3.jpg" class="img-responsive" alt="Blog Image">-->
<!--                         <h3>Section Three</h3>-->
<!--                         <p>Pellentesque lobortis velit mi, sed volutpat enim facilisis at. Maecenas quis pulvinar neque, non dapibus orci.</p>-->
<!--                    </div>-->
<!--					-->
<!--                    <h3>One Column</h3>-->
<!--                    <p>Fusce finibus ac orci ut feugiat. Duis accumsan dui non augue ullamcorper, at porta elit lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras at est non quam mattis hendrerit. Fusce purus massa, pretium malesuada eros nec, feugiat iaculis sem.</p>-->
<!--               </div>-->
<!---->
<!--          </div>-->
<!--     </div>-->
     <form action="logic/upload-logic.php" method="post" enctype="multipart/form-data">

          <input type="file" name="image"/>
          <div class="row">
          <div class="col-md-4 col-sm-4">
               <input type="text" class="form-control" placeholder="Titlu" name="titlu" id="titlu" style="width: 300px;" required>
               <input type="text" class="form-control" placeholder="Personaje" name="personaje" id="personaje" style="width: 300px;" required>
               <input type="text" class="form-control" placeholder="Obiecte" name="obiecte" id="obiecte" style="width: 300px;" required>
               <input type="text" class="form-control" placeholder="Acțiuni" name="actiuni" id="actiuni" style="width: 300px;" required>
               <input type="text" class="form-control" placeholder="Locul acțiunii" name="locuri" id="locuri" style="width: 300px;" required>
          </div>
          <div class="col-md-4 col-sm-4">
               Poziția autorului fotografiei în raport cu evenimentul/personajul principal:
               <input type='radio' name='pozitie' id='pozitie' value='Sustinator'>Sustinator
               <input type='radio' name='pozitie' id='pozitie' value='Opozant'>Opozant
               <input type='radio' name='pozitie' id='pozitie' value='Neutru'>Neutru
               <input type='text' class='form-control' placeholder='Perioada istorică din care datează fotografia' name='cand' id='cand' required>
               <input type='text' class='form-control' placeholder='Unde a fost realizată și/sau publicată fotografia' name='unde' id='unde' required>
               <input type='text' class='form-control' placeholder='Întrebarea profesorului' name='intreb' id='intreb' required>
               <input type='text' class='form-control' placeholder='Răspuns la întrebarea profesorului' name='rintreb' id='rintreb' required>
          </div>
          </div>
          <input type="submit" name="submit" value="Încarcă!"/>
     </form>
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