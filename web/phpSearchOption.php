<?php

$search = $_POST['search'];
$column = $_POST['column'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "parth_db";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from user_table2 where first_name like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["first_name"]."";
    // echo $row["first_name"]."  ".$row["last_name"]."  ".$row["Email"]."  ".$row["HomeAddress"]."  ".$row["HomePhone"]."  ".$row["CellPhone"]."  "<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>