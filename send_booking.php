<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $tourName = htmlspecialchars($_POST['tour-name']);
    $date = htmlspecialchars($_POST['date']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $guests = htmlspecialchars($_POST['guests']);
    $comments = htmlspecialchars($_POST['comments']);

    // Електронна пошта власника
    $to = "sorokakhristina05@gmail.com"; // Заміни на реальну пошту власника
    $subject = "Нове бронювання: $tourName";

    // Форматування повідомлення
    $message = "
    Ви отримали нове бронювання:
    
    Тур: $tourName
    Дата: $date
    Ім'я: $name
    Електронна пошта: $email
    Телефон: $phone
    Кількість гостей: $guests
    Коментарі: $comments
    ";

    // Заголовки
    $headers = "From: no-reply@touragency.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Надсилання листа
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Ваше бронювання успішно надіслано! Ми зв'яжемося з вами найближчим часом.</p>";
    } else {
        echo "<p>Сталася помилка при надсиланні. Спробуйте ще раз пізніше.</p>";
    }
}
?>
