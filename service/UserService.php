<?php
/**
 * Created by PhpStorm.
 * User: Marcu
 * Date: 24 Mai 2019
 * Time: 17:20
 */
namespace service;
use model\User;
class UserService
{
    function get_user_by ($username)
    {
        $user = new User();
        $user.$username = $username;
        printf("assigning %s\n", $user.$username);
        //$user.username = "cca";
        return $user;
    }
    static function user_connect ($name, $parola)
    {
        //establishing connection
        include ('DatabaseManager.php');
        $connection = getConnection();
        $query = sprintf ("SELECT * FROM utilizatori WHERE Nume = '%s' AND Parola = '%s'",
            mysqli_real_escape_string($connection, $name),
            mysqli_real_escape_string($connection, $parola)
        );
        $result = mysqli_query($connection, $query);
        $rows = mysqli_num_rows($result);
        if($rows == 1)
        {
            $_SESSION["user"] = $_POST['username'];
            closeConnection($connection);
            header('Location: ../elev.php');
        }
        else
        {
            echo 'The username or password are incorrect!';
            $_SESSION["iserror"]="true";
            echo '<script>window.location.href="../index.php";</script>';
            //header('Location: ../login.php');
        }
        closeConnection($connection);
    }
}