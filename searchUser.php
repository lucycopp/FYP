<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 28/10/2017
 * Time: 23:38
 */
require 'index.php';
$username = $_POST["name"];

searchForRecordInUserTableUsernameReturnJSON($username, $conn);
?>