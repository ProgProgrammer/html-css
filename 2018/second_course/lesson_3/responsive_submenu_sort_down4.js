function myFunctionSortDown4() {
    var x = document.getElementById("myTopSubmenu4");

    x.classList.toggle("on");

    var y = document.getElementById("myTopSubmenuMargin4");

    y.classList.toggle("bottom");

    var a = document.getElementById("myTopSubmenuArrow4");

    a.classList.toggle("bottom");


    /* Закрытие остальных выпадающих меню. */


    var x = document.getElementById("myTopSubmenu");

    x.classList.remove("on");

    var y = document.getElementById("myTopSubmenuMargin");

    y.classList.remove("bottom");

    var a = document.getElementById("myTopSubmenuArrow");

    a.classList.remove("bottom");


    var x = document.getElementById("myTopSubmenu2");

    x.classList.remove("on");

    var y = document.getElementById("myTopSubmenuMargin2");

    y.classList.remove("bottom");

    var a = document.getElementById("myTopSubmenuArrow2");

    a.classList.remove("bottom");


    var x = document.getElementById("myTopSubmenu3");

    x.classList.remove("on");

    var y = document.getElementById("myTopSubmenuMargin3");

    y.classList.remove("bottom");

    var a = document.getElementById("myTopSubmenuArrow3");

    a.classList.remove("bottom");


    var x = document.getElementById("myTopSubmenu5");

    x.classList.remove("on");

    var y = document.getElementById("myTopSubmenuMargin5");

    y.classList.remove("bottom");

    var a = document.getElementById("myTopSubmenuArrow5");

    a.classList.remove("bottom");



    var x = document.getElementById("myTopSubmenu6");

    x.classList.remove("on");

    var a = document.getElementById("myTopSubmenuArrow6");

    a.classList.remove("bottom");
}
