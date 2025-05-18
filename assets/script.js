document.addEventListener("DOMContentLoaded", () => {
  const toggleSearchBtn = document.getElementById("toggle-search");
  const searchInput = document.getElementById("search-input");

  toggleSearchBtn.addEventListener("click", () => {
    searchInput.classList.toggle("d-none");
    searchInput.focus();
  });
});

  var myCarousel = document.querySelector('#mangaCarousel');
  var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 8000,
    ride: 'carousel'
  });
