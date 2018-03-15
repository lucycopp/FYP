<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 15/03/2018
 * Time: 18:33
 */

require 'index.php';

$Name = $_GET['Name'];
$Time = $_GET['Time'];


$sql = "INSERT INTO RoomTable(Name, Time) VALUES (?, ?)";
$params = array($Name, $Time);

$stmt = sqlsrv_query($conn, $sql, $params);
if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
    echo "Not added";
}else {echo "Room Added"; }


?>