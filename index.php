<?php
require_once 'configFunction.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $table_number = $_POST['table_number'];
 $reservation_date = $_POST['reservation_date'];
 $reservation_time = $_POST['reservation_time'];


 $sql = "SELECT * FROM reservations WHERE table_number = ? AND reservation_date = ? AND reservation_time = ?";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("iss", $table_number, $reservation_date, $reservation_time);
 $stmt->execute();
 $result = $stmt->get_result();

 if ($result->num_rows > 0) {

 echo "The table is already reserved for the selected date and time.";
 } else {

 $sql = "INSERT INTO reservations (table_number, reservation_date, reservation_time, status) VALUES (?, ?, ?, 'booked')";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("iss", $table_number, $reservation_date, $reservation_time);
 $stmt->execute();

 }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
 <meta charset="UTF-8">
 <title>Table Reservation System</title>
 <link rel="stylesheet" href="style.css">

</head>
<body>
 <h1>Table Reservation</h1>
 <form method="post" action="">
 <label for="table_number">Table Number:</label>
 <input type="number" id="table_number" name="table_number" required>
 <label for="reservation_date">Date:</label>
 <input type="date" id="reservation_date" name="reservation_date" required>
 <label for="reservation_time">Time:</label>
 <input type="time" id="reservation_time" name="reservation_time" required>
 <button type="submit">Book</button>
 </form>
</body>
</html>