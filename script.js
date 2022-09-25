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
    //mobile menu close/open
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

    //modal form close/open START
    let modalFormOpen = document.querySelector('.open-modal');
    let modalFormClose = document.querySelector('.close-modal');
    let modalModalForm = document.querySelector('.modal-window');

    modalFormOpen.onclick = function () {
        let modalWindow = document.querySelector('.modal-window');
        if (!modalWindow.classList.contains('active')) {
            modalWindow.classList.add('active');
            body.style.overflow = "hidden";
        }
    }

    modalFormClose.onclick = function () {
        let modalWindow = document.querySelector('.modal-window');
        if (modalWindow.classList.contains('active')) {
            modalWindow.classList.remove('active');
            body.style.overflow = "auto";
        }
    }

    modalModalForm.onclick = function (e) {
        let modalWindow = document.querySelector('.modal-window');

        if (e.target.className == "modal-window active") {
            modalWindow.classList.remove('active');
            body.style.overflow = "auto";
        };
    }
    //modal form close/open END

    //modal-mobile form close/open START
    let modalMobileFormOpen = document.querySelector('.open-modal-mobile');
    let modalMobileFormClose = document.querySelector('.close-modal-mobile');
    let modalModalMobileForm = document.querySelector('.modal-window-mobile');

    modalMobileFormOpen.onclick = function () {
        let modalWindow = document.querySelector('.modal-window-mobile');
        if (!modalWindow.classList.contains('active')) {
            modalWindow.classList.add('active');
            body.style.overflow = "hidden";
        }
    }

    modalMobileFormClose.onclick = function () {
        let modalWindow = document.querySelector('.modal-window-mobile');
        if (modalWindow.classList.contains('active')) {
            modalWindow.classList.remove('active');
            body.style.overflow = "auto";
        }
    }

    modalModalMobileForm.onclick = function (e) {
        let modalWindow = document.querySelector('.modal-window-mobile');

        if (e.target.className == "modal-window-mobile active") {
            modalWindow.classList.remove('active');
            body.style.overflow = "auto";
        };
    }
    //modal-mobile form close/open END

    let prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        let currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.querySelector(".mobile-menu-block").style.top = "0";
        } else {
            document.querySelector(".mobile-menu-block").style.top = "-70px";
        }
        prevScrollpos = currentScrollPos;
    }
}