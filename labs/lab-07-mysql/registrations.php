<?php

require "db.php";

$stmt = $pdo->query(
    "SELECT id, full_name, student_id, email, department, workshop, created_at
     FROM registrations
     ORDER BY id DESC"
);

$registrations = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Registrations</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <h1>Student Workshop Registration System</h1>
</header>

<main>

    <div class="card">

        <h2>All Workshop Registrations</h2>

        <?php if (count($registrations) === 0): ?>

            <p>No registrations found.</p>

        <?php else: ?>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Workshop</th>
                        <th>Submitted</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($registrations as $registration): ?>

                        <tr>
                            <td>
                                <?php echo htmlspecialchars($registration["id"]); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($registration["full_name"]); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($registration["student_id"]); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($registration["email"]); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($registration["department"]); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($registration["workshop"]); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($registration["created_at"]); ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>

        <?php endif; ?>

        <br>

        <a href="index.php">Back to Registration Form</a>

    </div>

</main>

</body>
</html>