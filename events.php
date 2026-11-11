<?php
// Store upcoming events in an array
$events = [
    [
        "name" => "Web Programming Workshop",
        "date" => "March 11, 2026",
        "location" => "Computer Lab 2"
    ],
    [
        "name" => "Programming Competition",
        "date" => "March 21, 2026",
        "location" => "Main Hall"
    ],
    [
        "name" => "Database Course",
        "date" => "March 26, 2026",
        "location" => "Room 105"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Campus Events Hub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "header.php"; ?>

    <main>
        <section>
            <h2>Upcoming Campus Events</h2>
            <p>
                Browse our upcoming events and choose one to learn more or register.
            </p>

            <table>
                <tr>
                    <th>Event</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Details</th>
                </tr>
                <!-- Display each event in the table -->
                <?php foreach ($events as $event) { ?>
<tr>
    <td><?php echo htmlspecialchars($event["name"]); ?></td>
    <td><?php echo htmlspecialchars($event["date"]); ?></td>
    <td><?php echo htmlspecialchars($event["location"]); ?></td>
    <td><a href="event.php?id=<?php echo array_search($event, $events) + 1; ?>">View</a></td>
</tr>
<?php } ?>
            </table>
        </section>

        <section>
            <h2>Event Highlights</h2>
            <img src="images/campus university event.png" alt="Campus Event" width="500">
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>