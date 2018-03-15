<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 15/03/2018
 * Time: 18:33
 */


require 'index.php';


$roomName = $_GET['Name'];
$time = $_GET['Time'];


$sql =  "INSERT INTO RoomTable(Name, Time) VALUES (?, ?)";
$params = array($roomName, $time);

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
}else {echo "Added"; }


?>