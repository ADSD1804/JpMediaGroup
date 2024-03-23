function loginAnimation() {
  let desplegar = document.getElementById("form_login");
  desplegar.classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".login_banner")) {
    let login = document.getElementsByClassName("login_content");
    for (let i = 0; i < login.length; i++) {
      let openLogin = login[i];
      if (openLogin.classList.contains("show")) {
        openLogin.classList.remove("show");
      }
    }
  }
};

function toggleDropdown() {
  var dropdown = document.getElementById("myDropdown");
  dropdown.classList.toggle("show");
}

// Cerrar el menú desplegable si el usuario hace clic fuera de él
window.onclick = function (event) {
  if (!event.target.matches(".dropbtn")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};
