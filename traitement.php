<?php
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        if ($_POST["pseudo"]=="" or $_POST["pseudo"]==null and $_POST["password"]=="" or $_POST["password"]==null) {
            header('Location: ../login.php');
            exit;
        }
    }

    echo 'Bienvenue '.$_POST["pseudo"];

    $conn = mysqli_connect("localhost", "root", "");

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $conn = new mysqli("localhost", "root", "", "Client");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (pseudo, password)
    VALUES ('".$_POST["pseudo"]."','".$_POST["password"]."')";

    if ($conn->query($sql) !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();