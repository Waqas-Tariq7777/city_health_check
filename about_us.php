<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="City_Style.css">
    <title>CityHealthCheck</title>
</head>

<body>
   <?php include 'header.php'; ?>
    <!--About Main-->
    <section class="main">
        <div class="overlay_about">
            <h1>About Us</h1>
        </div>
    </section>

    <!--About sub1-->
    <section class="container">
        <div class="about_sub1">
            <div class="about_text">
                <h2>Company</h2>
                <p>City Health Check Ltd has been a trusted provider of healthcare services since 2016. With extensive
                    experience in conducting HGV, PCV, D4, motor sports, ML5 seafarer and taxi driver medicals, we also
                    offer health and wellbeing assessments for life insurance clients, company employees and the general
                    public.</p>
            </div>
            <div class="about_img">
                <img src="Images/Health Logo.png" alt="Logo">
            </div>
        </div>
    </section>

    <!--About Sub2-->
    <section class="container">
        <div class="about_sub2">
            <div class="about_sub2_img">
                <img src="Images/about_avatar.png" alt="Logo">
            </div>
            <div class="about_text">
                <h2>Director</h2>
                <p><b>Dr.Laiba</b>, our director, brings a wealth of experience in health assessments and driver medicals. With a
                    career spanning in private healthcare and the NHS, <b>Dr Aweeza </b>currently serves at the Royal
                    Shrewsbury Hospital, ensuring top-quality care and expertise for our clients.</p>
            </div>
        </div>
    </section>

    <!--About Sub3-->
    <section class="container">
        <div class="about_sub3">
            <div class="about_text">
                <h2>Location</h2>
                <p>Conveniently located in Willenhall, Greater Birmingham, our clinic is just a five-minute drive from
                    Junction 10 of the M6. We conduct all medical assessments at our clinic, eliminating the need for
                    temporary locations and making it easier for clients to reach us for any necessary amendments to
                    their medical forms.</p>
                <button type="submit" onclick="location.href='contact_us.html'">Contact Us</button>
            </div>
            <div class="about_map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13364.756038693979!2d73.73692985932362!3d33.13039867628401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391feb8788d9385d%3A0x17454c855c6ac54a!2sBan%20Khurma!5e0!3m2!1sen!2s!4v1735571175638!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!--About Sub4-->
    <section class="container">
        <div class="about_sub4">
            <div class="about_sub4_img">
                <div class="about_sub4_img"><img src="Images/feature1.jpg" alt=""></div>
                <div class="about_sub4_img"><img src="Images/feature2.jpg" alt=""></div>
            </div>
            <div class="about_sub4_text">
                <h2>Our Features</h2>
                <h3>Why Choose Us</h3>
                <i class="fa fa-heartbeat"></i><span>Affordable Pricing:</span>
                <p>Our charges are 20% lower than those of other healthcare companies without compromising on the
                    quality of care.</p>
                <i class="fa fa-heartbeat"></i><span>Experienced Professionals:</span>
                <p>All assessments are carried out by doctors only. Our doctors are registered with the General Medical
                    Council and possess extensive experience in conducting medical assessments.</p>
                <i class="fa fa-heartbeat"></i><span>Comprehensive Services:</span>
                <p>Our standard medical assessments include a vision test, and we offer a range of additional tests such
                    as 12-Lead ECG, blood sugar test, urine test, peak flow test, ankle-brachial pressure index test,
                    hearing screening, stress level test and body fat analysis.</p>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ;?>
</body>

</html>