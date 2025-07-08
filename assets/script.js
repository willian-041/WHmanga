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
    interval: 5000,
    ride: 'carousel'
  }); 

  function calcularTempo(dataISO) {
    const agora = new Date();
    const data = new Date(dataISO);
    const diffMs = agora - data;
    const diffMin = Math.floor(diffMs / 60000);
    const diffHoras = Math.floor(diffMin / 60);

    if (diffMin < 1) return 'Agora mesmo';
    if (diffMin < 60) return `há ${diffMin} minuto${diffMin > 1 ? 's' : ''}`;
    if (diffHoras < 24) return `há ${diffHoras} hora${diffHoras > 1 ? 's' : ''}`;

    const diffDias = Math.floor(diffHoras / 24);
    return `há ${diffDias} dia${diffDias > 1 ? 's' : ''}`;
  }

  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.chapter-time').forEach(el => {
      const time = el.dataset.time;
      if (time) {
        el.textContent = calcularTempo(time);
      } 
    })
  })