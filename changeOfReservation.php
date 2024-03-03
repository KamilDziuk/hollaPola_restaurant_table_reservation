

<?php

    require_once 'config/config.php';
    $servername = $config['servername'];
    $username = $config['username'];
    $password = $config['password'];
    $dbname = $config['dbname'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Połączenie nieudane: " . $conn->connect_error);
    }
    
    $reservationTime = $_POST['reservationTime'];
    $status = 'Zajety';
    $firstNameAndLastName = $_POST['firstNameAndLastName'];       
    $phone = $_POST['phone'];


    $sql = "UPDATE reservations SET
       status = '$status',
       phone = '$phone',
       firstNameAndLastName = '$firstNameAndLastName'
    
            WHERE  reservationTime = '$reservationTime'";

    if ($conn->query($sql) === TRUE) {
        echo "Dodano rezerwację";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
