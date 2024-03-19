<?php
// Include any necessary PHP files, configurations, and database connections here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking - Cable Car</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <!-- Same header as index.html -->
    </header>

    <section>
        <h2>Book Your Cable Car Tickets</h2>
        <!-- Booking form and content here -->
        <form action="process_booking.php" method="post">
            <label for="ticketQuantity">Number of Tickets:</label>
            <input type="number" id="ticketQuantity" name="ticketQuantity" min="1" required>
            <label for="rideDateTime">Date and Time:</label>
            <input type="datetime-local" id="rideDateTime" name="rideDateTime" required>
            <button type="submit">Book Now</button>
        </form>
    </section>

    <footer>
        <!-- Same footer as index.html -->
    </footer>
</body>
</html>
