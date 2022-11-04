<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "parth_db");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $Email =  $_REQUEST['Email'];
        $HomeAddress = $_REQUEST['HomeAddress'];
        $HomePhone = $_REQUEST['HomePhone'];
        $CellPhone = $_REQUEST['CellPhone'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO user_table2  VALUES ('$first_name',
            '$last_name','$Email','$HomeAddress','$HomePhone','$CellPhone')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored successfully.";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$Email\n $HomeAddress\n $HomePhone \n $CellPhone");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>