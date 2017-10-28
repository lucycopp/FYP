<html>
<?php
/*Connect using SQL Server authentication.*/
$serverName = "tcp:lcdata.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "data",
    "UID" => "lucycopp",
    "PWD" => "Bubble2017"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);
searchForRecordInUserTableUsername("'Lucy'", $conn);




function addToUserTable($username, $guide, $conn){

    $sql =  "INSERT INTO UserTable(Username, Guide) VALUES (?, ?)";
    $params = array($username, $guide);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}

function searchForRecordInUserTableUsername ($username, $connection)
{
    $sql = "SELECT * FROM UserTable WHERE Username=$username FOR JSON AUTO";
    $stmt = sqlsrv_query($connection, $sql);
    if ($stmt) {
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {
           echo $row[0];
        //    echo $stmt;
        }
    sqlsrv_free_stmt($stmt);
}
    else {die(print_r(sqlsrv_errors(), true)); }
}
?>