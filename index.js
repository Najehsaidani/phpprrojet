const sideMenu = document.querySelector('aside');
const menuBtn = document.getElementById('menu-btn');
const closeBtn = document.getElementById('close-btn');

const darkMode = document.querySelector('.dark-mode');

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
});



// Toggle dark mode and save preference
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
});


/*
Orders.forEach(order => {
    const tr = document.createElement('tr');
    const trContent = `
        <td>${order.productName}</td>
        <td>${order.productNumber}</td>
        <td>${order.paymentStatus}</td>
        <td class="${order.status === 'Declined' ? 'danger' : order.status === 'Pending' ? 'warning' : 'primary'}">${order.status}</td>
        <td class="primary">Details</td>
    `;
    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr);
});*/