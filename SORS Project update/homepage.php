<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AM University - Simple & Clean</title>
    <style>
        :root {
            --primary-color: #1c4b54; 
            --accent-color: #d4af37;  
            --text-light: #ffffff;
            --text-dark: #333;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0; 
            padding: 0; 
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            color: #001d3d;
            padding-top: 110px; 
        }

        /* --- FIXED NAVIGATION SECTION --- */
        .nav-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .top-bar {
            background: #001d3d;
            color: white;
            padding: 8px 5%;
            font-size: 14px;
            font-weight: 500;
        }

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

        nav a:hover { color: var(--accent-color); }
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
        nav a:hover::after { width: 100%; }

        /* --- HERO SECTION --- */
        .hero {
            display: flex;
            align-items: center;
            padding: 60px 8%;
            flex-wrap: wrap;
            min-height: 90vh;
            
            background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), 
                        url('AM University.png') no-repeat center center/cover;
            flex-direction: row-reverse; 
        }

        .hero-text {
            flex: 1;
            min-width: 350px;
            padding-left: 50px; 
            text-align: left;
           
            background: rgba(255, 255, 255, 0.35); 
            padding: 40px;
            border-radius: 20px;
           
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .hero-text h1 {
            font-size: 48px;
            line-height: 1.1;
            margin-bottom: 25px;
            color: #000; 
            font-weight: 800;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.8);
        }

        .hero-text p {
            color: #111;
            margin-bottom: 35px;
            font-size: 1.25rem;
            line-height: 1.6;
            font-weight: 600;
            text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.5);
        }

        .btn {
            background: #00a859;
            color: white;
            padding: 16px 35px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            display: inline-block;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 168, 89, 0.4);
        }

        /* --- IMAGE GRID --- */
        .hero-images {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            padding: 20px;
        }

        .img-box {
            width: 100%;
            height: 250px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            transition: var(--transition);
            border: 4px solid white;
        }

        .img-box:hover { transform: scale(1.05); }

        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .circle { border-radius: 50%; }
        .leaf-top { border-radius: 0 100px 100px 100px; }
        .leaf-bottom { border-radius: 100px 100px 0 100px; }

        /* --- FOOTER --- */
        footer {
            background: grey;
            color: black;
            padding: 40px;
            text-align: center;
        }

        @media (max-width: 900px) {
            .hero { flex-direction: column; text-align: center; padding: 20px; }
            .hero-text { padding: 25px; margin-top: 20px; padding-left: 25px; }
            .hero-text h1 { font-size: 32px; }
            .hero-images { order: 2; }
        }
    </style>
</head>
<body>

    <div class="nav-container">
        <div class="top-bar">
            <marquee behavior="scroll" direction="left">Notice: Classes will start soon. Stay tuned for further updates regarding the spring semester.</marquee>
        </div>

        <header>
           <h2 style="color: white; letter-spacing: 1px;">AM UNIVERSITY </h2>
            <nav>
                <a href="./Department/Department.php">Department</a>
                <a href="./Clubs/clubs.php">Clubs</a>
                <a href="./Events/Events.php">Events</a>
                <a href="./Facilities/Facilities.php">Facilities</a>
                <!-- <a href="#">Scholarship</a> -->
                <a href="./About_Us/About us.php">About Us</a>
            </nav>
        </header>
    </div>

    <main class="hero">
        <div class="hero-text">
            <p style="font-size: 50px; margin-bottom: 10px;">🎓</p>
            <h1>Build Your Future, Choose Your Course</h1>
            <p>"It always seems impossible until it's done." <br>— Nelson Mandela</p>
            <a href="newform.php" class="btn">Register Now</a>
        </div>

        <div class="hero-images">
            <div class="img-box circle">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWjhT4GQl2-iRzVlY3_5v9GIzqRKZ7KhTrQA&s" alt="Student">
            </div>
            <div class="img-box leaf-top">
                <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=400" alt="Student">
            </div>
            <div class="img-box leaf-bottom">
                <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=400" alt="Student">
            </div>
            <div class="img-box circle">
                <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=400" alt="Student">
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 University Student Union. All Rights Reserved.</p>
        <p>Powered by AM</p>
    </footer>

</body>
</html>