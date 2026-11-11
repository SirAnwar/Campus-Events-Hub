<?php
$contactMessage = "";
// Process and validate the contact form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST["fullname"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);
if ($fullname == "" || $email == "" || $message == "") {
    $contactMessage = "Please fill in all required fields.";
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $contactMessage = "Please enter a valid email address.";
}else {
    $contactMessage = "Message sent successfully.";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Campus Events Hub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "header.php"; ?>

    <main>
        <section>
            <h2>About Our Team</h2>
            <p>
                Campus Events Hub is a website designed to help students discover
                and register for upcoming university events.
            </p>

            <h3>Team Members</h3>
            <ul>
                <li>Abdulaziz Alalami</li>
                <li>Faisal Almalki</li>
                <li>Anwar Alassaf</li>
                <li>Mohamad Tarfan</li>
            </ul>
        </section>

        <section>
            <h2>Contact Us</h2>
            <p>
                If you have any questions, you can contact us at
                <strong>0542446746</strong> or use the form below to send us a message.
            </p>
            <?php if ($contactMessage != "") echo "<p>$contactMessage</p>"; ?>
            <form action="#" method="POST">
                <label for="fullname">Full Name:</label><br>
                <input type="text" id="fullname" name="fullname" required>
                <br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required>
                <br><br>

                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="5" cols="40" required></textarea>
                <br><br>

                <input type="submit" value="Send Message">
            </form>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>