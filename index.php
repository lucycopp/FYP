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
    echo "Connected - Trying to add";
}
try {
    mysqli_query($conn, "INSERT INTO UserTable(Username, Guide) VALUES ('WILL', 1)");
}
catch (Exception $e){echo $e;}










function addToUserTable($username, $guide, $conn){
    $sql = "INSERT INTO UserTable('Username', 'Guide?') VALUES ('WILL', 1)";
    $conn -> query($sql);

}