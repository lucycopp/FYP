<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 26/03/2018
 * Time: 11:17
 */

require 'index.php';
$mac = $_GET['MAC'];



$sql = "SELECT * FROM AccessPointsTable WHERE MAC=(?) FOR JSON AUTO";
$parameters =  array($mac);
$stmt = sqlsrv_query($conn, $sql, $parameters);
if ($stmt) {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {
        echo $row[0];
    }
    sqlsrv_free_stmt($stmt);
}
else {die(print_r(sqlsrv_errors(), true)); }

?>