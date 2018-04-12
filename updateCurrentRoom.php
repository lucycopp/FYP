<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 12/04/2018
 * Time: 13:16
 */

$userID = $_GET['userID'];
$roomID = $_GET['roomID'];

$sql = "SELECT $roomID AS \"Location ID\" FROM UserTable WHERE \"User ID\" = (?)";
$params = array($userID);

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
}else {echo "Updated"; }

?>