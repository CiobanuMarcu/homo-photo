<?php
session_start();
ob_start();
include('../service/DatabaseManager.php');
//if(isset($_POST['submit'])) {
//if(isset($_GET['submit'])) {
    $titlu = $_GET['titlu'];
    $sql = "SELECT * FROM poze WHERE titlu='$titlu'";
    //INSERT INTO raspunsuri(r11, r12, r13, r14, user_id, poza_id) VALUES ('$r11', '$r12', '$r13', '$r14', '$idu', '$idp')
    $connection = getConnection();
    $result = mysqli_query($connection, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $row = mysqli_fetch_assoc($result);
        $idp=$row['id'];
        echo "Record successfully inserted";
        header("Location:../../nivel1.php?id=$idp");
    }
    else echo"нет";
//    else {
//        echo "There is some problem in inserting record: " . mysqli_error($connection);
//        $_SESSION['message_error'] = "There's a problem registering. Please try again!";
//        header("Location:../../inscriere.php");
//    }
    closeConnection($connection);