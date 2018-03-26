<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 26/03/2018
 * Time: 12:12
 */

require 'index.php';
$id = $_GET['ID'];



$sql = "SELECT * FROM KeywordsTable WHERE \"Location ID\"=(?) FOR JSON AUTO";
$parameters =  array($id);
$stmt = sqlsrv_query($conn, $sql, $parameters);
if ($stmt) {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {
        echo $row[0];
    }
    sqlsrv_free_stmt($stmt);
}
else {die(print_r(sqlsrv_errors(), true)); }

?>