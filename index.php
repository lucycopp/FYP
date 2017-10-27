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
    echo "Success";
}
try{
    addToUserTable("lucy", 1, $conn);
}
catch (Exception $e){ echo "Unable to add + " + $e; }
function addToUserTable($username, $guide, $conn){
    $sql = "INSERT INTO UserTable(Username, Guide?) VALUES ($username, $guide)";
    $conn -> query($sql);

}