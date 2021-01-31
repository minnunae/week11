<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCRPTION);

    $sql = "CREATE TABLE MyGusts(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firsTname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    $conn->exec($sql);
    echo "Database created successfully<br>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->qetMessage();
}

$conn = null;
?>