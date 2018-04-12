<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 12/04/2018
 * Time: 14:35
 */

require 'index.php';

$sql = "SELECT * FROM UserTable FOR JSON AUTO";
$stmt = sqlsrv_query($conn, $sql, $parameters);

if ($stmt) {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {
        echo $row[0];
    }
    sqlsrv_free_stmt($stmt);
}
else {die(print_r(sqlsrv_errors(), true)); }

?>