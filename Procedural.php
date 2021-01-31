<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

$conn =  mysqli_connect($servername,$username,$password);

if (!$conn){
    die("Connection failed:" . mysqli_connect_error);
}
$sql = "TNSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $Sql)){
    echo "Database created successfully";
}else{
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>