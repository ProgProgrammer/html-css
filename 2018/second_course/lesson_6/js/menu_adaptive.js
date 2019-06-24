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

block.onclick = function(event) { // блок (block), в котором будут происходить клики
    var target = event.target; // показывает, где был клик, и присваивает эту информацию переменной target

    if (target.id != 'menu_absolute') { // если был произведен клик по блоку с идентификатором отличным от "menu_absolute", то код выполнится
        block.classList.remove("menu_block_animation");

        block.classList.add("menu_block_animation_off");



        adaptive.classList.remove("menu_absolute_animation");

        adaptive.classList.add("menu_absolute_animation_off");
    }
}