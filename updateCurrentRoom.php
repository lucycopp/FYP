<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 12/04/2018
 * Time: 13:16
 */

require 'index.php';

$userID = $_GET['userID'];
$roomID = $_GET['roomID'];

$sql = "UPDATE UserTable SET \"Location ID\" = (?) WHERE \"User ID\" = (?)";
$params = array($userID);

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
}else {echo "Updated"; }

?>