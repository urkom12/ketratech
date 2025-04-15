let links = document.querySelectorAll('.hire-now-link');

links.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();

        let id = link.getAttribute('data-id');
        window.location.href = `booking?id=${id}`;
    });
});
