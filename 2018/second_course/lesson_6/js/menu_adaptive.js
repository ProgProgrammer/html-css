var block = document.getElementById("menu_block");
var adaptive = document.getElementById("menu_absolute");

function menuAdaptiveFunction() {

    block.classList.remove("menu_block_animation_off");

    block.classList.add("menu_block_animation");


    adaptive.classList.remove("menu_absolute_animation_off");

    adaptive.classList.add("menu_absolute_animation");
}

function menuCrossFunction() {

    block.classList.remove("menu_block_animation");

    block.classList.add("menu_block_animation_off");



    adaptive.classList.remove("menu_absolute_animation");

    adaptive.classList.add("menu_absolute_animation_off");
}