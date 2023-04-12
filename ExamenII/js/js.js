const canvas = document.getElementById("splashScreen");
canvas.setAttribute("class", "splash");

const ctx = canvas.getContext("2d");

// var image = new Image();
// image.src = "images/RetroPunk-Icono.png";

// image.onload = function () {
//     ctx.drawImage(image, 120, 150, 350, 270);
// }


window.addEventListener("load", function () {
    // Mostrar el splash screen
    // var image = new Image();
    // image.src = "images/RetroPunk-Icono.png";

    // image.onload = function () {
    //     ctx.drawImage(image, 120, 150, 350, 270);
    // }

    // Ocultar el splash screen después de 3 segundos
    setTimeout(function () {canvas.style.display = "none";}, 5000);

    
    
});
