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
        .hero { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1487958449943-2429e8be8625?auto=format&fit=crop&q=80&w=1200'); height: 40vh; display: flex; align-items: center; justify-content: center; color: white; text-align: center; background-size: cover; background-position: center; }
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
    <div class="hero"><div><h1>CE Department</h1><p>Designing Sustainable Infrastructure for a Modern World</p></div></div>
    <div class="container">

    <?php 
include('db.php'); 
$dept = 'CE'; // Change this per file (e.g., 'BBA', 'IT', etc.)
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
    <div class="course-card"><h3>Structural Analysis</h3><p><strong>Focus:</strong> Stability.</p><p><strong>Needed For:</strong> Skyscrapers.</p><p><strong>Builds:</strong> Material safety sense.</p></div>
    <div class="course-card"><h3>Geotechnical Eng</h3><p><strong>Focus:</strong> Soil mechanics.</p><p><strong>Needed For:</strong> Foundations.</p><p><strong>Builds:</strong> Site assessment skills.</p></div>
    <div class="course-card"><h3>Hydraulics</h3><p><strong>Focus:</strong> Fluid flow.</p><p><strong>Needed For:</strong> Dam construction.</p><p><strong>Builds:</strong> Resource planning.</p></div>
    <div class="course-card"><h3>Surveying</h3><p><strong>Focus:</strong> Land mapping.</p><p><strong>Needed For:</strong> Road design.</p><p><strong>Builds:</strong> Spatial accuracy.</p></div>
    <div class="course-card"><h3>Transportation</h3><p><strong>Focus:</strong> Traffic flow.</p><p><strong>Needed For:</strong> Urban planning.</p><p><strong>Builds:</strong> Logistical strategy.</p></div>
    <div class="course-card"><h3>Environmental Eng</h3><p><strong>Focus:</strong> Waste control.</p><p><strong>Needed For:</strong> Smart cities.</p><p><strong>Builds:</strong> Ecological responsibility.</p></div>
    <div class="course-card"><h3>Construction Mgmt</h3><p><strong>Focus:</strong> Budget/Timelines.</p><p><strong>Needed For:</strong> Large projects.</p><p><strong>Builds:</strong> Leadership discipline.</p></div>
</div> -->
    </div>
    <footer><p>&copy; 2026 AM University | Powered by AM</p></footer>
</body>
</html>