var nav = document.getElementById("nav_header");
var fixed = document.getElementById("row_nav_fixed");

var menu_adaptive2 = document.getElementById('header');

var menu_adaptive3 = document.getElementById('menu_adaptive');

var avatarSourceBottom = menu_adaptive2.getBoundingClientRect().bottom + window.pageYOffset;


window.onscroll = function() {
    if (window.pageYOffset > avatarSourceBottom) {
        menu_adaptive3.classList.add("menu_white");
        nav.classList.add("row_nav_scroll");
        fixed.classList.add("nav_fixed_scroll");

    } else {
        menu_adaptive3.classList.remove("menu_white");
        nav.classList.remove("row_nav_scroll");
        fixed.classList.remove("row_nav_fixed_scroll");
    }
}