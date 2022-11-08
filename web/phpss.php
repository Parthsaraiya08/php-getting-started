<?php
include 'connect_test_db.php';
$searchErr = '';
$Details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from user_table where first_name like '%$search%' or last_name like '%$search%'");
        $stmt->execute();
        $Details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo'<br>Connection failed';
        //print_r($employee_details);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>
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
    p , h1{
        color: white;
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
    <body>
        <div class="container">
        <h3><u class="text-blue-600">Display results</u></h3>
        <br/><br/>
        <form class="form-horizontal" action="phpss.php" method="post">
        <div class="row">
            <div class="form-group">
                <label class="text-blue-600" for="email"><b>Search Information:</b>:</label><br>
                <div class="col-sm-4"><br>
                  <input type="text" class="form-control" name="search" placeholder="search here">
                </div><br>
                <div class="col-sm-2">
                  <button type="search" name="save" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-4">Submit</button>
                </div>
                <br>
            
                <br>
                <a href="login11.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-4">Logout</a>
            </div>
            <div class="form-group">
                <span class="error" style="color:White;">* <?php echo $searchErr;?></span>
            </div>
             
        </div>
        </form>
        <br/><br/>
        <h3><u>Search Result</u></h3><br/>
        <div class="table-responsive">          
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>Email</th>
                <th>HomeAddress</th>
                <th>HomePhone</th>
                <th>CellPhone</th>
              </tr>
            </thead>
            <tbody>
                    <?php
                     if(!$Details)
                     {
                        echo '<tr>No data found</tr>';
                     }
                     else{
                        foreach($Details as $key=>$value)
                        {
                            ?>
                        <tr>
                            <td><?php echo $key+1;?></td>
                            <td><?php echo $value['first_name'];?></td>
                            <td><?php echo $value['last_name'];?></td>
                            <td><?php echo $value['Email'];?></td>
                            <td><?php echo $value['Home Address'];?></td>
                            <td><?php echo $value['Home Phone'];?></td>
                            <td><?php echo $value['Cell Phone'];?></td>
                        </tr>
                             
                            <?php
                        }
                         
                     }
                    ?>
                 
             </tbody>
          </table>
        </div>
    </div>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
</html>
