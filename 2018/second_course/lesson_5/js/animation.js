var script = document.createElement('script');
script.src = "https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.3.0/lodash.js"
document.body.appendChild(script);

script.onload = function() {
    var mql = window.matchMedia('all and (min-width: 1281px)');
    var mql2 = window.matchMedia('all and (min-width: 1025px) and (max-width: 1280px)');
    var mql3 = window.matchMedia('all and (min-width: 768px) and (max-width: 1024px)');
    var mql4 = window.matchMedia('all and (max-width: 767px)');
    if (mql.matches) {
        const x = document.getElementById("animateOne");
        x.classList.add("animation");

        const y = document.getElementById("animateTwo");
        y.classList.add("animationtwo");

    } else if (mql2.matches) {
        const x = document.getElementById("animateThree");
        x.classList.add("animationthree");

        const y = document.getElementById("animateTwo");
        y.classList.add("animationtwo");

    } else if (mql3.matches) {
        const x = document.getElementById("animateThree");
        x.classList.add("animationfour");

    } else if (mql4.matches) {
        const x = document.getElementById("animateThree");
        x.classList.add("animationfive");

    }
}