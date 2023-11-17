document.getElementById("EditarDato").addEventListener("click", function() {
    var modal = document.getElementById("modify");
    modal.style.display = "block";
});
document.getElementById("modify").addEventListener("click", function(e) {
    if (e.target === this || e.target.id === "CerrarModal") {
        this.style.display = "none";
    }
});