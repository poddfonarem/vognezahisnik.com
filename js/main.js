document.getElementById('searchButton').addEventListener('click', function () {
    const searchField = document.getElementById('searchField');
    const searchButton = document.getElementById('searchButton');
    const isHidden = searchField.style.display === 'none';

    searchField.style.display = isHidden ? 'block' : 'none';

    if (isHidden) {
        searchButton.innerHTML = '<i class="fas fa-times close-icon"></i>';
        searchField.focus();
    } else {
        searchButton.innerHTML = '<i class="fas fa-search"></i>';
    }
});

document.querySelectorAll('a[href*="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').split('#')[1];
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});