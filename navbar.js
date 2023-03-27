window.onload = function () {
    const menu_btn = document.querySelector('.menu-burger');
    const navbar = document.querySelector('.navbar');

    menu_btn.addEventListener('click', function () {
        menu_btn.classList.toggle('is-active');
        navbar.classList.toggle('is-active');
        document.querySelector('body').classList.toggle('no-scroll');
    });

    document.querySelectorAll('.nav-item').forEach(function(item){
        if (item.href == window.location.href) {
            item.classList.add('active');
            item.parentElement.classList.add('active');
        }
    });
}