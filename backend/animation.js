function irAlPrincipio() {
    window.scrollTo({
top: 0,
behavior:'smooth'
});
}

// Mostrar u ocultar el botón según la posición del scroll
window.onscroll = function () {
   mostrarOcultarBoton();
};

function mostrarOcultarBoton() {
   var botonIrArriba = document.getElementById("botonIrArriba");
   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       botonIrArriba.style.display = "block";
   } else {
       botonIrArriba.style.display = "none";
   }
}