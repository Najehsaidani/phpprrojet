function searchMembers() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const memberCards = document.querySelectorAll('.member-card');

    // Loop through each member card
    memberCards.forEach(card => {
        const name = card.querySelector('h3').textContent.toLowerCase(); // Get member's name
        const email = card.querySelector('p').textContent.toLowerCase(); // Get member's email
        
        // If search term matches either name or email, show the card; otherwise, hide it
        if (name.includes(filter) || email.includes(filter)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}
