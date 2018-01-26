<?php
require "index.php";
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 28/10/2017
 * Time: 23:33
 */
$email = $_GET['email'];
$guide = $_GET['guide'];

addToUserTable($email,$guide, $conn);

?>