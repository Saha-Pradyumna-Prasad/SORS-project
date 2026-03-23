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

        /* Styling for the new buttons */
.dept-buttons {
    margin-top: 15px;
    display: flex;
    gap: 10px;
    justify-content: center;
}

.dept-btn {
    padding: 8px 12px;
    font-size: 0.75rem;
    text-transform: uppercase;
    text-decoration: none;
    background: var(--accent-color);
    color: var(--primary-color);
    border-radius: 4px;
    font-weight: bold;
    transition: background 0.3s ease;
}

.dept-btn:hover {
    background: #ffffff;
    color: #000;
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
           <h2 style="color: white; letter-spacing: 1px;">AM UNIVERSITY DEPARTMENT </h2>
            <nav>
                <a href="../homepage.php">Home</a>
                <!-- <a href="navhome.php">Department</a> -->
                <a href="../Clubs/clubs.php">Clubs</a>
                <a href="../Events/Events.php">Events</a>
                <a href="navshop.php">Facilities</a>
                 <!-- <a href="#">Scholarship</a> -->
               <a href="../About_Us/About us.php">About Us</a>
            </nav>
        </header>

    <section class="hero" id="slider">
        <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=2070&auto=format&fit=crop')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Academic Excellence Begins Here</h1>
                <p>Explore our diverse and dynamic departments.</p>

            </div>
        </div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Departments That Shape Careers</h1>
                <p>Knowledge, skills, and innovation combined.</p>

            </div>
        </div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1532094349884-543bc11b234d')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Learn. Research. Succeed.</h1>
                <p>Departments committed to academic growth.</p>

            </div>
        </div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1581091012184-5c8a0c5f9c65?q=80&w=2070&auto=format&fit=crop')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Engineering, Business & Science</h1>
            <p>Building expertise across multiple disciplines.</p>

            </div>
        </div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1523580846011-d3a5bc25702b')">
            <div class="slide-overlay"></div>
            <div class="hero-text">
                <h1>Your Academic Path Starts Here</h1>
                <p>7 Departments. Endless Opportunities.</p>

            </div>
        </div>
    </section>


    <?php include('db.php'); ?>

<section class="clubs-container">
    <h2>Available Departments</h2>
    
    <div class="club-grid">
        <?php
        // Fetch departments from the database
        $query = "SELECT * FROM departments";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="club-card">
                    <div class="club-image-hover" style="background-image: url('<?php echo $row['image_url']; ?>')"></div>
                    
                    <div class="club-content">
                        <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                        <p><?php echo htmlspecialchars($row['description']); ?></p>
                        
                        <div class="dept-buttons">
                            <a href="<?php echo $row['course_link']; ?>" class="dept-btn">Courses</a>
                            <a href="<?php echo $row['faculty_link']; ?>" class="dept-btn">Faculty</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No departments found.</p>";
        }
        ?>
    </div>
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