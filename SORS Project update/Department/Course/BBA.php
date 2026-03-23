<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE Courses | AM University</title>
    <style>
        :root { --primary-color: #1c4b54; --accent-color: #d4af37; --bg-gray: #f8f9fa; --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Playfair Display', serif, 'Segoe UI'; }
        body { background-color: var(--bg-gray); color: #333; }
        header { background-color: var(--primary-color); padding: 15px 5%; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 10px rgba(0,0,0,0.15); }
        nav a { color: white; text-decoration: none; margin-left: 30px; font-size: 0.95rem; text-transform: uppercase; transition: var(--transition); }
        nav a:hover { color: var(--accent-color); }
        .hero { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=1200'); height: 40vh; display: flex; align-items: center; justify-content: center; color: white; text-align: center; background-size: cover; background-position: center; }
        .container { padding: 60px 10%; text-align: center; }
        .course-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px; margin-top: 40px; }
        .course-card { background: #d6d1d1; padding: 35px 20px; border-radius: 12px; transition: var(--transition); cursor: pointer; text-align: left; border-left: 5px solid var(--primary-color); }
        .course-card:hover { transform: translateY(-10px); background: var(--primary-color); color: white; border-left: 5px solid var(--accent-color); }
        .course-card h3 { color: var(--primary-color); margin-bottom: 15px; text-transform: uppercase; font-size: 1.3rem; }
        .course-card:hover h3 { color: var(--accent-color); }
        .course-card p { margin-bottom: 8px; font-size: 0.95rem; line-height: 1.4; }
        .course-card strong { color: var(--primary-color); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; }
        .course-card:hover strong { color: var(--accent-color); }
        footer { background: #333; color: white; padding: 40px; text-align: center; margin-top: 50px; }
    </style>
</head>
<body>
    <header>
        <h2 style="color: white;">AM UNIVERSITY</h2>
        <nav><a href="../homepage.php">Home</a><a href="../navhome.php">Department</a><a href="../Events/Events.php">Events</a></nav>
    </header>
    <div class="hero"><div><h1>BBA Department</h1><p>Cultivating Strategic Leadership and Entrepreneurial Spirit</p></div></div>
    <div class="container">

    <?php 
include('db.php'); 
$dept = 'BBA'; // Change this per file (e.g., 'BBA', 'IT', etc.)
?>

<div class="course-grid">
    <?php
    $query = "SELECT * FROM department_courses WHERE dept_code = '$dept'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="course-card">
                <h3><?php echo htmlspecialchars($row['course_name']); ?></h3>
                <p><strong>Focus:</strong> <?php echo htmlspecialchars($row['focus']); ?></p>
                <p><strong>Needed For:</strong> <?php echo htmlspecialchars($row['needed_for']); ?></p>
                <p><strong>Builds:</strong> <?php echo htmlspecialchars($row['builds']); ?></p>
            </div>
            <?php
        }
    } else {
        echo "<p>No courses found for this department.</p>";
    }
    ?>
</div>
      <!--  <div class="course-grid">
    <div class="course-card"><h3>Marketing Mgmt</h3><p><strong>Focus:</strong> Brand building.</p><p><strong>Needed For:</strong> Startup growth.</p><p><strong>Builds:</strong> Strategic empathy.</p></div>
    <div class="course-card"><h3>Financial Accounting</h3><p><strong>Focus:</strong> Fiscal reports.</p><p><strong>Needed For:</strong> Banking.</p><p><strong>Builds:</strong> Ethical precision.</p></div>
    <div class="course-card"><h3>Supply Chain</h3><p><strong>Focus:</strong> Global logistics.</p><p><strong>Needed For:</strong> E-commerce.</p><p><strong>Builds:</strong> Organizational flow.</p></div>
    <div class="course-card"><h3>Strategic Mgmt</h3><p><strong>Focus:</strong> Long-term vision.</p><p><strong>Needed For:</strong> CEO roles.</p><p><strong>Builds:</strong> Decision-making power.</p></div>
    <div class="course-card"><h3>Human Resources</h3><p><strong>Focus:</strong> Talent hiring.</p><p><strong>Needed For:</strong> Leadership.</p><p><strong>Builds:</strong> Interpersonal skills.</p></div>
    <div class="course-card"><h3>Business Statistics</h3><p><strong>Focus:</strong> Data trends.</p><p><strong>Needed For:</strong> Market research.</p><p><strong>Builds:</strong> Quantitative logic.</p></div>
    <div class="course-card"><h3>Entrepreneurship</h3><p><strong>Focus:</strong> New ventures.</p><p><strong>Needed For:</strong> Business owners.</p><p><strong>Builds:</strong> Resilience and vision.</p></div>
</div> -->
    </div>
    <footer><p>&copy; 2026 AM University | Powered by AM</p></footer>
</body>
</html>