const cards = document.querySelectorAll('.inventory-card');

cards.forEach(card => {
    card.addEventListener('click', () => {
        card.classList.toggle('animated');
        setTimeout(() => {
            card.classList.remove('animated');
        }, 1000);
    });
});
