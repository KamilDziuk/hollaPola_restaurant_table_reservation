

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
     
    $status = 'Wolny';



    $sql = "UPDATE reservations SET
       
            status = '$status'";

    if ($conn->query($sql) === TRUE) {
        echo "Dodano rezerwację";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
