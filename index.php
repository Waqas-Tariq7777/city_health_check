<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="City_Style.css?v=1.0">
    <title>CityHealthCheck</title>
</head>

<body>
<?php include 'header.php'; ?>

    <!--Banner-->
    <section class="banner">
        <div class="overlay">
            <div class="banner_content">
                <h1>City Health Check</h1>
                <h2>Your Health, Our Priority.Unlock Your Best Health – Discover a New Path to Wellness Today!</h2>
                <div class="banner_divider">
                    <hr width="20px"><span><i class="fa fa-heartbeat"></i></span>
                    <hr width="50px">
                </div>
                <div class="banner_list">
                    <i class="fa fa-circle"></i><span><a href="#">HGV, PCV & D4 Medicals</a></span>
                    <i class="fa fa-circle"></i><span><a href="">Taxi Driver Medicals</a></span>
                    <i class="fa fa-circle"></i><span><a href="">ML5 Seafarer Medicals</a></span>
                </div>
                <div class="banner_list">
                    <i class="fa fa-circle"></i><span><a href="">National Motor Sports Medical</a></span>
                    <i class="fa fa-circle"></i><span><a href="">Health and Wellbeing Check</a></span>
                    <i class="fa fa-circle"></i><span><a href="">ECG</a></span>
                </div>
                <div class="banner_list">
                    <i class="fa fa-circle"></i><span><a href="">Blood Sugar</a></span>
                    <i class="fa fa-circle"></i><span><a href="">Body Fat & Composition Analysis</a></span>
                </div>
                <div class="banner_btn">
                    <button type="button" onclick="location.href='#services'">Learn More</button>
                    <button type="button" onclick="location.href='tel:+923025649101'"><i class="fa fa-phone"></i><span>+923025649101</span></button>
                </div>
            </div>
        </div>
    </section>

    <!--Services-->
    <section class="container" id="services">
        <div class="price_head">
            <h2>City Health Medicals</h2>
        </div>
        <div class="Price_grid">
            <div class="Price_grid_item">
                <div>
                    <h3>£40</h3>
                </div>
                <div class="inner_grid">
                    <h4>HGV,PCV,D4 driver medical</h4>
                    <button type="button" onclick="location.href='hgv_pcv.html'">Details</button>
                </div>
            </div>
            <div class="Price_grid_item">
                <div>
                    <h3>£50</h3>
                </div>
                <div class="inner_grid">
                    <h4>Taxi driver medical</h4>
                    <button type="button" onclick="location.href='taxi_driver.html'">Details</button>
                </div>
            </div>
            <div class="Price_grid_item">
                <div>
                    <h3>£75</h3>
                </div>
                <div class="inner_grid">
                    <h4>ML5 seafarer medical</h4>
                    <button type="button" onclick="location.href='ml5_seafarer.html'">Details</button>
                </div>
            </div>
            <div class="Price_grid_item">
                <div>
                    <h3>£75</h3>
                </div>
                <div class="inner_grid">
                    <h4>National motor sports medical</h4>
                    <button type="button" onclick="location.href='motor_sports.html'">Details</button>
                </div>
            </div>
            <div class="Price_grid_item">
                <div>
                    <h3>£75</h3>
                </div>
                <div class="inner_grid">
                    <h4>Health and wellbeing check</h4>
                    <button type="button" onclick="location.href='wellbeing_check.html'">Details</button>
                </div>
            </div>
            <div class="Price_grid_item">
                <div>
                    <h3>£30</h3>
                </div>
                <div class="inner_grid">
                    <h4>ECG</h4>
                    <button type="button" onclick="location.href='ecg.html'">Details</button>
                </div>
            </div>
            <div class="Price_grid_item">
                <div>
                    <h3>£15</h3>
                </div>
                <div class="inner_grid">
                    <h4>Blood sugar check</h4>
                    <button type="button" onclick="location.href='blood_sugar.html'">Details</button>
                </div>
            </div>
            <div class="Price_grid_item">
                <div>
                    <h3>£15</h3>
                </div>
                <div class="inner_grid">
                    <h4>Body fat and composition check</h4>
                    <button type="button" onclick="location.href='body_fat_analysis.html'">Details</button>
                </div>
            </div>
        </div>
    </section>

    <!--Testimonials-->
    <section class="container">
        <div class="slider-main">
            <div class="slider-head">
                <h1>What Our Clients Say</h1>
            </div>
            <div class="slider-container">
                <div class="slider">
                    <div class="slide">
                        <div class="slide-content">
                            <img src="Images/avatar1.png" alt="Client avatar">
                            <h2>Alex M.</h2>
                            <p>"CityHealthCheck made getting my blood tests easy and hassle-free! Booking was smooth,
                                and
                                the results were delivered promptly and professionally. Highly recommend!"</p>
                            <button class="read-more-btn">Read more</button>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <img src="Images/avatar2.png" alt="Client avatar">
                            <h2>Sarah K.</h2>
                            <p>"Efficient and reliable! CityHealthCheck made accessing my results easy and stress-free.
                                I’m
                                more in control of my health now!"</p>
                            <button class="read-more-btn">Read more</button>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <img src="Images/avatar3.png" alt="Client avatar">
                            <h2>Michael J.</h2>
                            <p>"The staff put me at ease during my tests. They were knowledgeable and patient, making it
                                a
                                positive experience. Thankful for the care I received!"</p>
                            <button class="read-more-btn">Read more</button>
                        </div>
                    </div>
                </div>
                <button class="prev-btn">&#10094;</button>
                <button class="next-btn">&#10095;</button>
            </div>
        </div>
    </section>
    
    <!-- Popup -->
    <div class="popup" id="popup">
        <h3>Learn More</h3>
        <p>To read more, visit our social media platforms:</p>
        <div class="footer_social">
            <a href="#"><i class="fa-brands fa-facebook social"></i></a>
            <a href="#"><i class="fa-brands fa-twitter social"></i></a>
            <a href="#"><i class="fa-sharp fa-solid fa-envelope social"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram social"></i></a>
        </div>
        <br><br>
        <button id="closePopup">Close</button>
    </div>
    <?php include 'footer.php'; ?>
    <script src="city_script.js"></script>
</body>

</html>