<?php
$id = isset($_GET["id"]) ? $_GET["id"] : 1;
// Store event details in an array
$events = [
    1 => [
    "name" => "Web Programming Workshop",
    "date" => "March 11, 2026",
    "location" => "Computer Lab 2",
    "time" => "11:30 AM - 1:00 PM",
    "instructor" => "Dr. Ali",
    "description" => "Join our Web Programming Workshop and learn HTML, CSS, and PHP. This workshop will help you learn how to build websites from scratch."
],
    2 => [
    "name" => "Programming Competition",
    "date" => "March 21, 2026",
    "location" => "Main Hall",
    "time" => "10:00 AM - 2:00 PM",
    "instructor" => "Dr. Ahmed",
    "description" => "Join our Programming Competition and test your coding and problem-solving skills in a friendly campus challenge."
],
    3 => [
    "name" => "Database Course",
    "date" => "March 26, 2026",
    "location" => "Room 105",
    "time" => "12:00 PM - 2:00 PM",
    "instructor" => "Dr. Sara",
    "description" => "Join our Database Course to learn the basics of databases, SQL, and how data is organized and managed."
],
];

$event = isset($events[$id]) ? $events[$id] : null;
// Check that the selected event exists
if ($event === null) {
    die("Event not found.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details - Campus Events Hub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include "header.php"; ?>

    <main>
        <article>
            <h2><?php echo htmlspecialchars($event["name"]); ?></h2>
            <img src="images/campus university event.png" alt="Web Programming Workshop" width="500">
            <p>
                <?php echo htmlspecialchars($event["description"]); ?>
            </p>

            <h3>Event Information</h3>
            <ul>
                <li><strong>Date:</strong> <?php echo htmlspecialchars($event["date"]); ?></li>
                <li><strong>Time:</strong> <?php echo htmlspecialchars($event["time"]); ?></li>
                <li><strong>Location:</strong> <?php echo htmlspecialchars($event["location"]); ?></li>
                <li><strong>Instructor:</strong> <?php echo htmlspecialchars($event["instructor"]); ?></li>
            </ul>

            <a href="register.php">Register Now</a>
        </article>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>