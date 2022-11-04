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
        color: black;
        text-align: center;
    }

    .all-browsers {
        margin: 0;
        padding: 5px;
    }

    .all-browsers > h1, .browser {
        color: black;
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
    h1{
        color: White;
        
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
         <h1>Registration</h1>
         <!-- <form action="successfully.html" method="post">
             <br>
         <p>
               <label for="firstName">First Name:</label>
               <input type="text" name="first_name" id="firstName">
            </p>
 <br>
             
<p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="last_name" id="lastName">
            </p>    
            <br>
<p>
               <label for="Email">Email:</label>
               <input type="Email" name="Email" id="Email">
            </p>
            <br>
             
<p>
               <label for="HomeAddress">Address:</label>
               <input type="text" name="HomeAddress" id="HomeAddress">
            </p>
            <br>
             
<p>
               <label for="HomePhone">HomePhone</label>
               <input type="text" name="HomePhone" id="HomePhone">
            </p>
            <br>
<p>
                <label for="CellPhone">Cell Phone:</label>
                <input type="text" name="CellPhone" id="CellPhone">
                </p>
                <br>
            <input type="submit" value="Submit" style="color: white; text-align: right; margin: 4px 2px; display: inline-block;">
         </form> -->
         <!-- Form with first_name, last_name, email, home_address, home_phone and cellphone -->
            <form action="successfully.html" method="post">
                <br>
                <div class="flex justify-center">
                    <label for="firstName" class="text" style="min-width: 150px;">First Name:</label>
                    <input type="text" name="first_name" id="firstName">
                </div>
                <br>
                <div class="flex justify-center">

                    <label for="lastName" class="text" style="min-width: 150px">Last Name:</label>
                    <input type="text" name="last_name" id="lastName">
                </div>
                <br>
                <div class="flex justify-center">

                    <label for="Email" class="text" style="min-width: 150px">Email:</label>
                    <input type="Email" name="Email" id="Email">
                </div>
                <br>
                <div class="flex justify-center">

                    <label for="HomeAddress" class="text" style="min-width: 150px">Address:</label>
                    <input type="text" name="HomeAddress" id="HomeAddress" >
                </div>
                <br>
                <div class="flex justify-center">

                    <label for="HomePhone" class="text" style="min-width: 150px">HomePhone</label>
                    <input type="text" name="HomePhone" id="HomePhone" >
                </div>
                <br>
                <div class="flex justify-center">

                    <label for="CellPhone" class="text" style="min-width: 150px">Cell Phone:</label>
                    <input type="text" name="CellPhone" id="CellPhone">
                </div>
                <br>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
            </form>

                    </center>
                    <div class="flex justify-center">

 <a href="login11.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-4">Logout</a>
 <a href="phpss.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search</a>    
</div>
<div class="text-center text-white text-2xl bottom-0 mx-auto w-full fixed">
    <p>© Copyright FC Barcelona Official website of FC Barcelona</p>
</div>
</body>
</html>
