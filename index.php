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
if ($conn) {
   if($_GET["Name"] && $_GET["Time"]){
       addRoomToTable($_GET["Name"], $_GET["Time"], $conn);
   };
}

function addRoomToTable($Name, $Time, $conn){
    $sql = "INSERT INTO RoomTable(Name, Time) VALUES (?, ?)";
    $params = array($Name, $Time);

    $stmt = sqlsrv_query($conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
        echo "Not added";
    }else {echo "Room Added"; }
}

function addToUserTable($Email, $guide, $conn){

    $sql =  "INSERT INTO UserTable(Email, Guide) VALUES (?, ?)";
    $params = array($Email, $guide);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }else {echo "Added"; }
}

function searchForRecordInUserTableUsernameReturnJSON ($Email, $connection)
{
    $sql = "SELECT * FROM UserTable WHERE Email=(?) FOR JSON AUTO";
    $parameters =  array($Email);
    $stmt = sqlsrv_query($connection, $sql, $parameters);
    if ($stmt) {
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {
           echo $row[0];
        }
    sqlsrv_free_stmt($stmt);
}
    else {die(print_r(sqlsrv_errors(), true)); }
}


?>