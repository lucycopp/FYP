<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 06/02/2018
 * Time: 14:58
 */

require 'index.php';

$roomID = $_GET['ID'];
$MAC = $_GET['mac'];
$RSSI = $_GET['rssi'];




$sql =  "INSERT INTO AccessPointsTavle(\"Location ID\", RSSI, MAC) VALUES (?, ?, ?)";
$params = array($roomID, $RSSI, $MAC);

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
}else {echo "Added"; }



?>