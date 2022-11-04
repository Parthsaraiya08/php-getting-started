<html>
<head>
    <title>My First Web Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {}
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700&family=Poppins:wght@300;400;700&family=Roboto:wght@900&display=swap"
          rel="stylesheet">
</head>
<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-image: url('vDZzlaI-camp-nou-wallpaper.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .topnav {
        overflow: hidden;
        background-color: green;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: green;
    }

    .topnav a.active {
        background-color: black;
        color: white;
    }

    .h2 {
        color: white;
        text-align: left;
        padding-top: 5%;
        font-size: large;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
    }

    .all-browsers {
        margin: 0;
        padding: 5px;
    }

    .all-browsers > h1, .browser {
        color: white;
        margin: 10px;
        padding: 5px;
    }

    .text {
        margin: 10px;
        padding: 5px;
        color: white;
    }

    .browser > h2, p {
        margin: 4px;
        font-size: 90%;
    }
            table{ 
            background-image: url('vDZzlaI-camp-nou-wallpaper.jpg');
            width: 70%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 12px;
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
/* font color white in table */
        table tr td, table tr th{
            color: white;
        }
        table tr:hover{
            background-color: #d4d4d4;
        }
        table tr:nth-child(even):hover{
            background-color: red;
        }
        table tr:nth-child(odd):hover{
            background-color: blue;
        }
        a{
           /* font color in white */
            color: white;
        }
        echo{
            te
        }
</style>
<body>

<div class="topnav">
    <a href="php1.html">Home</a>
    <a href="About1.html">About</a>
    <a href="Product1.html">Products</a>
    <a href="News1.html">News</a>
    <a href="Contact1.php">Contact</a>
    <a href="login11.php">Login</a>
</div>
<center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("akaidecember46336.ipagemysql.com", "parth", "parth@789", "parth_db");
         
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
        $sql = "INSERT INTO user_table  VALUES ('$first_name',
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
 <a href="login11.php" style="color: white; text-align: right; margin: 4px 2px; display: inline-block;">Logout</a>  
<div class="text-center text-white text-2xl bottom-0 mx-auto w-full ">
    <p>© Copyright FC Barcelona Official website of FC Barcelona</p>
</div>
</body>
</html>
