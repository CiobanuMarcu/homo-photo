<?php
session_start();
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $idp=$_POST['id'];
        $idu = $_SESSION['id'];
        /*
         * Insert image data into database
         */

        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'homo-photo';

        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }

        //$dataTime = date("Y-m-d H:i:s");

        //Insert image content into database
        //INSERT into raspunsuri (r4) VALUE ('$imgContent') WHERE poza_id ='$idp' AND user_id = '$idu'
        $insert = $db->query("UPDATE raspunsuri SET r4 = '$imgContent' WHERE user_id = '$idu' AND poza_id = '$idp'");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        }
    }else{
        echo "Please select an image file to upload.";
    }
}
?>