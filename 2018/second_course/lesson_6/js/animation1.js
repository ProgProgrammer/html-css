var script = document.createElement('script');
script.src = "https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.3.0/lodash.js"
document.body.appendChild(script);

script.onload = function() {
    const x = document.getElementById("container");
    x.classList.add("container_background");

    const y = document.getElementById("header_h1");
    y.classList.add("header_h1_margin");

    const z = document.getElementById("nav_header");
    z.classList.add("nav_header_bottom");
}