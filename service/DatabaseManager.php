<?php
/**
 * Created by PhpStorm.
 * User: Marcu
 * Date: 24 Mai 2019
 * Time: 17:21
 */
function getConnection()
{
    $conn = mysqli_connect('localhost', 'root', '', 'homo-photo');
    if (!$conn) {
        die("Connection failed:" . mysqli_connect_error());
    }
    return $conn;
}
function closeConnection($conn)
{
    mysqli_close($conn);
}