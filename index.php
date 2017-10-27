<?php
$servername = "lcdata.database.windows.net";
$username = "lucycopp";
$password = "Bubble2017";

//create the connection
$conn = new mysqli($servername, $username, $password);

if($conn -> connect_error){
    die("Connection failed: ".$conn->connect_error);
}

echo "Connected successfully!";




?>