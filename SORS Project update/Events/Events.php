<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AM UNIVERSITY EVENTS | Traditions & Celebrations</title>
    <style>
        /* --- CSS STYLES --- */
        :root {
            --primary-color: #1c4b54; /* Dark Teal */
            --accent-color: #d4af37;  /* Gold accent */
            --text-light: #ffffff;
            --text-dark: #333;
            --transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Playfair Display', serif, 'Segoe UI', Arial;
        }

        body {
            background-color: #fdfaf5;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Fixed Navigation */
        header {
            background-color: var(--primary-color);
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            transition: all 0.4s ease;
        }

        header h2 {
            color: white;
            letter-spacing: 2px;
            font-size: 1.5rem;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 30px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 5px;
            transition: var(--transition);
        }

        nav a:hover {
            color: var(--accent-color);
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--accent-color);
            transition: 0.3s;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Hero Slider Section (5 Pictures) */
        .hero {
            position: relative;
            height: 80vh;
            width: 100%;
            margin-top: 0; /* Starts from top */
            overflow: hidden;
        }

        .slide {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
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
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.7));
        }

        .hero-text {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
        }

        .hero-text h1 {
            font-size: 4rem;
            margin-bottom: 10px;
            text-shadow: 2px 4px 15px rgba(0,0,0,0.7);
        }

        .hero-text p {
            font-size: 1.4rem;
            font-style: italic;
            color: var(--accent-color);
        }

        /* Events Section */
        .events-container {
            padding: 100px 10%;
            text-align: center;
        }

        .events-container h2 {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 60px;
            position: relative;
        }

        .events-container h2::after {
            content: '';
            width: 100px;
            height: 4px;
            background: var(--accent-color);
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .event-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        /* EVENT CARD DESIGN */
        .event-card {
            position: relative;
            height: 400px;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border-radius: 15px;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: var(--transition);
            z-index: 1;
        }

        .event-image-hover {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0; 
            transition: opacity 0.5s ease;
            z-index: 1;
        }

        .event-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.65);
            opacity: 0;
            z-index: 2;
            transition: opacity 0.5s ease;
        }

        .event-content {
            position: relative;
            z-index: 3;
            padding: 30px;
            transition: var(--transition);
        }

        .event-card h3 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .event-card p {
            font-size: 1.1rem;
            color: #555;
            font-weight: 500;
        }

        /* BIG HOVER EFFECT */
        .event-card:hover {
            transform: scale(1.15); /* Makes it bigger on hover */
            box-shadow: 0 30px 60px rgba(0,0,0,0.3);
            z-index: 50;
        }

        .event-card:hover .event-image-hover,
        .event-card:hover::before {
            opacity: 1;
        }

        .event-card:hover h3 {
            color: var(--accent-color);
            transform: translateY(-10px);
        }

        .event-card:hover p {
            color: white;
            transform: translateY(-10px);
        }

        /* Footer */
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

    <header id="mainHeader">
        <h2>AM UNIVERSITY EVENTS</h2>
        <nav>
            <a href="../homepage.php">Home</a>
              <a href="../Department/Department.php">Department</a>
            <a href="clubs.php">Clubs</a>
            <a href="../Facilities/Facilities.php">Facilities</a>
             <!-- <a href="#">Scholarship</a> -->
           <a href="../About_Us/About us.php">About Us</a>
        </nav>
    </header>

    <section class="hero" id="slider">
        <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=2070')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Celebrate Traditions</h1>
                <p>Bringing our campus together through vibrant events.</p>
            </div>
        </div>
        <div class="slide" style="background-image: url('https://www.shutterstock.com/image-vector/academic-excellence-top-performing-education-600nw-2308759929.jpg')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Academic Excellence</h1>
                <p>Knowledge sharing through seminars and workshops.</p>
            </div>
        </div>
        <div class="slide" style="background-image: url('https://www.bracu.ac.bd/sites/default/files/news-image/2023/Nov/RS%20cultural%20program4.jpg')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Cultural Harmony</h1>
                <p>Showcasing the spirit of youth and creativity.</p>
            </div>
        </div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?q=80&w=2070')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Spring Festivals</h1>
                <p>Welcoming the seasons with joy and color.</p>
            </div>
        </div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=2070')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Unforgettable Memories</h1>
                <p>Every event is a new story at AM University.</p>
            </div>
        </div>
    </section>

    <section class="events-container">
        <h2>Our Major Events</h2>
        <?php include('db.php'); ?>
<div class="event-grid">
    <?php
    $query = "SELECT * FROM events";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="event-card">
            <div class="event-image-hover" style="background-image: url('<?php echo $row['image_url']; ?>')"></div>
            <div class="event-content">
                <h3><?php echo $row['title']; ?></h3>
                <p><?php echo $row['subtitle']; ?></p>
            </div>
        </div>
    <?php } ?>
</div>

      <!--  <div class="event-grid">
            <div class="event-card">
                <div class="event-image-hover" style="background-image: url('https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=2070')"></div>
                <div class="event-content">
                    <h3>Seminar</h3>
                    <p>Academic discussions & Research</p>
                </div>
            </div>

            <div class="event-card">
                <div class="event-image-hover" style="background-image: url('https://www.aiub.edu/Files/Uploads/original/saraswatipujaobservedataiub2502202417.jpg')"></div>
                <div class="event-content">
                    <h3>Swarosshoti Puja</h3>
                    <p>Festival of Wisdom & Art</p>
                </div>
            </div>

            <div class="event-card">
                <div class="event-image-hover" style="background-image: url('https://thumbs.dreamstime.com/b/kolkata-india-may-iftar-party-kolkata-india-may-iftar-party-iftar-party-was-organised-aliah-university-149619966.jpg')"></div>
                <div class="event-content">
                    <h3>Iftar Party</h3>
                    <p>Community, Prayer & Togetherness</p>
                </div>
            </div>

            <div class="event-card">
                <div class="event-image-hover" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQezLtcAeE7TFcLFAHFTIT8xNqc1P4fFQCeIQ&s')"></div>
                <div class="event-content">
                    <h3>Pitha Utsob</h3>
                    <p>Traditional Bengali Winter Cakes</p>
                </div>
            </div>

            <div class="event-card">
                <div class="event-image-hover" style="background-image: url('https://www.shutterstock.com/editorial/image-editorial/M3zaUb45M2D0E83aMjI4NQ==/celebrating-coming-spring-boshonto-utshob-fine-arts-440nw-3558487a.jpg')"></div>
                <div class="event-content">
                    <h3>Bosonto Utsob</h3>
                    <p>Celebrating the Colors of Spring</p>
                </div>
            </div>

            <div class="event-card">
                <div class="event-image-hover" style="background-image: url('https://www.ewubd.edu/storage/app/uploads/public/64b/38e/707/64b38e707ac45150614462.jpg')"></div>
                <div class="event-content">
                    <h3>Cultural Program</h3>
                    <p>Music, Dance & Drama</p>
                </div>
            </div>
        </div>-->
    </section>

    <footer>
        <p>&copy; 2026 University Student Union. All Rights Reserved.</p>
        <center>Powered by AM</center>
    </footer>

    <script>
        /* --- SLIDER LOGIC --- */
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        setInterval(nextSlide, 5000); // Change image every 5 seconds

        /* --- HEADER SCROLL LOGIC --- */
        window.addEventListener('scroll', () => {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 100) {
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