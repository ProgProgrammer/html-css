function menuAdaptiveFunction() {
    var block = document.getElementById("menu_block");

    block.classList.remove("menu_block_animation_off");

    block.classList.add("menu_block_animation");


    var adaptive = document.getElementById("menu_absolute");

    adaptive.classList.remove("menu_absolute_animation_off");

    adaptive.classList.add("menu_absolute_animation");
}

function menuCrossFunction() {
    var block = document.getElementById("menu_block");

    block.classList.remove("menu_block_animation");

    block.classList.add("menu_block_animation_off");


    var adaptive = document.getElementById("menu_absolute");

    adaptive.classList.remove("menu_absolute_animation");

    adaptive.classList.add("menu_absolute_animation_off");
}