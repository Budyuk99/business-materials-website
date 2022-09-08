window.addEventListener('scroll', function () {
    if (pageYOffset >= 100) {
        document.querySelector('.header').style.background = 'rgba(62, 69, 81, 0.9)';
    } else {
        document.querySelector('.header').style.background = 'rgba(62, 69, 81, 0.5)';
    }
});

window.addEventListener('scroll', function () {
    if (pageYOffset >= 200) {
        document.querySelector('.mobile-menu-block').style.background = 'rgba(62, 69, 81, 0.9)';
    } else {
        document.querySelector('.mobile-menu-block').style.background = 'rgba(62, 69, 81, 0.5)';
    }
});

window.onload = function () {

    let body = document.body;
    let mobileMenuOpen = document.querySelector('.mobile-menu-item-1');
    let mobileMenuClose = document.querySelector('.close');

    mobileMenuOpen.onclick = function () {
        document.querySelector('.mobile-menu-hidden').style.opacity = '1';
        let mobileMenu = document.querySelector('.mobile-menu-hidden');
        if (!mobileMenu.classList.contains('active-mobile-menu')) {
            mobileMenu.classList.add('active-mobile-menu');
            body.style.overflow = "hidden";
        }
    }

    mobileMenuClose.onclick = function () {
        document.querySelector('.mobile-menu-hidden').style.opacity = '0';
        let mobileMenu = document.querySelector('.mobile-menu-hidden');
        if (mobileMenu.classList.contains('active-mobile-menu')) {
            mobileMenu.classList.remove('active-mobile-menu');
            body.style.overflow = "auto";
        }
    }
}