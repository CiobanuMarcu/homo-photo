<?php
/**
 * Created by PhpStorm.
 * User: Marcu
 * Date: 24 Mai 2019
 * Time: 17:17
 */
session_start();
if(isset($_POST['submit']))
{
    include ('../service/UserService.php');
    var_dump($_POST);
    \service\UserService::user_connect($_POST['username'], $_POST['password']);
}
