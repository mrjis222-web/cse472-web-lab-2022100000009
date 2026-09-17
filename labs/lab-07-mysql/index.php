<?php
$pageTitle = "Workshop Registration";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <h1>Student Workshop Registration System</h1>
    <p>Register for your preferred workshop</p>
</header>

<main>
    <div class="card">

        <h2>Workshop Registration Form</h2>

        <form action="save_registration.php" method="POST">

            <label for="full_name">Full Name</label>
            <input type="text" id="full_name" name="full_name" required>

            <label for="student_id">Student ID</label>
            <input type="text" id="student_id" name="student_id" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="department">Department</label>
            <select id="department" name="department" required>
                <option value="">Select Department</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="BBA">BBA</option>
                <option value="English">English</option>
            </select>

            <label for="workshop">Workshop</label>
            <select id="workshop" name="workshop" required>
                <option value="">Select Workshop</option>
                <option value="PHP and MySQL Basics">PHP and MySQL Basics</option>
                <option value="Web Development">Web Development</option>
                <option value="JavaScript Basics">JavaScript Basics</option>
            </select>

            <label for="expectation">Expectation</label>
            <textarea id="expectation" name="expectation" rows="5"></textarea>

            <button type="submit">Register</button>

        </form>

        <br>

        <a href="registrations.php">View All Registrations</a>

    </div>
</main>

</body>
</html>