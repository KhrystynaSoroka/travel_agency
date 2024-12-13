<?php
// Параметри підключення до бази даних
$servername = "localhost";
$username = "root";
$password = "93hti905";
$dbname = "travel_agency";

// Підключення до бази даних
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка підключення
if ($conn->connect_error) {
    die("Помилка з'єднання: " . $conn->connect_error);
}

// Отримання даних із форми через POST
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$travel_date = htmlspecialchars($_POST['travel_date']);
$guests = (int)$_POST['guests'];
$additional_wishes = htmlspecialchars($_POST['additional_wishes']);

// Підготовлений SQL-запит для безпеки
$stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, travel_date, guests, additional_wishes) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssis", $name, $email, $phone, $travel_date, $guests, $additional_wishes);

// Виконання SQL-запиту
if ($stmt->execute()) {
    echo "Бронювання успішно додано!";
} else {
    echo "Помилка: " . $stmt->error;
}

// Закриття з'єднання
$stmt->close();
$conn->close();
?>
