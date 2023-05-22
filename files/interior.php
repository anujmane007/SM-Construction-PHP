<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Design</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/png" href="../assets/client1.jpg">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
        .navbar {
            display: none;
        }

        .swiper {
            width: 100%;
            height: 85vh;
            /* Set your desired height */
            position: relative;
            overflow: hidden;
        }

        .swiper-wrapper {
            width: 100%;
            height: 100%;
            display: flex;
        }

        .swiper-slide {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 20px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            object-fit: cover;
        }

        .swiper-pagination {
            position: absolute;
            left: 0;
            right: 0;
            margin: 0 auto;
            margin-bottom: 10px;
        }

        .swiper-button-prev,
        .swiper-button-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            cursor: pointer;
        }

        .swiper-button-prev {
            left: 10px;
        }

        .swiper-button-next {
            right: 10px;
        }

        /* Media queries */
        @media screen and (max-width: 767px) {
            .swiper-slide img {
                height: 30vh;
                width: 80vh;
            }

            .swiper-pagination {
                margin-bottom: 10px;

            }

            .swiper-button-prev,
            .swiper-button-next {
                width: 20px;
                height: 20px;
                font-size: 12px;
            }
        }

        @media screen and (max-width: 964px) {
            .navbar {
                display: block;
            }
        }
    </style>

</head>

<body>
    <!-- header section starts  -->

    <header class="header">

        <a href="../index.php" class="logo">
            <img src="../assets/client1-modified.jpg" alt="SM Construction & Developer's logo">
            <span>Construction & Developer's</span>
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#projects">projects</a>
            <a href="#pricing">pricing</a>
            <a href="#contact">contact</a>
            {{!-- <a href="#blogs">blogs</a> --}}
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
    </header>

    <div class="contact-info">
        <div id="close-contact-info" class="fas fa-times"></div>
        <div class="info">
            <i class="fas fa-phone"></i>
            <h3>Phone number</h3>
            <p>Er. Shubam Menkudale: +91 7083700561</p>
            <p>Er. Yuraj Yadav: +91 7083151111</p>
        </div>
        <div class="info">
            <i class="fas fa-envelope"></i>
            <h3>Email address</h3>
            <p>shubhammenkudale@gmail.com</p>
            <p>smcostruction&developers@gmail.com</p>
        </div>
        <div class="info">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Office address</h3>
            <p>Satara, India - 400104</p>
        </div>
    </div>

    <!-- header section ends -->

    <div class="container">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="../assets/interior1.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior2.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior3.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior4.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior5.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior6.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior7.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior8.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior9.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior10.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior11.jpeg"></div>
                <div class="swiper-slide"><img src="../assets/interior12.jpeg"></div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

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
            const swiper = new Swiper('.swiper', {
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,

                },
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            });
            const swiperSlides = document.querySelectorAll('.swiper-slide');
            swiperSlides.forEach((slide) => {
                slide.addEventListener('mouseenter', () => {
                    swiper.autoplay.stop();
                });
                slide.addEventListener('mouseleave', () => {
                    swiper.autoplay.start();
                });
            });
        </script>

        {{!--
        <script src="script.js"></script> --}}

</body>

</html>