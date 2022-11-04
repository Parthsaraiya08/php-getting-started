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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700&family=Poppins:wght@300;400;700&family=Roboto:wght@900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-image: url('vDZzlaI-camp-nou-wallpaper.jpg') ;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        backdrop-filter: blur(1px);
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

    .p {
        color: white;
        padding: 15%;
        text-align: left;
        font-size: medium;
    }

    .footer {
        color: antiquewhite;
    }
           .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: red;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:pink;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: white;
         }
</style>
<body>

<div class="topnav">
    <a class="active" href="Index.html">Home</a>
    <a href="About1.html">About</a>
    <a href="Product1.html">Products</a>
    <a href="News1.html">News</a>
    <a href="Contact1.php">Contact</a>
    <a href="login11.php">Login</a>
</div>

<h2>Enter Username and Password</h2> 
<div class = "container form-signin">
   
   <?php
      $msg = '';
      function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
      if (isset($_POST['login']) && !empty($_POST['username']) 
         && !empty($_POST['password'])) {
          
         if ($_POST['username'] == 'admin' && 
            $_POST['password'] == 'admin') {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = 'admin';

            Redirect('looo.php', false);

            
            echo 'You have entered valid user name and password';
         }else {
            $msg = 'Wrong username or password';
         }
      }
   ?>
</div> <!-- /container -->

<div class = "container">

   <form class = "form-signin" role = "form" 
      action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
      ?>" method = "post">
      <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
      <input type = "text" class = "form-control" 
         name = "username" placeholder = "username = username" 
         required autofocus></br>
         <br>
      <input type = "password" class = "form-control"
         name = "password" placeholder = "password = password" required>
         <p style="color:white; border: #ddd;"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-4" type = "submit" 
         name = "login">Login</button></p>
   </form>
      
</div> 


<div class="text-center text-white text-2xl absolute bottom-0 mx-auto w-full">
    <p>© Copyright FC Barcelona Official website of FC Barcelona</p>
</div>

</html>

