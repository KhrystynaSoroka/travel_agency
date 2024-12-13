document.getElementById("bookingForm").addEventListener("submit", function (e) {
    e.preventDefault(); 
    const formData = new FormData(this); 
    fetch("process_booking.php", {
        method: "POST",
        body: formData,
    })
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("message").innerText = "Бронювання успішно додано!";
            this.reset(); 
        })
        .catch((error) => {
            document.getElementById("message").innerText = "Сталася помилка. Спробуйте ще раз.";
            console.error("Error:", error);
        });
});