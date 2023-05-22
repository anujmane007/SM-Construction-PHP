<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Connect</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="shortcut icon" type="image/png" href="../assets/client1.jpg">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.sendgrid.com/client/sendgrid.js"></script>         

    <style>
        .navbar {
            display: none;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        form {
            display: inline-block;
            text-align: left;
        }

        label {
            display: block;
            font-size: 15px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #ffffff;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #065bda;
        }

        @media screen and (max-width: 600px) {
            .container {
                height: 70%;
            }

            form {
                width: 70%;
            }
        }

        @media screen and (max-width: 964px) {
            .navbar {
                display: block;
            }
        }
    </style>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    <!-- {{!-- This is eddited header --}} -->

    <!-- header section starts  -->

    <header class="header">

        <a href="../index.php" class="logo">
            <img src="../assets/client1-modified.jpg" alt="SM Construction & Developer's logo">
            <span>Construction & Developer's</span>
        </a>

        <nav class="navbar">
            <a href="../index.php">home</a>
            <a href="../index.php">about</a>
            <a href="../index.php">services</a>
            <a href="../index.php">pricing</a>
            <a href="../index.php">projects</a>
            <a href="../index.php">reviews</a>
            <a href="../index.php">contact</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="info-btn" class="fas fa-info-circle"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <a href="https://www.instagram.com/">
                <div id="instagram-btn" class="fab fa-instagram"></div>
            </a>
        </div>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <form action="" class="login-form">
            <h3>login form</h3>
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
                <a href="#">forgot password?</a>
            </div>
            <input type="submit" value="login now" class="btn">
            <p>don't have an account <a href="#">create one!</a></p>
        </form>

    </header>

    <div class="contact-info">

        <div id="close-contact-info" class="fas fa-times"></div>

        <div class="info">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>Er.Shubam Menkudale</p>
            <p>+91 7083700561</p>
            <br>
            <p>Er.Yuraj Yadav</p>
            <p>+91 7083151111
            <p>
        </div>

        <div class="info">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>shubhammenkudale@gmail.com</p>
            <p>smcostruction&developers@gmail.com</p>
        </div>

        <div class="info">
            <i class="fas fa-map-marker-alt"></i>
            <h3>office address</h3>
            <p>satara, india - 400104</p>
        </div>

    </div>

    <!-- header section ends -->


    <div class="container" style="border: 1px solid #ccc; background-color: #f5ad38;">
        <h1>Let's Connect With SM Construction</h1>
        <form id="myForm" method="post" action="send_email.php">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required><br>
    
            <label for="contactnumber">Contact Number:</label>
            <input type="text" id="contactnumber" name="contactnumber" required><br>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
    
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea><br>
    
            <label for="plan">Choose a Plan:</label>
            <select id="plan" name="plan">
                <option value="basic">Basic Plan</option>
                <option value="premium">Premium Plan</option>
                <option value="ultimate">Ultimate Plan</option>
            </select>
    
            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- footer section starts  -->

    <section class="footer">

        <div class="links">
            <a class="btn" href="../index.php">home</a>
            <a class="btn" href="../index.php">about</a>
            <a class="btn" href="../index.php">services</a>
            <a class="btn" href="../index.php">projects</a>
            <a class="btn" href="../index.php">pricing</a>
            <a class="btn" href="../index.php">contact</a>
            <a class="btn" href="../index.php">blogs</a>
        </div>

        <div class="credit"> created by <span>Jay Shree Ram</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->

    <script>
        let navbar = document.querySelector('.header .navbar');
        let searchForm = document.querySelector('.header .search-form');
        let loginForm = document.querySelector('.header .login-form');
        let contactInfo = document.querySelector('.contact-info');

        document.querySelector('#menu-btn').onclick = () => {
            navbar.classList.toggle('active');
            searchForm.classList.remove('active');
            loginForm.classList.remove('active');
        };

        document.querySelector('#search-btn').onclick = () => {
            searchForm.classList.toggle('active');
            navbar.classList.remove('active');
            loginForm.classList.remove('active');
        };

        // document.querySelector('#login-btn').onclick = () =>{
        //    loginForm.classList.toggle('active');
        //    navbar.classList.remove('active');
        //    searchForm.classList.remove('active'); 
        // };

        document.querySelector('#info-btn').onclick = () => {
            contactInfo.classList.add('active');
        }

        document.querySelector('#close-contact-info').onclick = () => {
            contactInfo.classList.remove('active');
        }

        window.onscroll = () => {
            navbar.classList.remove('active');
            searchForm.classList.remove('active');
            loginForm.classList.remove('active');
            contactInfo.classList.remove('active');
        }
    </script>

</body>

</html>