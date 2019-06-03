var menu_adaptive2 = document.getElementById('header');

var menu_adaptive3 = document.getElementById('menu_adaptive');

var avatarSourceBottom = menu_adaptive2.getBoundingClientRect().bottom + window.pageYOffset;


window.onscroll = function() {
    if (window.pageYOffset > avatarSourceBottom) {
        menu_adaptive3.classList.add("menu_white");

    } else {
        menu_adaptive3.classList.remove("menu_white");
    }
}