function myFunctionSelect1() {
    var x = document.getElementById("Select1Options");
    
    x.classList.toggle("on");
    
    var y = document.getElementById("Select1TriangleDown");
    
    y.classList.toggle("on");
    
    var y = document.getElementById("Select1TriangleUp");
    
    y.classList.toggle("on");
    
    
    /* ИЗМЕНЯЕМ ПОЛОЖЕНИЕ ТРЕУГОЛЬНИКА ВО ВТОРОМ СЕЛЕКТОРЕ */
    
    
    var y = document.getElementById("Select1TriangleUp2");
    
    y.classList.remove("on");
    
    var y = document.getElementById("Select1TriangleDown2");
    
    y.classList.add("on");
    
    
    /* УДАЛЯЕМ ВСЕ СПИСКИ ВТОРОГО СЕЛЕКТОРА */
    
    
    var y = document.getElementById("Select2Options");
    
    y.classList.remove("on");
    
    var y = document.getElementById("Select3Options");
    
    y.classList.remove("on");
    
    var y = document.getElementById("Select4Options");
    
    y.classList.remove("on");
    
    var y = document.getElementById("Select5Options");
    
    y.classList.remove("on");
    
    var y = document.getElementById("Select6Options");
    
    y.classList.remove("on");
}