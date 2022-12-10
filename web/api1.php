<?php
    // iPage Server
    $servername = 'us-cdbr-east-06.cleardb.net';
    $username = "b62fe05b205769";
    $password = "0462fe2a";
    $dbname = "heroku_213c908b09cc5ee";

    // Local
    // $servername = "localhost";
    // $username = "admin";
    // $dbname = "ankur_db";
    // $password = "YjJQkmV8sV0E"; // NUC
    // // $password = "HhRn48nbXQyc"; // Macbook

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Build and execute query
    // select hits from most_visted and divide hits column by 2

    $sql = "SELECT service_name, service_url, hits FROM most_visited ORDER BY hits DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    // return the result in json format
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($result);
?>