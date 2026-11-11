<?php
$message = "";
// Connect to the campus events database
$conn = new mysqli("localhost", "root", "", "campus_events");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Process the registration form after submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $studentid = trim($_POST["studentid"]);
    $email = trim($_POST["email"]);
    $event = $_POST["event"];
    // Validate required fields and email format
    if ($name == "" || $studentid == "" || $email == "") {
    $message = "Please fill in all required fields.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = "Please enter a valid email address.";
} else {
    $stmt = $conn->prepare("INSERT INTO registrations (name, studentid, email, event) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $studentid, $email, $event);
    $stmt->execute();
    $message = "Registration successful.";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Campus Events Hub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "header.php"; ?>

    <main>
        <section>
            <h2>Event Registration</h2>
            <p>
                Complete the form below to register for one of our campus events.
            </p>

            <?php if ($message != "") echo "<p>$message</p>"; ?>
            <form method="post">
                <label for="name">Full Name:</label><br>
                <input type="text" id="name" name="name" required>
                <br><br>

                <label for="studentid">Student ID:</label><br>
                <input type="text" id="studentid" name="studentid" required>
                <br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required>
                <br><br>

                <label for="event">Select Event:</label><br>
                <select id="event" name="event">
                    <option value="Web Programming Workshop">Web Programming Workshop</option>
                    <option value="Programming Competition">Programming Competition</option>
                    <option value="Database Course">Database Course</option>
                </select>
                <br><br>

                <input type="submit" value="Register">
            </form>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>