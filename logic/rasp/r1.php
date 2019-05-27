<?php
session_start();
ob_start();
include('../../service/DatabaseManager.php');
//if(isset($_POST['submit'])) {
if(isset($_REQUEST['submit'])) {
    $r11 = $_REQUEST['personaje'];
    $r12 = $_REQUEST["obiecte"];
    $r13 = $_REQUEST["actiuni"];
    $r14 = $_REQUEST["locuri"];
    $idu = $_SESSION['id'];//id user
    //id poza???
    $sql = "INSERT INTO raspunsuri(r11, r12, r13, r14, user_id) VALUES ('$r11', '$r12', '$r13', '$r14', '$idu')";
    $connection = getConnection();
    $result = mysqli_query($connection, $sql);
    if ($result === true) {
        echo "Record successfully inserted";
        header("Location:../../nivel2.php");
    }
//    else
//    {
//        echo "There is some problem in inserting record: " . mysqli_error($connection);
//        $_SESSION['message_error'] = "There's a problem registering. Please try again!";
//        header("Location:../inscriere.php");
//    }
    closeConnection($connection);
}