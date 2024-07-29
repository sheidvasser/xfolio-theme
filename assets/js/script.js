const icons = document.querySelectorAll('.navigation-button');
const navbar = document.getElementById('navigation-list');
const navWrapper = document.getElementById('navigation-wrapper');
const overlay = document.getElementById('overlay');

document.addEventListener('click', (e) => {
    for (let i = 0; i < icons.length; i++) {
        const element = icons[i];

        if (e.target == element || (navbar.classList.contains('active-navigation') && e.target != navbar)) {
            navbar.classList.toggle('active-navigation');
            overlay.classList.toggle('overlay-active')
            break;
        }
    }
})