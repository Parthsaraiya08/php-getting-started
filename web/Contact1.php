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

    .container {
        width: 85%;

        border-radius: 6px;
        padding: 20px 60px 30px 40px;

    }

    .container .content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .container .content .left-side {
        width: 25%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
        position: relative;
    }

    .content .left-side::before {
        content: '';
        position: absolute;
        height: 70%;
        width: 2px;
        right: -15px;
        top: 50%;
        transform: translateY(-50%);
        background: #afafb6;
    }

    .content .left-side .details {
        margin: 14px;
        text-align: center;
    }

    .content .left-side .details i {
        font-size: 30px;
        color: #3e2093;
        margin-bottom: 10px;
    }

    .content .left-side .details .topic {
        color: white;
        font-size: 18px;
        font-weight: 500;
    }

    .content .left-side .details .text-one,
    .content .left-side .details .text-two {
        font-size: 14px;
        color: #afafb6;
    }

    .container .content .right-side {
        width: 75%;
        margin-left: 75px;
        color: white;
    }

    .content .right-side .topic-text {
        font-size: 23px;
        font-weight: 600;
        color: white;
    }

    .right-side .input-box {
        height: 50px;
        width: 100%;
        margin: 12px 0;
    }

    .right-side .input-box input,
    .right-side .input-box textarea {
        height: 100%;
        width: 100%;
        border: none;
        outline: none;
        font-size: 16px;
        background: #e9eaed;
        border-radius: 6px;
        padding: 0 15px;
        resize: none;
    }

    .right-side .message-box {
        min-height: 110px;
    }

    .right-side .input-box textarea {
        padding-top: 6px;
    }

    .right-side .button {
        display: inline-block;
        margin-top: 12px;
    }

    .right-side .button input[type="button"] {
        color: white;
        font-size: 18px;
        outline: none;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        background: #3e2093;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .button input[type="button"]:hover {
        background: #5029bc;
    }

    @media (max-width: 950px) {
        .container {
            width: 90%;
            padding: 30px 40px 40px 35px;
        }

        .container .content .right-side {
            width: 75%;
            margin-left: 55px;
        }
    }

    @media (max-width: 820px) {
        .container {
            margin: 40px 0;
            height: 100%;
        }

        .container .content {
            flex-direction: column-reverse;
        }

        .container .content .left-side {
            width: 100%;
            flex-direction: row;
            margin-top: 40px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .container .content .left-side::before {
            display: none;
        }

        .container .content .right-side {
            width: 100%;
            margin-left: 0;
        }
    }

</style>
<body>
<div class="topnav">
    <a class="active" href="index.html">Home</a>
    <a href="About1.html">About</a>
    <a href="Product1.php">Products</a>
    <a href="News1.html">News</a>
    <a href="Contact1.php">Contact</a>
    <a href="login11.php">Form</a>
</div>

<div class="container mx-auto !w-full mt-32">
    <div class="content ">
        <div class="left-side">
            <?php
               $txt_file = fopen('contact_details.txt','r');
               $address = fgets($txt_file);
               $email = fgets($txt_file);
               $mobile = fgets($txt_file);
               fclose($txt_file);
            ?>
            <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one"><?php echo($address)."<br>"; ?>
              </div>
            </div>
            <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-one"><?php echo($mobile)."<br>"; ?>
                </div>
            </div>
            <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one"><?php echo($email)."<br>"; ?></div>
            </div>
        </div>
        <div class="right-side">
            <div class="flex flex-col">
                <h1 class="text-4xl py-4">Send us a message</h1>
                <form action="#">
                    <div class="flex flex-col">
                        <input type="text" placeholder="Enter your name" class="mt-8 w-[400px]">
                        <input type="text" placeholder="Enter your email" class="mt-8 w-[400px]">
                        <button type="button" value="Send Now" class="text-center mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded items-start w-[200px]">Send Now</button>
                    </div>
                </form>

            </div>
            <!--            <div class="topic-text">Send us a message</div>-->
            <!--            <form action="#">-->
            <!--                <div class="input-box">-->
            <!--                    <input type="text" placeholder="Enter your name">-->
            <!--                </div>-->
            <!--                <div class="input-box">-->
            <!--                    <input type="text" placeholder="Enter your email">-->
            <!--                </div>-->
            <!--                <div class="input-box message-box">-->

            <!--                </div>-->
            <!--                <div class="button">-->
            <!--                    <input type="button" value="Send Now">-->
            <!--                </div>-->
            <!--            </form>-->
        </div>
    </div>
</div>
<div class="text-center text-white text-2xl bottom-0 mx-auto w-full fixed">
    <p>© Copyright FC Barcelona Official website of FC Barcelona</p>
</div>
</body>
</html>
