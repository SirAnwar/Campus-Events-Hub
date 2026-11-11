<?php
// Connect to the campus events database
$conn = new mysqli("localhost", "root", "", "campus_events");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Read all stored registrations
$result = $conn->query("SELECT * FROM registrations");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrations - Campus Events Hub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "header.php"; ?>

<main>
    <section>
        <h2>Student Registrations</h2>
        <p>The table below shows students who have registered for campus events.</p>

        <table>
            <tr>
                <th>Full Name</th>
                <th>Student ID</th>
                <th>Email</th>
                <th>Selected Event</th>
            </tr>
            <!-- Display each stored registration -->
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row["name"]); ?></td>
                    <td><?php echo htmlspecialchars($row["studentid"]); ?></td>
                    <td><?php echo htmlspecialchars($row["email"]); ?></td>
                    <td><?php echo htmlspecialchars($row["event"]); ?></td>
                </tr>
            <?php } ?>

        </table>
    </section>
</main>

<?php include "footer.php"; ?>

</body>
</html>