// Opcional: Agregar animaciones con JavaScript
var dropdowns = document.querySelectorAll(".menu-item");

dropdowns.forEach(function(dropdown) {
    dropdown.addEventListener("mouseover", function() {
        this.querySelector(".dropdown-content").style.display = "block";
    });

    dropdown.addEventListener("mouseout", function() {
        this.querySelector(".dropdown-content").style.display = "none";
    });
});
