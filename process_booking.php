<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_agency";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Помилка з'єднання: " . $conn->connect_error);
}

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$travel_date = htmlspecialchars($_POST['travel_date']);
$guests = (int)$_POST['guests'];
$additional_wishes = htmlspecialchars($_POST['additional_wishes']);
$tour = htmlspecialchars($_POST['tour']); 

$stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, travel_date, guests, additional_wishes, tour) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssiss", $name, $email, $phone, $travel_date, $guests, $additional_wishes, $tour);

if ($stmt->execute()) {
    echo "Бронювання успішно додано!";
} else {
    echo "Помилка: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
