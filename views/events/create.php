<!-- File: admin/events/create.php -->
<?php
// Include database connection
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    // Insert event into database
    $sql = "INSERT INTO events (title, date, description) VALUES ('$title', '$date', '$description')";
    if (mysqli_query($conn, $sql)) {
        echo "Event created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Event</title>
</head>
<body>
    <h1>Create New Event</h1>
    <form method="POST" action="">
        <label for="title">Title:</label>
        <input type="text" name="title" required><br>

        <label for="date">Date:</label>
        <input type="date" name="date" required><br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br>

        <input type="submit" value="Create Event">
    </form>
</body>
</html>
