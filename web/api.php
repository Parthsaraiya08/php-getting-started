<?php
    $link = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b62fe05b205769', '0462fe2a', 'heroku_213c908b09cc5ee');
    if (!$link) {
        echo "Not connected!!!";
        die('Could not connect: ' . mysqli_connect_error());
    }
    $sql = "SELECT * FROM user_table";
    $result = $link->query($sql);
    // $row = $result->fetch_assoc();
    // $users = $row["first_name"];
    //new array
    $users2 = array();
    while($row = $result->fetch_assoc()){
        $users2[] = $row["first_name"];
        // $users = $users.",".$row["first_name"];
    }
    echo json_encode($users2);
?>