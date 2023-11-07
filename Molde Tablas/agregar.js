document.getElementById("BotonExistencia").addEventListener("click", function() {
    var modal = document.getElementById("add");
    modal.style.display = "block";
});
document.getElementById("add").addEventListener("click", function(e) {
    if (e.target === this || e.target.id === "CerrarModal") {
        this.style.display = "none";
    }
});