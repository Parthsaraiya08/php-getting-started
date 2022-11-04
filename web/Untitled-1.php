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
<?php
                        extract($_POST);
                        $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
                        if(strlen($FirstName) > 50 || strlen($LastName) > 50 || !(preg_match($regex, $Email)) || strlen($HomeAddress) > 100 || strlen($HomePhone) > 15 || strlen($CellPhone) > 15){
                          print("<h2>Sorry, unable to register. Please check your input.</h2>");
                          die();
                        }
                        else{
                          $link = mysqli_connect('localhost', 'root', '', 'parth_db');
                          if (!$link) {
                          	die('Could not connect: ' . mysqli_connect_error());
                          }
                          $query = "INSERT INTO `user_table`(`First Name`, `Last Name`, `Email`, `Home Address`, `Home Phone`, `Cell Phone`) VALUES ('".$fName."', '".$lName."', '".$email."', '".$addr."', '".$hPhone."', '".$cPhone."')";
                          # Pass the querry into the DB
                          if(!mysqli_query($link, $query)){
                            print("Could not execute query! <br />");
                            echo "Error: " . $query . "<br>" . mysqli_error($link);
                          }
                          else{
                            echo "<h2>Thank you for registering, you have been added to our users list.</h2>";
                          }
                          mysqli_close($link);
                          die();
                        }
                     ?>
 <a href="login11.php" style="color: white; text-align: right; margin: 4px 2px; display: inline-block;">Logout</a>  
<div class="text-center text-white text-2xl bottom-0 mx-auto w-full ">
    <p>© Copyright FC Barcelona Official website of FC Barcelona</p>
</div>
</body>
</html>
