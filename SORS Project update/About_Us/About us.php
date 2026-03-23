<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Horizon State University</title>
    <style>
        :root {
            --primary-color: #1c4b54; 
            --accent-color: #d4af37;  
            --text-light: #ffffff;
            --text-dark: #333;
            --transition: all 0.3s ease;
        }

        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            line-height: 1.6;
            color: var(--text-dark);
            background-color: #f4f4f4;
        }

        /* Navigation */
        header:not(.hero) {
            background-color: var(--primary-color);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            position: sticky;
            top: 0;
            z-index: 1000;
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

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 33, 71, 0.7), rgba(0, 33, 71, 0.7)), 
                        url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP11dBVqZjKr8zoXDY3d0X8efAMHRUIqIbYw&s');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            letter-spacing: 2px;
        }

        /* Container */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Mission & Vision Section */
        .content-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .content-section h2 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .contact-card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: var(--transition);
            border-bottom: 4px solid var(--accent-color);
        }

        .contact-card:hover {
            transform: translateY(-5px);
        }

        .contact-card h4 {
            margin-bottom: 10px;
            color: var(--primary-color);
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .contact-card a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: bold;
            font-size: 1.1rem;
        }

        .contact-card a:hover {
            color: var(--accent-color);
        }

        /* Stats Section */
        .stats-bar {
            display: flex;
            justify-content: space-around;
            background: var(--primary-color);
            color: white;
            padding: 60px 0;
            text-align: center;
            margin: 40px 0;
        }

        .stat-item h3 {
            font-size: 2.8rem;
            margin-bottom: 5px;
            color: var(--accent-color);
        }

        /* Interaction Section */
        .btn-toggle {
            background: var(--accent-color);
            color: var(--primary-color);
            padding: 12px 25px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
            transition: var(--transition);
        }

        .btn-toggle:hover {
            background: #b8962d;
            transform: scale(1.05);
        }

        #history-text {
            display: none;
            margin-top: 25px;
            padding: 25px;
            background: #fff;
            border-left: 5px solid var(--accent-color);
            border-radius: 0 8px 8px 0;
            text-align: left;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .content-section { grid-template-columns: 1fr; }
            .stats-bar { flex-direction: column; gap: 30px; }
            .hero h1 { font-size: 2.5rem; }
            nav { display: none; } /* Simplified for mobile */
        }

       footer {
            background: grey;
            color: black;
            padding: 40px;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <h2 style="color: white; letter-spacing: 1px;">AM UNIVERSITY</h2>
        <nav>
            <a href="../homepage.php">Home</a>
            <a href="">Department</a>
            <a href="clubs.php">Clubs</a>
            <a href="">Facilities</a>
                 <a href="../Scholarship/Scholarship.php">Scholarship</a>
            <!-- <a href="../About_Us/About us.php">About Us</a> -->
        </nav>
    </header>

    <div class="hero">
        <div>
            <h1>About Our University</h1>
            <p>Empowering Minds, Shaping Futures Since 1924</p>
        </div>
    </div>

    <div class="container">
        <section class="content-section">
            <div>
                <h2>Our Mission</h2>
                <p>AM University strives to provide a transformative educational experience. We focus on interdisciplinary research and fostering a global perspective to solve the world's most pressing challenges.</p>
            </div>
            <div>
                <h2>Our Vision</h2>
                <p>To be recognized globally as a leader in academic excellence and a catalyst for social and economic progress through innovation and inclusivity.</p>
            </div>
        </section>

        <section style="text-align: center; margin-bottom: 60px;">
            <h2>The AM Legacy</h2>
            <p style="margin: 20px 0; color: #666;">Curious about how we started? Click the button below to explore our century-long journey.</p>
            <button class="btn-toggle" onclick="toggleHistory()">Read Our History</button>
            
            <div id="history-text">
                <p>Founded in 1924 as a Technical Institute, Horizon State has survived economic shifts and technological revolutions. Today, we stand as a beacon of modern education, integrating AI, renewable energy studies, and classical humanities into a singular, cohesive curriculum.</p>
            </div>
        </section>

        <section id="contact">
            <h2 style="text-align: center; color: var(--primary-color);">Get In Touch</h2>
            <p style="text-align: center; color: #666;">Have questions? Reach out to our administration or follow us on social media.</p>
            
            <div class="contact-grid">
                <div class="contact-card">
                    <h4>Admissions Office</h4>
                    <a href="#">+8801890255384</a>
                </div>
                <div class="contact-card">
                    <h4>General Inquiry</h4>
                    <a href="#">+8801811122154</a>
                </div>
                <div class="contact-card">
                    <h4>Main Facebook</h4>
                    <a href="https://www.facebook.com/saha.pradyumna.prasad" target="_blank">Saha Pradyumna Prasad</a>
                </div>
                <div class="contact-card">
                    <h4>Other Facebook</h4>
                    <a href="https://www.facebook.com/manik.halder.208056" target="_blank">Manik Halder</a>
                </div><br>
                <div class="contact-card">
                    <h4>Main Email</h4>
                    <a href="#" target="_blank">ankur2003.8@gmail.com</a>
                </div>
                <div class="contact-card">
                    <h4>Another Email</h4>
                    <a href="#" target="_blank">manik20004@gmail.com</a>
                </div>
            </div>
        </section>
    </div>

    <div class="stats-bar">
        <div class="stat-item">
            <h3 class="counter" data-target="25000">0</h3>
            <p>Students</p>
        </div>
        <div class="stat-item">
            <h3 class="counter" data-target="150">0</h3>
            <p>Programs</p>
        </div>
        <div class="stat-item">
            <h3 class="counter" data-target="92">0</h3>
            <p>Employment Rate %</p>
        </div>
    </div>

  <footer>
        <p>&copy; 2026 University Student Union. All Rights Reserved.</p>
        <p>Powered by AM</p>
    </footer>

    <script>
        // Toggle History Visibility
        function toggleHistory() {
            const historyDiv = document.getElementById('history-text');
            const btn = document.querySelector('.btn-toggle');
            
            if (historyDiv.style.display === 'block') {
                historyDiv.style.display = 'none';
                btn.textContent = 'Read Our History';
            } else {
                historyDiv.style.display = 'block';
                btn.textContent = 'Show Less';
            }
        }

        // Animated Counters
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        // Start animation when stats are in view
        const animateStats = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        };

        // Simple trigger on load
        window.onload = animateStats;
    </script>
</body>
</html>