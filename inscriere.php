<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Homo photographicus - Înscrie-te</title>
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
        <!--
        <div class="collapse navbar-collapse">
             <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li class="active"><a href="contact.html">Contact</a></li>
             </ul>
        </div> -->

    </div>
</div>

<!-- Home Section -->

<section id="home" class="main-contact parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1>Înscrie-te!</h1>
            </div>

        </div>
    </div>
</section>

<!-- Contact Section -->

<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <!--     <h2>Say hello..</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                 -->
                <form action="logic/register-logic.php" method="POST">
                    <div class="col-md-4 col-sm-4">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nume" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>

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
                            height: 300px;
                            min-width: 160px;
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
                    <div class="dropdown">
                        <button class="dropbtn">Județ</button>
                        <div class="dropdown-content" required>
                            <input name="judet" type="radio" value="Alba">Alba</br>
                            <input name="judet" type="radio" value="Arad">Arad</br>
                            <input name="judet" type="radio" value="Arges">Argeș</br>
                            <input name="judet" type="radio" value="Bacau">Bacău</br>
                            <input name="judet" type="radio" value="Bihor">Bihor</br>
                            <input name="judet" type="radio" value="Bistrita-Nasaud">Bistrița-Năsăud</br>
                            <input name="judet" type="radio" value="Botosani">Botoșani</br>
                            <input name="judet" type="radio" value="Brasov">Brașov</br>
                            <input name="judet" type="radio" value="Braila">Brăila</br>
                            <input name="judet" type="radio" value="Bucuresti">București</br>
                            <input name="judet" type="radio" value="Buzau">Buzău</br>
                            <input name="judet" type="radio" value="Caras-Severin">Caraș-Severin</br>
                            <input name="judet" type="radio" value="Calarasi">Călărași</br>
                            <input name="judet" type="radio" value="Cluj">Cluj</br>
                            <input name="judet" type="radio" value="Constanta">Constanța</br>
                            <input name="judet" type="radio" value="Covasna">Covasna</br>
                            <input name="judet" type="radio" value="Dambovita">Dâmbovița</br>
                            <input name="judet" type="radio" value="Dolj">Dolj</br>
                            <input name="judet" type="radio" value="Galati">Galați</br>
                            <input name="judet" type="radio" value="Giurgiu">Giurgiu</br>
                            <input name="judet" type="radio" value="Gorj">Gorj</br>
                            <input name="judet" type="radio" value="Harghita">Harghita</br>
                            <input name="judet" type="radio" value="Hunedoara">Hunedoara</br>
                            <input name="judet" type="radio" value="Ialomita">Ialomița</br>
                            <input name="judet" type="radio" value="Iasi">Iași</br>
                            <input name="judet" type="radio" value="Ilfov">Ilfov</br>
                            <input name="judet" type="radio" value="Maramures">Maramureș</br>
                            <input name="judet" type="radio" value="Mehedinti">Mehedinți</br>
                            <input name="judet" type="radio" value="Mures">Mureș</br>
                            <input name="judet" type="radio" value="Neamt">Neamț</br>
                            <input name="judet" type="radio" value="Olt">Olt</br>
                            <input name="judet" type="radio" value="Prahova">Prahova</br>
                            <input name="judet" type="radio" value="Satu Mare">Satu Mare</br>
                            <input name="judet" type="radio" value="Salaj">Sălaj</br>
                            <input name="judet" type="radio" value="Sibiu">Sibiu</br>
                            <input name="judet" type="radio" value="Suceava">Suceava</br>
                            <input name="judet" type="radio" value="Teleorman">Teleorman</br>
                            <input name="judet" type="radio" value="Timis">Timiș</br>
                            <input name="judet" type="radio" value="Tulcea">Tulcea</br>
                            <input name="judet" type="radio" value="Vaslui">Vaslui</br>
                            <input name="judet" type="radio" value="Valcea">Vâlcea</br>
                            <input name="judet" type="radio" value="Vrancea">Vrancea</br>
                        </div>
                    </div>
                    <script>
                        function check_pass() {
                            if (document.getElementById('password').value ==
                                document.getElementById('confirm_password').value) {
                                document.getElementById('submit').disabled = false;
                            } else {
                                document.getElementById('submit').disabled = true;
                            }
                        }
                    </script>
                    <div class="col-md-4 col-sm-4">
                        <input name="password" type="password" class="form-control" id="password" placeholder="Parola" onchange='check_pass();' required/>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input name="confirm_password" type="password" class="form-control"  id="confirm_password" placeholder="Confirmă parola" onchange='check_pass();' required/>
                    </div>
                    <input type="radio" name="admin" value="Elev" required> Elev
                    <input type="radio" name="admin" value="Profesor" required> Profesor
                    <div class="col-md-3 col-sm-6">
                        <input name="submit" type="submit" class="form-control" id="submit" value="Înscrie-te">
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