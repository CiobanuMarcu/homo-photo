<?php
session_start();
ob_start();
include('../../service/DatabaseManager.php');
//if(isset($_POST['submit'])) {
if(isset($_GET['submit'])) {
    $r3 = $_GET["raspuns"];
    $idu = $_SESSION['id'];//id user
    $idp = $_GET["id"];
    //$sql = "INSERT INTO raspunsuri(r21, r22, r23, r24) VALUES ('$r21', '$r22', '$r23', '$r24')";
    $sql= "UPDATE raspunsuri SET r3 = '$r3' WHERE user_id = '$idu' AND poza_id = '$idp'" ;
    $connection = getConnection();
    $result = mysqli_query($connection, $sql);
    if ($result === true) {
        echo "Record successfully inserted";
        header("Location:../../nivel4.php?id=$idp");
    }
    else {
        echo "There is some problem in inserting record: " . mysqli_error($connection);
        $_SESSION['message_error'] = "There's a problem registering. Please try again!";

    }
    closeConnection($connection);
}