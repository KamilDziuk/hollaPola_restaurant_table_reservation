<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table reservation</title>
    <script scr="js/script.js" async></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form method="post" action="">
<label form="table_number">Number table</label>
<input type="number" id="table_number" name="table_number">

<label form="reservation_date">Date</label>
<input type="date" id="reservation_date" name="reservation_date">

<label form="reservation_time">Time</label>
<input type="time" id="reservation_time" name="reservation_time">

<button type="submit" id="submit">Submit</button>

</form>
<?php
// Include the configuration file which likely contains database connection settings and functions
require_once'configFunction.php';

// Check if the request method is POST, which means the form has been submitted
if($_SERVER['REQUEST_METHOD'] == "POST")

{
  // Get the table number, reservation date, and reservation time from the submitted form
    $_table_number = $_POST['table_number'];
    $_reservation_date  = $_POST['reservation_date'];
    $_reservation_time = $_POST['reservation_time'];

    // Prepare an SQL statement to select any reservations that match the submitted table number, date, and time
    $sql = "SELECT * FROM reservations WHERE  table_number =? AND  reservation_date =? AND  reservation_time =? ";
$main = $conn -> prepare( $sql);

    // Bind the parameters to the SQL query: table number as an integer, and reservation date and time as strings
$main -> bind_param("iss",  $_table_number,   $_reservation_date, $_reservation_time );

    // Execute the SQL query
$main -> execute();

// Get the result of the query
$result = $main ->get_result();

    // Check if there are any rows in the result, meaning a reservation already exists for the specified table, date, and time
if($result -> num_rows >0)


{
echo "This number table is exists";
}
else
{
    // Prepare an SQL statement to insert a new reservation into the database
    $sql = "INSERT INTO  reservations (table_number, reservation_date, reservation_time, status ) VALUE (?, ?, ?, 'booked')";   

    $main = $conn -> prepare( $sql);


    $main -> bind_param("iss",  $_table_number,   $_reservation_date, $_reservation_time );
    
    $main -> execute();

}

}
// Close the database connection
$conn -> close();
?>




















</body>
</html>
