<?php
session_start();
ob_start();
include('../../service/DatabaseManager.php');
//if(isset($_POST['submit'])) {
if(isset($_GET['submit'])) {
    $r21 = $_GET["pozitie"];
    $r22 = $_GET["cand"];
    $r23 = $_GET["unde"];
    $r24 = $_GET["raspuns"];
    $idu = $_SESSION['id'];//id user
    $idp = $_GET["id"];
    //$sql = "INSERT INTO raspunsuri(r21, r22, r23, r24) VALUES ('$r21', '$r22', '$r23', '$r24')";
    $sql= "UPDATE raspunsuri SET r21 = '$r21', r22 = '$r22', r23 = '$r23', r24 = '$r24' WHERE user_id = '$idu' AND poza_id = '$idp'" ;
    $connection = getConnection();
    $result = mysqli_query($connection, $sql);
    if ($result === true) {
        echo "Record successfully inserted";
        header("Location:../../nivel3.php?id=$idp");
    }
    else {
        echo "There is some problem in inserting record: " . mysqli_error($connection);
        $_SESSION['message_error'] = "There's a problem registering. Please try again!";

    }
    closeConnection($connection);
}