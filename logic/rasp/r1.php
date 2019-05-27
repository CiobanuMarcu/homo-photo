<?php
session_start();
ob_start();
include('../../service/DatabaseManager.php');
//if(isset($_POST['submit'])) {
if(isset($_GET['submit'])) {
    $r11 = $_GET['personaje'];
    $r12 = $_GET["obiecte"];
    $r13 = $_GET["actiuni"];
    $r14 = $_GET["locuri"];
    $idu = $_SESSION['id'];//id user
    $idp = $_GET["id"];
    $sql = "INSERT INTO raspunsuri(r11, r12, r13, r14, user_id, poza_id) VALUES ('$r11', '$r12', '$r13', '$r14', '$idu', '$idp')";
    $connection = getConnection();
    $result = mysqli_query($connection, $sql);
    if ($result === true) {
        echo "Record successfully inserted";
        header("Location:../../nivel2.php");
    }
//   else {
//        echo "There is some problem in inserting record: " . mysqli_error($connection);
//        $_SESSION['message_error'] = "There's a problem registering. Please try again!";
//        header("Location:../inscriere.php");
//    }
//    closeConnection($connection);
}