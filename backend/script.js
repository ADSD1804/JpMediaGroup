document.addEventListener("DOMContentLoaded", function() {
  let currentImageIndex = 0;
  const images = document.querySelectorAll('.image-container img');
  const prevButton = document.getElementById('prevBtn');
  const nextButton = document.getElementById('nextBtn');

  function showImage(index) {
    images.forEach((image, i) => {
      if (i === index) {
        image.style.display = 'block';
      } else {
        image.style.display = 'none';
      }
    });
  }

  function showNextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    showImage(currentImageIndex);
  }

  function showPrevImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    showImage(currentImageIndex);
  }

  // Ocultar todas las imágenes excepto la primera al cargar la página
  for (let i = 1; i < images.length; i++) {
    images[i].style.display = 'none';
  }

  prevButton.addEventListener('click', showPrevImage);
  nextButton.addEventListener('click', showNextImage);

  showImage(currentImageIndex);
});
