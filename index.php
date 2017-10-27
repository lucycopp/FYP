<?php
$servername = "lcdata.database.windows.net";
$username = "lucycopp";
$password = "Bubble2017";
$database = "data";
//create the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
else {
    echo "Connected successfully!";
}
mysqli.close($conn);



?>