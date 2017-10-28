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
$result = sqlsrv_query($connection, "SELECT * FROM UserTable WHERE Username='Lucy'");
if($result === false) {
    die( print_r( sqlsrv_errors(), true) );
}
else {echo "yes"; }
function addToUserTable($username, $guide, $conn){

    $sql =  "INSERT INTO UserTable(Username, Guide) VALUES (?, ?)";
    $params = array($username, $guide);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}

function searchForRecordInUserTableUsername ($username, $connection){
    $result = sqlsrv_query($connection, "SELECT * FROM UserTable WHERE Username=$username");
    if($result === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
    else {echo "yes"; }
}
?>