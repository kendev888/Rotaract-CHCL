// Menu responsive
const toggleBtn = document.querySelector('.menu-toggle');
const nav = document.querySelector('nav');

toggleBtn.addEventListener('click', () => {
    nav.classList.toggle('active');
});

// Année dynamique dans le footer
document.getElementById('year').textContent = new Date().getFullYear();
document.getElementById('events-more').addEventListener('click', () => {
    // Logique pour charger ou afficher plus d'événements
    alert('Chargement de plus d\'événements...');
});

document.getElementById('gallery-more').addEventListener('click', () => {
    // Logique pour charger ou afficher plus de photos
    alert('Chargement de plus de photos...');
});