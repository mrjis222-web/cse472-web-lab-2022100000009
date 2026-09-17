<?php

require "db.php";

$fullName = trim($_POST["full_name"] ?? "");
$studentId = trim($_POST["student_id"] ?? "");
$email = trim($_POST["email"] ?? "");
$department = trim($_POST["department"] ?? "");
$workshop = trim($_POST["workshop"] ?? "");
$expectation = trim($_POST["expectation"] ?? "");

if (
    $fullName === "" ||
    $studentId === "" ||
    $email === "" ||
    $department === "" ||
    $workshop === ""
) {
    die("Please complete all required fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}

$sql = "INSERT INTO registrations
        (full_name, student_id, email, department, workshop, expectation)
        VALUES
        (:full_name, :student_id, :email, :department, :workshop, :expectation)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":full_name" => $fullName,
    ":student_id" => $studentId,
    ":email" => $email,
    ":department" => $department,
    ":workshop" => $workshop,
    ":expectation" => $expectation
]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <h1>Student Workshop Registration System</h1>
</header>

<main>
    <div class="card">

        <h2>Registration Successful!</h2>

        <p>
            Thank you,
            <strong><?php echo htmlspecialchars($fullName); ?></strong>.
            Your registration has been saved successfully.
        </p>

        <p>
            <a href="index.php">Back to Registration Form</a>
        </p>

        <p>
            <a href="registrations.php">View All Registrations</a>
        </p>

    </div>
</main>

</body>
</html>