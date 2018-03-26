<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 26/03/2018
 * Time: 21:10
 */

require 'index.php';

$ID = $_GET['ID'];





$sql =  "DELETE * FROM KeywordsTable WHERE ID = (?) VALUES (?)";
$params = array($ID);

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
}else {echo "Deleted"; }


?>