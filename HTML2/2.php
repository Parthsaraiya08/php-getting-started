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

    /* Background image with 50% transparency */

    body {
        background-image: url('vDZzlaI-camp-nou-wallpaper.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        backdrop-filter: blur(2px);
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

    * {
        box-sizing: border-box;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        text-align: center;
        font-family: arial;
    }

    .price {
        color: whitesmoke;
        font-size: 22px;
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
</style>
<body>
<div class="topnav">
    <a class="active" href="php1.html">Home</a>
    <a href="About1.html">About</a>
    <a href="Product1.html">Products</a>
    <a href="News1.html">News</a>
    <a href="Contact1.php">Contact</a>
    <a href="login11.php">Login</a>
</div>
<?php
    if(isset($_COOKIE['visited_services'])) {
        $visited_services = $_COOKIE['visited_services'];
        $visited_services = unserialize($visited_services);
    } else {
        $visited_services = new SplQueue();
    }

    if ($visited_services->count() > 5) {
        $visited_services->dequeue();
    }
    
    $visited_services->enqueue("Nike Football");
    $visited_services = serialize($visited_services);
    setcookie('visited_services', $visited_services, time() + (86400 * 30), "/");
?> 
<div class="grid grid-cols-3 px-32 py-16">
<div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="image2.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$199.99</p>
        <p class="text-3xl">Nike Football</p>
        <p>sajbfjkdbfjkadbgkjbsdjkbvkjdfbgjksdab
            sadgdsabgkjdasbgadsbgasudbguasdb
            sdjgbadsguoabgoubauog</p>
        <br>
    </div>
</div>
<div class="text-center text-white text-2xl bottom-0 mx-auto w-full">
    <p>© Copyright FC Barcelona Official website of FC Barcelona</p>
</div>
</body>
</html>
