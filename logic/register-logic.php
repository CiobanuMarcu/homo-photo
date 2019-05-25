<?php
session_start();
ob_start();
include('../service/DatabaseManager.php');
if(isset($_REQUEST['submit']))
{
//    if($_REQUEST['name']=='' || $_REQUEST['password']==''|| $_REQUEST['password_two']=='')
//    {
//        echo "please fill the empty field.";
//    }
    $nume=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $parola=$_REQUEST["password"];
    $judet=$_REQUEST["judet"];
    if($_REQUEST["admin"] == "Profesor")
    {
        $admin = 1;
    }
    else
    {
        $admin = 0;
    }
    $sql="insert into utilizatori(Nume, Email, Parola, Admin, Judet) values
     ('$nume', '$email', '$parola', '$admin', '$judet')";
    $connection=getConnection();
    $result=mysqli_query($connection, $sql);
    if($result === true)
    {
        echo "Record successfully inserted";
        header("Location:../elev.php");
    }
    else
    {
        echo "There is some problem in inserting record: " . mysqli_error($connection);
        $_SESSION['message_error'] = "There's a problem registering. Please try again!";
        header("Location:../inscriere.php");
    }
    closeConnection($connection);
}