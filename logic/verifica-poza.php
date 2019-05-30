<?php
// database connection
$host = "localhost";
$db_name = "homo-photo";
$username = "root";
$password = "";

try{
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

catch(PDOException $exception){
    //to handle connection error
    echo "Connection error: " . $exception->getMessage();
}
// select the image
$query = "select * from raspunsuri WHERE user_id = ? AND poza_id = ?";
$stmt = $con->prepare( $query );

// bind the id of the image you want to select
$stmt->bindParam(1, $_GET['ide']);
$stmt->bindParam(2, $_GET['idp']);
$stmt->execute();

// to verify if a record is found
$num = $stmt->rowCount();

if( $num ){
    // if found
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // specify header with content type,
    // you can do header("Content-type: image/jpg"); for jpg,
    // header("Content-type: image/gif"); for gif, etc.
    header("Content-type: image/jpg");

    //display the image data
    print $row['r4'];
    exit;
}else{
    //if no image found with the given id,
    //load/query your default image here
}
