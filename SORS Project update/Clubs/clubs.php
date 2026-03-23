<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AM UNIVERSITY CLUBS | Excellence in Diversity</title>
    <style>
        /* --- CSS STYLES --- */
        :root {
            --primary-color: #1c4b54; /* Dark Teal */
            --accent-color: #d4af37;  /* Gold accent */
            --text-light: #ffffff;
            --text-dark: #333;
            /* Using a snappy cubic-bezier for a pop effect */
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Playfair Display', serif, 'Segoe UI', Arial;
        }

        body {
            background-color: #f8f9fa;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Navigation */
            header {
            background-color: var(--primary-color);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

         nav {
            display: flex;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 30px;
            font-size: 0.95rem;
            font-weight: 500;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 5px;
            transition: var(--transition);
        }

        /* Hover আন্ডারলাইন ইফেক্ট */
        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--accent-color);
            transition: var(--transition);
        }

        nav a:hover {
            color: var(--accent-color);
        }

        nav a:hover::after {
            width: 100%;
        }
        /* Hero Slider Section */
        .hero {
            position: relative;
            height: 75vh;
            width: 100%;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1.2s ease-in-out;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.45);
        }

        .hero-text {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            margin-bottom: 15px;
            text-shadow: 2px 4px 10px rgba(0,0,0,0.6);
            letter-spacing: 2px;
        }

        .hero-text p {
            font-size: 1.2rem;
            font-style: italic;
        }

        /* Clubs Section */
        .clubs-container {
            padding: 100px 10%;
            text-align: center;
        }

        .clubs-container h2 {
            font-size: 2.8rem;
            color: var(--primary-color);
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }

        .clubs-container h2::after {
            content: '';
            width: 80px;
            height: 4px;
            background: var(--accent-color);
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .club-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        /* UPDATED HOVER SECTION CODE */
        .club-card {
            
            position: relative;
            height: 350px;
            background: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* border: 1px solid black; */
            border-radius:10px;
            background-color: #d6d1d1;
            overflow: hidden; /* Ensures content stays inside during zoom */
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            /* Important: transition applied to the card itself */
            transition: var(--transition);
            z-index: 1;
        }

        .club-image-hover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0; /* Hidden by default */
            /* Removed transform: scale here */
            transition: opacity 0.4s ease;
            z-index: 1;
        }

        /* Dark overlay */
        .club-card::before {
            content: '';
            
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            opacity: 0;
            z-index: 2;
            transition: opacity 0.4s ease;
        }

        .club-content {
            position: relative;
            z-index: 3;
            padding: 20px;
            transition: all 0.4s ease;
        }

        .club-card h3 {
            font-size: 1.6rem;
            color: var(--primary-color);
            margin-bottom: 10px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .club-card p {
            font-size: 1rem;
            color: #666;
            font-style: italic;
            transition: all 0.3s ease;
        }

        /* HOVER STATES */
        
        /* 1. Zoom the entire card container */
        .club-card:hover {
            transform: scale(1.2); /* Scale up to 105% */
            box-shadow: 0 20px 40px rgba(0,0,0,0.2); /* Larger shadow for pop effect */
            z-index: 10; /* Ensure it overlaps neighbors */
            border-color: transparent;
        }

        /* 2. Fade in the image and overlay */
        .club-card:hover .club-image-hover,
        .club-card:hover::before {
            opacity: 1;
        }

        /* 3. Change text color and move slightly */
        .club-card:hover h3 {
            color: var(--accent-color);
            transform: translateY(-5px);
        }

        .club-card:hover p {
            color: white;
            transform: translateY(-5px);
        }

        /* Footer */
        footer {
            background: #808080; 
            color: #000000;
            padding: 50px 20px;
            text-align: center;
            margin-top: 60px;
            line-height: 1.8;
            font-weight: bold;
        }

       footer {
            background: grey;
            color: black;
            padding: 40px;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>

     <header>
           <h2 style="color: white; letter-spacing: 1px;">AM UNIVERSITY CLUBS </h2>
            <nav>
                <a href="../homepage.php">Home</a>
                  <a href="../Department/Department.php">Department</a>
                <!-- <a href="./Clubs/clubs.php">Clubs</a> -->
                <a href="../Events/Events.php">Events</a>
                <a href="navshop.php">Facilities</a>
                 <!-- <a href="#">Scholarship</a> -->
             <a href="../About_Us/About us.php">About Us</a>
            </nav>
        </header>

    <section class="hero" id="slider">
        <div class="slide active" style="background-image: url('https://infosci.arizona.edu/sites/default/files/styles/az_natural/public/2025-08/students-lounging-steps-hdr-sm.jpg.webp?itok=tTC-P0R2')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Campus Life Redefined</h1>
                <p>Find your passion, join a community.</p>
            </div>
        </div>
        <div class="slide" style="background-image: url('https://www.syracuse.edu/images/i6nlXeolL7USWI05jRi-5eK1je8=/6082/width-1300/Involvement-Fair-University-Union.jpg')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Lead the Future</h1>
                <p>Experience hands-on learning outside the classroom.</p>
            </div>
        </div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Build Connections</h1>
                <p>Friends today, colleagues tomorrow.</p>
            </div>
        </div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?q=80&w=2070')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Innovate & Create</h1>
                <p>Bringing ideas to life in every department.</p>
            </div>
        </div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=2070')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Your Journey Starts Here</h1>
                <p>6 Major Clubs. Infinite Opportunities.</p>
            </div>
        </div>
    </section>

    <section class="clubs-container">
        <h2>Our Distinguished Clubs</h2>
        

  <?php include('db.php'); ?>
<div class="club-grid">
    <?php
    $query = "SELECT * FROM clubs";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="club-card">
            <div class="club-image-hover" style="background-image: url('<?php echo $row['image_url']; ?>')"></div>
            <div class="club-content">
                <h3><?php echo $row['name']; ?></h3>
                <p><?php echo $row['description']; ?></p>
            </div>
        </div>
    <?php } ?>
</div>
       <!-- <div class="club-grid">
            
            <div class="club-card">
                <div class="club-image-hover" style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070')"></div>
                <div class="club-content">
                    <h3>Computer Club</h3>
                    <p>Coding, AI, and Cybersecurity</p>
                </div>
            </div>

            <div class="club-card">
                <div class="club-image-hover" style="background-image: url('https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?q=80&w=1973')"></div>
                <div class="club-content">
                    <h3>English Club</h3>
                    <p>Literature, Debate, and Creative Writing</p>
                </div>
            </div>

            <div class="club-card">
                <div class="club-image-hover" style="background-image: url('https://blog.globalbrigades.org/hubfs/Medical%20Club%20Ideas.jpg')"></div>
                <div class="club-content">
                    <h3>Medical Club</h3>
                    <p>Healthcare, First Aid, and Research</p>
                </div>
            </div>

            <div class="club-card">
                <div class="club-image-hover" style="background-image: url('https://csweb.rice.edu/sites/g/files/bxs4941/files/2020-08/yatesHSweb.jpg')"></div>
                <div class="club-content">
                    <h3>Robotics Club</h3>
                    <p>Engineering and Automation</p>
                </div>
            </div>

            <div class="club-card">
                <div class="club-image-hover" style="background-image: url('https://content.manhattan.edu/life/clubs-images/AIAA_768x576.jpg')"></div>
                <div class="club-content">
                    <h3>Architecture Club</h3>
                    <p>Design, Planning, and Urban Arts</p>
                </div>
            </div>

            <div class="club-card">
                <div class="club-image-hover" style="background-image: url('https://pxl-v6-stiracuk.terminalfour.net/fit-in/578x358/filters:quality(90)/filters:format(webp)/filters:no_upscale()/prod01/cdn/media/stirling/services/sports-centre/images/medium/Football-760X470.jpg')"></div>
                <div class="club-content">
                    <h3>Sports Club</h3>
                    <p>Athletics, Teamwork, and Competition</p>
                </div>
            </div> 
        </div>-->
    </section>

    <footer>
        <p>&copy; 2026 University Student Union. All Rights Reserved.</p>
        <center>Powered by AM</center>
    </footer>

    <script>
        /* --- JAVASCRIPT SLIDER --- */
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;
        const slideInterval = 4000; // Change image every 4 seconds

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        setInterval(nextSlide, slideInterval);

        /* --- HEADER SCROLL EFFECT --- */
        window.addEventListener('scroll', () => {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 80) {
                header.style.padding = '12px 5%';
                header.style.backgroundColor = 'rgba(28, 75, 84, 0.98)';
            } else {
                header.style.padding = '20px 5%';
                header.style.backgroundColor = '#1c4b54';
            }
        });
    </script>
</body>
</html>