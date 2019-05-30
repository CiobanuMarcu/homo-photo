<?php
session_start();
ob_start();
include('../service/DatabaseManager.php');
if(isset($_GET['submit'])) {
    $clasa = $_GET["clasa"];
    $idp = $_GET["poza"];
    $numeprof = $_SESSION['user'];//id user
    header("Location:../verifica-elevi2.php?id=$idp&clasa=$clasa&np=$numeprof");
    closeConnection($connection);
}