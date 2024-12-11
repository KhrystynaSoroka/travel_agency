document.addEventListener("DOMContentLoaded", () => {
    console.log("Сайт завантажено!");
});
let slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  const slides = document.getElementsByClassName("slides");
  const dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1; }
  if (n < 1) { slideIndex = slides.length; }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
setInterval(() => plusSlides(1), 10000);

document.getElementById('filterForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const country = document.getElementById('country').value;
  const duration = document.getElementById('duration').value;
  const price = document.getElementById('price').value;

  const tours = document.querySelectorAll('.tour-card');
  
  tours.forEach(tour => {
      const tourCountry = tour.dataset.country;
      const tourDuration = tour.dataset.duration;
      const tourPrice = tour.dataset.price;

      const matchesCountry = !country || tourCountry === country;
      const matchesDuration = !duration || tourDuration === duration;
      const matchesPrice = !price || tourPrice === price;

      if (matchesCountry && matchesDuration && matchesPrice) {
          tour.style.display = '';
      } else {
          tour.style.display = 'none';
      }
  });
});




