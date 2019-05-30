<?php
session_start();
ob_start();
include('../service/DatabaseManager.php');
//if(isset($_POST['submit'])) {
if(isset($_GET['submit'])) {
    $clasa = $_GET["clasa"];
    $idu = $_SESSION['id'];
    //$sql = "INSERT INTO raspunsuri(r21, r22, r23, r24) VALUES ('$r21', '$r22', '$r23', '$r24')";
    $sql= "UPDATE utilizatori SET Clasa='$clasa' WHERE id = '$idu'";
    $connection = getConnection();
    $result = mysqli_query($connection, $sql);
    if ($result === true) {
        echo "Record successfully inserted";
        header("Location:../setari-elev.php");
    }
    else {
        echo "There is some problem in inserting record: " . mysqli_error($connection);
        $_SESSION['message_error'] = "There's a problem registering. Please try again!";

    }
    closeConnection($connection);
}