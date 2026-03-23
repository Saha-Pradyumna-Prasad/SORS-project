<?php
// Basic PHP processing
$success = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';

    if (!empty($fname) && !empty($lname) && !empty($email)) {
        $success = "✅ Registration submitted successfully!";
    } else {
        $success = "❌ Please fill in all required fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Registration Form</title>

<style>
body {
    font-family: "Segoe UI", Arial, sans-serif;
    background: #f2f6fc;
    margin: 0;
    padding: 20px;
}
.container {
    max-width: 900px;
    background: #ffffff;
    margin: auto;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
h1 {
    text-align: center;
    color: #1e3a8a;
    margin-bottom: 20px;
}
h2 {
    background: #e5edff;
    padding: 10px;
    border-radius: 5px;
    color: #1e3a8a;
    font-size: 18px;
}
.row {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
    flex-wrap: wrap;
}
.field {
    flex: 1;
    display: flex;
    flex-direction: column;
}
label {
    font-size: 14px;
    margin-bottom: 5px;
}
input, select, textarea {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #cbd5e1;
}
textarea { resize: vertical; }
.check-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
}
.submit-btn {
    margin-top: 25px;
    text-align: center;
}
button {
    background: #2563eb;
    color: white;
    border: none;
    padding: 12px 30px;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
}
button:hover { background: #1e40af; }
.msg { text-align: center; font-weight: bold; margin-bottom: 15px; color: green; }
.error { color: red; }
</style>
</head>

<body>

<div class="container">
<h1>STUDENT REGISTRATION FORM</h1>

<?php if ($success != ""): ?>
<div class="msg <?php echo strpos($success,'❌') !== false ? 'error' : ''; ?>">
    <?php echo $success; ?>
</div>
<?php endif; ?>

<form method="POST" enctype="multipart/form-data">

<!-- BASIC INFORMATION (UNCHANGED) -->
<h2>Basic Information</h2>
<div class="row">
    <div class="field">
        <label>Name *</label>
        <input type="text" name="fname">
    </div>
    
    
</div>

<div class="row">
    <div class="field">
        <label>Email *</label>
        <input type="email" name="email">
    </div>
</div>

<!-- ACADEMIC BACKGROUND -->
<h2>Academic Background</h2>
<div class="row">
    <div class="field">
        <label>School Name(SSC)*</label>
        <input type="text" name="schoolssc">
        <label>Passing year(SSC)*</label>
        <input type="number" name="yearssc">
         <label>GPA(SSC)*</label>
        <input type="number" name="sscgpa">
    </div>
    <div class="field">
        <label>College Name(HSC)*</label>
        <input type="text" name="schoolhsc">
        <label>Passing year(HSC)*</label>
        <input type="number" name="yearhsc">
         <label>GPA(HSC)*</label>
        <input type="number" name="hscgpa">
    </div>
</div>
<div class="row">
    <div class="field">
        <label>SSC Certificate*</label>
        <input type="file" name="ssccertificate">
    </div>

    <div class="field">
        <label>HSC Certificate*</label>
        <input type="file" name="hsccertificate">
    </div>
   
</div>
<div class="row">
<div class="field">
        <label>SSC Marksheet* </label>
        <input type="file" name="sscmarksheet">
    </div>

    <div class="field">
        <label>HSC Marksheet*</label>
        <input type="file" name="hscmarksheet">
    </div>
</div>


<div class="row">
    <div class="field">
        <label>Achievements</label>
        <input type="file" name="cv">
    </div>
</div>

<div class="row">
    <div class="field">
        <label>Other Extra Curricular Activities</label>
        <input type="text" name="activities">
    </div>
</div>

<label>Extra Curricular Participation</label>
<div class="check-grid">
<label><input type="checkbox" name="participation[]"> Student Council</label>
<label><input type="checkbox" name="participation[]"> Club / Organization</label>
<label><input type="checkbox" name="participation[]"> Class Representative</label>
<!-- <label><input type="checkbox" name="participation[]"> Varsity Player</label> -->
<label><input type="checkbox" name="participation[]"> Others</label>
</div>

<!-- RESOURCES -->
<!-- <h2>Resources Available</h2>
<div class="check-grid">
<!-- <label><input type="checkbox" name="resources[]"> Car / Transportation</label> -->
<!-- <label><input type="checkbox" name="resources[]"> Printer</label>
<label><input type="checkbox" name="resources[]"> Laptop</label>
<label><input type="checkbox" name="resources[]"> Event Venue / House</label>
<label><input type="checkbox" name="resources[]"> LCD Projector</label>
</div> --> -->

<!-- SKILLS -->
<h2>Skills / Talents</h2>
<div class="check-grid">
<label><input type="checkbox"> Acting</label>
<label><input type="checkbox"> Calculating</label>
<label><input type="checkbox"> Debating</label>
<label><input type="checkbox"> Photography</label>
<label><input type="checkbox"> Programming</label>
<label><input type="checkbox"> Writing</label>
<label><input type="checkbox"> Dancing</label>
<label><input type="checkbox"> Drawing</label>
<label><input type="checkbox"> Singing</label>
<label><input type="checkbox"> Others</label>
</div>

<!-- SPORTS -->
<h2>Sports</h2>
<div class="check-grid">
<label><input type="checkbox"> Badminton</label>
<label><input type="checkbox"> Soccer</label>
<label><input type="checkbox"> Swimming</label>
<label><input type="checkbox"> Volleyball</label>
<label><input type="checkbox"> Basketball</label>
<label><input type="checkbox"> Chess</label>
<label><input type="checkbox"> Table Tennis</label>
<label><input type="checkbox"> Tennis</label>
<label><input type="checkbox"> Others</label>
</div>

<!-- OTHER DETAILS -->
<h2>Other Details</h2>
<div class="row">
    <div class="field">
        <label>Interests</label>
        <textarea name="interests"></textarea>
    </div>
</div>

<div class="row">
    <div class="field">
        <label>Estimate Family Monthly Income</label>
        <select name="income">
            <option>Please Select</option>
            <option>Below 20,000</option>
            <option>20,000 – 50,000</option>
            <option>50,000 – 100,000</option>
            <option>Above 100,000</option>
        </select>
    </div>
</div>

<label>Do You Have Any Scholarship?</label><br>
<label><input type="radio" name="scholarship"> Yes</label>
<label><input type="radio" name="scholarship"> No</label>

<br><br>
<label>Do You Plan To Shift To Another Department?</label><br>
<label><input type="radio" name="shift"> Yes</label>
<label><input type="radio" name="shift"> No</label>

<div class="row">
    <div class="field">
        <label>First Choice Department*</label>
        <select name="income">
            <option>Please Select</option>
            <option>CSE</option>
            <option>CE</option>
            <option>PHARMACY</option>
            <option>BBA</option>
            <option>LAW</option>
            <option>EEE</option>
            <option>ENGLISH</option>
            <option>IT</option>
        </select>
    </div>
</div>

<!-- Department -->
<h2>Choices for shifted department</h2>
<div class="check-grid">
<label><input type="checkbox"> CSE</label>
<label><input type="checkbox"> CE</label>
<label><input type="checkbox"> PHARMACY</label>
<label><input type="checkbox"> BBA</label>
<label><input type="checkbox"> LAW</label>
<label><input type="checkbox"> EEE</label>
<label><input type="checkbox"> ENGLISH</label>
<label><input type="checkbox"> IT</label>
</div>

<div class="row">
    <div class="field">
        <label>Plan After Graduation</label>
        <select>
            <option>Please Select</option>
            <option>Higher Studies</option>
            <option>Job</option>
            <option>Business</option>
        </select>
    </div>
</div>

<div class="submit-btn">
    <button type="submit">Submit Registration</button>
</div>

</form>
</div>

</body>
</html>
