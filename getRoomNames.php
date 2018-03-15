<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 15/03/2018
 * Time: 20:00
 */

require 'index.php';

$sql = "SELECT * FROM RoomTable FOR JSON AUTO";
$stmt = sqlsrv_query($conn, $sql, $parameters);

if ($stmt) {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {
        echo $row[0];
    }
    sqlsrv_free_stmt($stmt);
}
else {die(print_r(sqlsrv_errors(), true)); }

?>