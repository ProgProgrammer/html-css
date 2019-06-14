const mql = window.matchMedia('all and (min-width: 1025px)');
const mql2 = window.matchMedia('all and (max-width: 1024px)');

const desktop_menu = document.getElementById("row_nav");
const menu_adaptive = document.getElementById("menu_absolute_ul");

const url = window.location.href;

if (url.indexOf('http://u90539lq.beget.tech/elements.html') != -1) {

    if (mql.matches || !desktop_menu.firstChild) {
        while (menu_adaptive.firstChild) {
            menu_adaptive.removeChild(menu_adaptive.firstChild);
        }

        desktop_menu.innerHTML = "<div id=\"row_nav_fixed\" class=\"row_nav_fixed\"><ul class=\"col-md-9 menu\"><li class=\"menu_li\"><a href=\"index.php\"><p>This is Massively</p></a></li><li class=\"menu_li\"><a href=\"generic.html\"><p>Generic Page</p></a></li><li class=\"menu_li menu_active\"><a href=\"elements.html\"><p>Elements Reference</p></a></li></ul><ul class=\"col-md-3 icons\"><li class=\"icons_li\"><a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li><li class=\"icons_li\"><a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li><li class=\"icons_li\"><a href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a></li><li class=\"icons_li\"><a href=\"https://github.com/ProgProgrammer\" target=\"_blank\"><i class=\"fab fa-github\"></i></a></li></ul></div>";

    } else if (mql2.matches || !menu_adaptive.firstChild) {
        while (desktop_menu.firstChild) {
            desktop_menu.removeChild(desktop_menu.firstChild);
        }

        menu_adaptive.innerHTML = "<li class=\"menu_absolute_ul_li\"><a href=\"index.php\"><p>This is Massively </p></a></li><li class=\"menu_absolute_ul_li\"><a href=\"generic.html\"><p>Generic Page</p></a></li><li class=\"menu_absolute_ul_li menu_absolute_ul_li_active\"><a href=\"elements.html\"><p>Elements Reference</p></a></li>";

    }
} else if (url.indexOf('http://u90539lq.beget.tech/generic.html') != -1) {
    if (mql.matches || !desktop_menu.firstChild) {
        while (menu_adaptive.firstChild) {
            menu_adaptive.removeChild(menu_adaptive.firstChild);
        }

        desktop_menu.innerHTML = "<div id=\"row_nav_fixed\" class=\"row_nav_fixed\"><ul class=\"col-md-9 menu\"><li class=\"menu_li\"><a href=\"index.php\"><p>This is Massively</p></a></li><li class=\"menu_li menu_active\"><a href=\"generic.html\"><p>Generic Page</p></a></li><li class=\"menu_li\"><a href=\"elements.html\"><p>Elements Reference</p></a></li></ul><ul class=\"col-md-3 icons\"><li class=\"icons_li\"><a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li><li class=\"icons_li\"><a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li><li class=\"icons_li\"><a href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a></li><li class=\"icons_li\"><a href=\"https://github.com/ProgProgrammer\" target=\"_blank\"><i class=\"fab fa-github\"></i></a></li></ul></div>";

    } else if (mql2.matches || !menu_adaptive.firstChild) {
        while (desktop_menu.firstChild) {
            desktop_menu.removeChild(desktop_menu.firstChild);
        }

        menu_adaptive.innerHTML = "<li class=\"menu_absolute_ul_li\"><a href=\"index.php\"><p>This is Massively </p></a></li><li class=\"menu_absolute_ul_li menu_absolute_ul_li_active\"><a href=\"generic.html\"><p>Generic Page</p></a></li><li class=\"menu_absolute_ul_li\"><a href=\"elements.html\"><p>Elements Reference</p></a></li>";

    }
} else if (url.indexOf('http://u90539lq.beget.tech/index.php') != -1) {
    if (mql.matches || !desktop_menu.firstChild) {
        while (menu_adaptive.firstChild) {
            menu_adaptive.removeChild(menu_adaptive.firstChild);
        }

        desktop_menu.innerHTML = "<div id=\"row_nav_fixed\" class=\"row_nav_fixed\"><ul class=\"col-md-9 menu\"><li class=\"menu_li menu_active\"><a href=\"index.php\"><p>This is Massively</p></a></li><li class=\"menu_li\"><a href=\"generic.html\"><p>Generic Page</p></a></li><li class=\"menu_li\"><a href=\"elements.html\"><p>Elements Reference</p></a></li></ul><ul class=\"col-md-3 icons\"><li class=\"icons_li\"><a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li><li class=\"icons_li\"><a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li><li class=\"icons_li\"><a href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a></li><li class=\"icons_li\"><a href=\"https://github.com/ProgProgrammer\" target=\"_blank\"><i class=\"fab fa-github\"></i></a></li></ul></div>";

    } else if (mql2.matches || !menu_adaptive.firstChild) {
        while (desktop_menu.firstChild) {
            desktop_menu.removeChild(desktop_menu.firstChild);
        }

        menu_adaptive.innerHTML = "<li class=\"menu_absolute_ul_li menu_absolute_ul_li_active\"><a href=\"index.php\"><p>This is Massively </p></a></li><li class=\"menu_absolute_ul_li\"><a href=\"generic.html\"><p>Generic Page</p></a></li><li class=\"menu_absolute_ul_li\"><a href=\"elements.html\"><p>Elements Reference</p></a></li>";

    }
}
