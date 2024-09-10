import './bootstrap';

document.getElementById('mobile-menu').addEventListener('click', () => {
    const navEl = document.getElementById('topnav');

    if (navEl.classList.contains('mobile-nav')) {
        navEl.classList.remove('mobile-nav')
    } else {
        navEl.classList.add('mobile-nav')
    }
})
