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
echo "HELLO";
$query = "SELECT 'ID' FROM 'UserTable' WHERE 'Username' = '$username'";
if ($stmt = $mysqli->prepare($query)){
    $stmt->execute();
    while ($stmt->fetch()){
        echo "FETCH";
    }
}
else { echo "NO";}


function addToUserTable($username, $guide, $conn){

    $sql =  "INSERT INTO UserTable(Username, Guide) VALUES (?, ?)";
    $params = array($username, $guide);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}

function searchForRecordInUserTableUsername ($username, $connection){
    $query = "SELECT * FROM 'UserTable' WHERE 'Username' = '$username'";
    $result = mysqli_query($query) or die (mysqli_query());
    if ($result) {
        echo "true";
    }
    else { echo "false"; }
}
?>