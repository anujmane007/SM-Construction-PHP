<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read More About SM Constructions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="../assets/client1.jpg">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

        .about-area {
            padding-top: 2%;
        }

        .about-img {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 11rem;
        }

        .image-wrapper img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
        }

        .about-img img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            margin-top: 11rem;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);

        }

        .about-text {
            padding-top: 20px;
        }

        .about-text h2 {
            color: black;
            font-family: 'Poppins', sans-serif;
            font-size: 50px;
            opacity: 0;
            animation: fade-in 2s forwards ease-in-out;
            animation-delay: 0.5s;
        }

        .about-text p {
            font-size: 18px;
            color: black;
            opacity: 0;
            animation: fade-in 2s forwards ease-in-out;
            animation-delay: 1s;
        }

        .about-text a {
            background: #b5a7f8;
            color: #fff;
            padding: 7px 15px;
            display: inline-block;
            margin-top: 20px;
            opacity: 0;
            animation: fade-in 2s forwards ease-in-out;
            animation-delay: 1.5s;
        }

        body {
            background-color: #EDEDED !important;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @media screen and (max-width: 1136px) {
            .about-area {
                margin-top: -20rem;
            }
        }
    </style>
</head>

<body>
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <div class="image-wrapper">
                            <img src="../assets/about_img.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2 class="fade-in">About Us</h2>
                        <p class="fade-in">Welcome to SM Construction, your trusted partner for all your construction
                            needs. We are a team of highly skilled and experienced professionals dedicated to providing
                            top-quality construction services to our clients.</p>
                        <p class="fade-in">With years of experience in the industry, we have successfully completed
                            numerous projects of varying complexity, ranging from small renovations to large-scale
                            commercial constructions. We take pride in our ability to deliver exceptional results on
                            time and within budget, without compromising on quality.</p>
                        <p class="fade-in">At SM Construction, we believe in building strong relationships with our
                            clients. We understand that every project is unique and requires a personalized approach.
                            That's why we work closely with our clients to understand their vision, needs, and budget to
                            create customized solutions that meet and exceed their expectations.</p>
                        <p class="fade-in">Our team is comprised of experienced architects, engineers, project managers,
                            and skilled tradespeople who are passionate about their work. We use the latest technology,
                            tools, and techniques to ensure that our projects are completed efficiently and to the
                            highest standards.</p>
                        <p class="fade-in">We are committed to providing our clients with a seamless construction
                            experience, from initial consultation to project completion. We pride ourselves on our
                            professionalism, attention to detail, and outstanding customer service.</p>
                        <p class="fade-in">Thank you for considering SM Construction for your construction needs. We
                            look forward to working with you and bringing your vision to life.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>