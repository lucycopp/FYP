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

if ($conn === false)
{
    die(print_r(sqlsrv_errors() , true));
}
else {
    echo "Connected";
}
searchForRecordInUserTableUsername('Lucy', $conn);
function addToUserTable($username, $guide, $conn){

    $sql =  "INSERT INTO UserTable(Username, Guide) VALUES (?, ?)";
    $params = array($username, $guide);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}

function searchForRecordInUserTableUsername ($username, $connection){
    $sql = "SELECT * FROM UserTable WHERE Username LIKE $username";
    $res = $connection->query($sql);
    while($row=$res->fetch_assoc()) { echo 'Found'; }

}