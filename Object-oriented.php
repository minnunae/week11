<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error){
    die("Connection failed:" . $conn->error);
}
$sql = "TNSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE){
    echo "Database created successfully";
}else{
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>