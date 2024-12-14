<?php
// Дані отримані з форми
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);

// Email власника (змінити на ваш email)
$owner_email = "example@yourdomain.com";

// Тема листа
$subject = "Нова заявка з сайту";

// Повідомлення
$message = "
<h2>Нова заявка з сайту</h2>
<p><strong>Ім'я:</strong> $name</p>
<p><strong>Телефон:</strong> $phone</p>
";

// Заголовки для відправки HTML-листа
$headers = "From: no-reply@yourdomain.com\r\n";
$headers .= "Reply-To: $owner_email\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Відправка email
if (mail($owner_email, $subject, $message, $headers)) {
    echo "<script>alert('Заявка успішно відправлена!'); window.location.href = 'index.html';</script>";
} else {
    echo "<script>alert('Помилка під час відправки заявки. Спробуйте ще раз.'); window.location.href = 'index.html';</script>";
}
?>
