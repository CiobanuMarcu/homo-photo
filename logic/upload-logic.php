<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        $titlu=$_POST["titlu"];
        $r11=$_POST["personaje"];
        $r12=$_POST["obiecte"];
        $r13=$_POST["actiuni"];
        $r14=$_POST["locuri"];
        $r21=$_POST["pozitie"];
        $r22=$_POST["cand"];
        $r23=$_POST["unde"];
        $r24=$_POST["intreb"];
        $rr=$_POST["rintreb"];
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
        $insert = $db->query("INSERT INTO poze(poza, r11, r12, r13, r14, r21, r22, r23, r24, intrebare, titlu) VALUES ('$imgContent', '$r11', '$r12', '$r13', '$r14', '$r21', '$r22', '$r23', '$rr', '$r24', '$titlu')");
        //INSERT into poze (poza) VALUE ('$imgContent')
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