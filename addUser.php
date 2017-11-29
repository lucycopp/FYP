<?php
require "index.php";
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 28/10/2017
 * Time: 23:33
 */
$username = $_GET['name'];
$guide = $_GET['guide'];

addToUserTable($username,$guide, $conn);

?>