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
searchForRecordInUserTableUsername("LUCY", $conn);

function addToUserTable($username, $guide, $conn){

    $sql =  "INSERT INTO UserTable(Username, Guide) VALUES (?, ?)";
    $params = array($username, $guide);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}

function searchForRecordInUserTableUsername ($username, $connection){
    $sql ="SELECT ID FROM UserTable WHERE Username=(?)";
    $params = 'Lucy';
    $stmt = sqlsrv_query($connection, $sql, $params);
    if($stmt) {
       sqlsrv_next_result($stmt);
       sqlsrv_fetch($stmt);
       echo sqlsrv_get_field($stmt, 0);
    }
    else {die(print_r(sqlsrv_errors(), true)); }

}
?>