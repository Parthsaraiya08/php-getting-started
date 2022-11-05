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
        font-size: large;
    }
    .h3 {
        color: white;
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
    .a{
        font color: white;
    }
    .h3{
        font color: white;
        font: size 20px;
        text-align: right;
    }
    .h4{
        font: size 20px;
        text-align: right;
    }
</style>
<body>

<div class="topnav">
    <a class="active" href="php1.html">Home</a>
    <a href="About1.html">About</a>
    <a href="Product1.php">Products</a>
    <a href="News1.html">News</a>
    <a href="Contact1.php">Contact</a>
    <a href="login11.php">Login</a>
</div>
<!-- Text in white color -->
<div style='display: flex; width: 100vw;' class='justify-center'>
<div class='px-16'>
<p class='text-white text-xl'>Last five previously visited products:-</p>

                        <?php
                        echo "<div style='text-align:center'>";

                        // read the cookie visited_services to get a SplQueue of the last 5 visited services and display them
                        if(isset($_COOKIE['visited_services'])) {
                           $visited_services = $_COOKIE['visited_services'];
                           $visited_services = unserialize($visited_services);
                           foreach($visited_services as $service_url) {
                            
                            //   $service = substr($service_url, 10); // remove the "services/
                            //   $service = str_replace('_', ' ', $service); // replace _ with spaces
                            //   $service = ucwords($service); // capitalize the first letter of each word
                              $service = substr($service_url, 0, -4);
                              echo " <table>
                                <tr>
                                    <td><a href='$service_url' style='color:red'>$service</a></td>
                                </tr>
                            </table>";
                            }
                        }
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='text-center px-16'>";
                        echo"<p class='text-white text-xl'>Most Visited Products:-</p>";
                        if (isset($_COOKIE['visit_count'])) {
                            $visit_count = $_COOKIE['visit_count'];
                            $visit_count = unserialize($visit_count);
                            foreach ($visit_count as $service_url => $count) {
                                echo "
                                <table>
                                    <tr>
                                        <td><a href='$service_url.php' style='color:red'>$service_url-$count times</a></td>
                                    </tr>
                                </table>";
                            }
                        }
                        echo "</div>";
                        // top 5 most visited products
                        asort($visit_count);
                        $visit_count = array_reverse($visit_count);
                        $top5 = array_slice($visit_count, 0, 5);
                        echo "<div class='text-center px-16'>";
                        echo"<p class='text-white text-xl'>Top 5 Most Visited Products:-</p>";
                        foreach ($top5 as $service_url => $count) {
                            echo "
                            <table>
                                <tr>
                                    <td><a href='$service_url.php' style='color:red'>$service_url-$count times</a></td>
                                </tr>
                            </table>";
                        }
                        echo "</div>";
                        ?>
</div>
<div class="grid grid-cols-3 px-32 py-16 gap-12">
    <div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="Stud.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$79.99</p>
        <p class="text-3xl">Adidas Football Shoes</p>
        <a href="Adidas Football Shoes.php" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">More Details</a>
        <br>
    </div>
    <div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="image2.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$199.99</p>
        <p class="text-3xl">Nike Football</p>
        <a href="Nike Football.php" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">More Details</a>
        <br>
    </div>
    <div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="image3.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$158.99</p>
        <p class="text-3xl">Adidas Football Shoes(Messi)</p>
        <a href="Adidas Football Shoes(Messi).php" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">More Details</a>
        <br>
    </div>
    <div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="image4.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$179.99</p>
        <p class="text-3xl">Adidas Football Shoes(MS10)</p>
        <a href="Adidas Football Shoes(MS10).php" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">More Details</a>
        <br>
    </div>
    <div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="image5.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$59.99</p>
        <p class="text-3xl">Barcelona Match Jersey</p>
        <a href="Barcelona Match Jersey.php" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">More Details</a>
        <br>
    </div>
    <div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="image6.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$39.99</p>
        <p class="text-3xl">Barcelona Nike Football</p>
        <a href="Barcelona Nike Football.php" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">More Details</a>
        <br>
    </div>
    <div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="image7.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$39.99</p>
        <p class="text-3xl">Barcelona Nike Football(LW10)</p>
        <a href="Barcelona Nike Football(LW10).php" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">More Details</a>
        <br>
    </div>
    <div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="image8.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$39.99</p>
        <p class="text-3xl">Adidas Shoes</p>
        <a href="Adidas Shoes.php" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">More Details</a>
        <br>
    </div>
    <div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="image9.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$39.99</p>
        <p class="text-3xl">Adidas Shoes(Long)</p>
        <a href="Adidas Shoes(Long).php" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">More Details</a>
        <br>
    </div>
    <div class="col-span-1 flex flex-col text-center text-white items-center">
        <img src="image10.png" class="w-[400px] h-auto text-center rounded-3xl"/>
        <p class="price text-2xl">$39.99</p>
        <p class="text-3xl">Adidas Shoes(Long-Messi)</p>
        <a href="Adidas Shoes(Long-Messi).php" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">More Details</a>
        <br>
    </div>
</div>

<div class="text-center text-white text-2xl bottom-0 mx-auto w-full">
    <p>© Copyright FC Barcelona Official website of FC Barcelona</p>
</div>
</body>
</html>
