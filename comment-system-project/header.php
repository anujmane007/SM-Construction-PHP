<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="shortcut icon" type="image/png" href="../assets/client1.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <style>
        .navbar {
            display: none;
        }

        @media (max-width: 1140px) {
            .navbar {
                display: block;
            }
        }

        .container {
            max-width: 700px;
            margin: 0 auto;

            text-align: center;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 44px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        @media (max-width: 1140px) {
            .header #menu-btn {
                display: inline-block;
            }

        }
    </style>
</head>

<body>
    <header class="header">

        <a href="../index.php" class="logo">
            <img src="../assets/client1-modified.jpg" alt="SM Construction & Developer's logo">
            <span>SM Construction & Developer's</span>
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