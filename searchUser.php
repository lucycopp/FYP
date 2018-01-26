<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 28/10/2017
 * Time: 23:38
 */
require 'index.php';
$email = $_GET['email'];



$sql = "SELECT * FROM UserTable WHERE Email=(?) FOR JSON AUTO";
$parameters =  array($email);
$stmt = sqlsrv_query($conn, $sql, $parameters);
if ($stmt) {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {
        echo $row[0];
    }
    sqlsrv_free_stmt($stmt);
}
else {die(print_r(sqlsrv_errors(), true)); }


?>

