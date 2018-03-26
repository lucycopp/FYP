<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 26/03/2018
 * Time: 12:25
 */

require 'index.php';

$roomID = $_GET['ID'];
$keyword = $_GET['Keyword'];




$sql =  "INSERT INTO KeywordsTable(\"Location ID\", Keyword) VALUES (?, ?)";
$params = array($roomID, $keyword);

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
}else {echo "Added"; }



?>