<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Faculty | AM University</title>
    <style>
        :root { --primary-color: #1c4b54; --accent-color: #d4af37; --bg-gray: #f8f9fa; --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Playfair Display', serif, 'Segoe UI'; }
        body { background-color: var(--bg-gray); }
        header { background-color: var(--primary-color); padding: 15px 5%; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 10px rgba(0,0,0,0.15); }
        nav a { color: white; text-decoration: none; margin-left: 30px; font-size: 0.9rem; text-transform: uppercase; transition: 0.3s; }
        nav a:hover { color: var(--accent-color); }
        .dept-hero { background: linear-gradient(rgba(28, 75, 84, 0.8), rgba(28, 75, 84, 0.8)), url('https://images.unsplash.com/photo-1510511459019-5dee2c147f58?w=1200'); background-size: cover; background-position: center; color: white; padding: 80px 5%; text-align: center; }
        .faculty-container { max-width: 1200px; margin: 60px auto; padding: 0 20px; }
        .faculty-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .faculty-card { background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 20px rgba(0,0,0,0.05); transition: var(--transition); text-align: center; border-bottom: 4px solid transparent; }
        .faculty-card:hover { transform: translateY(-10px); border-bottom: 4px solid var(--accent-color); }
        .image-holder { width: 100%; height: 280px; overflow: hidden; }
        .image-holder img { width: 100%; height: 100%; object-fit: cover; }
        .info { padding: 25px; }
        .info h3 { color: var(--primary-color); margin-bottom: 5px; }
        .info span { color: var(--accent-color); font-weight: bold; display: block; margin-bottom: 10px; }
        footer { background: grey; color: black; padding: 40px; text-align: center; margin-top: 50px; }
    </style>
</head>
<body>
    <header>
        <h2 style="color: white;">AM UNIVERSITY</h2>
        <nav><a href="../../homepage.php">Home</a><a href="Department.php">Department</a><a href="Facilities.php">Facilities</a></nav>
    </header>
    <div class="dept-hero"><h1>Department of IT</h1><p>Coding, AI, and Cybersecurity</p></div>
    <div class="faculty-container">
        <?php 
include('db.php'); 
// Set this to match the dept_code in the SQL table for each file
$dept_code = 'IT'; // Use 'BBA', 'CE', 'EEE', 'ENG', 'IT', or 'PHA' for other files
?>

<div class="faculty-grid">
    <?php
    $query = "SELECT * FROM faculty WHERE dept_code = '$dept_code'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="faculty-card">
                <div class="image-holder">
                    <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="Faculty Image">
                </div>
                <div class="info">
                    <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                    <span><?php echo htmlspecialchars($row['designation']); ?></span>
                    <p><?php echo htmlspecialchars($row['specialization']); ?></p>
                </div>
            </div>
            <?php
        }
    } else {
        echo "<p>No faculty members found for this department.</p>";
    }
    ?>
</div>
      <!--  <div class="faculty-grid">
            <div class="faculty-card"><div class="image-holder"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400"></div><div class="info"><h3>Dr. Tim Berners-Lee</h3><span>Head of Dept</span><p>World Wide Web & Networking.</p></div></div>
            <div class="faculty-card"><div class="image-holder"><img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400"></div><div class="info"><h3>Dr. Radia Perlman</h3><span>Professor</span><p>Network Protocol Design.</p></div></div>
            <div class="faculty-card"><div class="image-holder"><img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400"></div><div class="info"><h3>Dr. Marc Andreessen</h3><span>Associate Professor</span><p>Internet Infrastructure.</p></div></div>
            <div class="faculty-card"><div class="image-holder"><img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400"></div><div class="info"><h3>Dr. Anita Borg</h3><span>Assistant Professor</span><p>Digital Security & Equity.</p></div></div>
            <div class="faculty-card"><div class="image-holder"><img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400"></div><div class="info"><h3>Dr. Steve Wozniak</h3><span>Senior Lecturer</span><p>Hardware & System Architecture.</p></div></div>
        </div> -->
    </div>
    <footer><p>&copy; 2026 AM University. All Rights Reserved.</p></footer>
</body>
</html>