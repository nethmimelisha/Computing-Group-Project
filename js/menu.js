function toggleMenu() {
    const menu = document.querySelector('.menu');
    const menuIcon = document.querySelector('.menu-btn i');

    if (menu.style.left === '-250px') {
        menu.style.left = '0';
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-times');
        menuIcon.classList.add('active'); // Add the active class
    } else {
        menu.style.left = '-250px';
        menuIcon.classList.remove('fa-times');
        menuIcon.classList.add('fa-bars');
        menuIcon.classList.remove('active'); // Remove the active class
    }
}