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
$sql = "INSERT INTO UserTable(Username', 'Guide?')
VALUES ('Lucy', 1)";
$conn -> query($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}









function addToUserTable($username, $guide, $conn){
    $sql = "INSERT INTO UserTable('Username', 'Guide?') VALUES ('WILL', 1)";
    $conn -> query($sql);

}