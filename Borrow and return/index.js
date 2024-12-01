
const darkMode = document.querySelector('.dark-mode');

darkMode.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode-variables');
    const isDarkMode = document.body.classList.contains('dark-mode-variables');
    localStorage.setItem('mode', isDarkMode ? 'dark' : 'light');
    darkMode.querySelectorAll('span').forEach((span, i) => span.classList.toggle('active', i === +isDarkMode));
});

// Apply saved mode on page load
document.addEventListener('DOMContentLoaded', () => {
    if (localStorage.getItem('mode') === 'dark') {
        document.body.classList.add('dark-mode-variables');
        darkMode.querySelectorAll('span').forEach((span, i) => span.classList.toggle('active', i === 1));
    }
// Masquer les formulaires au chargement
window.addEventListener('load', function() {
    document.getElementById('borrow').style.display = 'none';
    document.getElementById('return').style.display = 'none';
});

// Toggle affichage pour Borrow a Book
document.getElementById('borrow-btn').addEventListener('click', function() {
    const borrowForm = document.getElementById('borrow');
    const returnForm = document.getElementById('return');

    // Si le formulaire "Borrow" est déjà visible, le cacher, sinon l'afficher
    if (borrowForm.style.display === 'block') {
        borrowForm.style.display = 'none';
    } else {
        borrowForm.style.display = 'block';
        returnForm.style.display = 'none'; // Masquer l'autre formulaire
    }
});

// Toggle affichage pour Return a Book
document.getElementById('return-btn').addEventListener('click', function() {
    const returnForm = document.getElementById('return');
    const borrowForm = document.getElementById('borrow');

    // Si le formulaire "Return" est déjà visible, le cacher, sinon l'afficher
    if (returnForm.style.display === 'block') {
        returnForm.style.display = 'none';
    } else {
        returnForm.style.display = 'block';
        borrowForm.style.display = 'none'; // Masquer l'autre formulaire
    }
});


});

