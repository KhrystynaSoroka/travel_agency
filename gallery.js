const galleryContainer = document.querySelector('.gallery-container');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentIndex = 0;
const photosToShow = window.innerWidth > 768 ? 3 : 1; 
const photoWidth = galleryContainer.children[0].offsetWidth + 10; 

function updateGalleryPosition() {
    galleryContainer.style.transform = `translateX(-${currentIndex * photoWidth}px)`;
}

prevBtn.addEventListener('click', () => {
    currentIndex = Math.max(currentIndex - photosToShow, 0);
    updateGalleryPosition();
});

nextBtn.addEventListener('click', () => {
    const maxIndex = galleryContainer.children.length - photosToShow;
    currentIndex = Math.min(currentIndex + photosToShow, maxIndex);
    updateGalleryPosition();
});

window.addEventListener('resize', () => {
    const isMobile = window.innerWidth <= 768;
    currentIndex = 0; 
    updateGalleryPosition();
});
