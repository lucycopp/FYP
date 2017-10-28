<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 28/10/2017
 * Time: 23:38
 */
require 'index.php';
$username = $_GET['name'];
//$username = 'Heather';


$sql = "SELECT * FROM UserTable WHERE Username=(?) FOR JSON AUTO";
$parameters =  array($username);
$stmt = sqlsrv_query($conn, $sql, $parameters);
if ($stmt) {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {
        echo $row[0];
    }
    sqlsrv_free_stmt($stmt);
}
else {die(print_r(sqlsrv_errors(), true)); }


?>